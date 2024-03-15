<?php namespace App\Controllers;

use App\Models\EmailModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use Google_Client;

class Login extends Basecontroller
{
	use ResponseTrait;

	public function __construct() {
		$this->model = new UsersModel();
		// $this->user = $this->model->where(['id' => session("user")])->first();

        $settingsModel = model('SettingsModel');
		$this->settings = $settingsModel->where(['id' => 1])->first();
	}

    public function index()
    {
        // $collections_model = model('CollectionsModel');
        // $teachers_model = model('TeachersModel');
        // $classes_model = model('ClassesModel');
        // $PlaylistsModel = model('PlaylistsModel');
        // $data['logged_user'] = $this->user;
		$data['settings'] = $this->settings;
        // $data['controller'] = $this->controller;
        // if(!isset($data['logged_user'])){
        //     return redirect()->to('/login');
        // }
		session()->remove('user');

        $data['current'] = array();
        // $data['current'] = $this->model->where(['template' => 'homepage'])->first();
        // $data['new_micro_classes'] = $classes_model->all_micro_classes_home(0, 6, NULL, 'classes.created_at desc');
        // $data['new_mega_classes'] = $classes_model->all_mega_classes_home(0, 6, NULL, 'classes.created_at desc');
        // $data['micro_collection'] = $collections_model->single_collection('slug', 'micro-for-beginners');
        // $data['mega_collection'] = $collections_model->single_collection('slug', 'lagree-101');
        // $data['all_sliders'] = $this->model->query("SELECT * FROM slider WHERE deleted_at IS NULL AND status = 0 ORDER BY sort")->getResultArray();
        // $data['four_playlists'] = $PlaylistsModel->all_playlists(0, 4);

		echo view('login_view', $data);
    }

    public function validate_login()
    {
		$request = service('request');
		$data = $request->getPost();
		session()->remove('user');

		$response = $this->model->login_user($data);
		if($response['success']){
			session()->set('user', $response['user_id']);
		}
		$response['method'] = $request->getMethod();
		$response['request'] = $request;
        if(isset($data['return_url']) && $data['return_url'] != ''){
            $response['returl_url'] = $data['return_url'];
        }

		//echo json_encode($response);
		return $this->respond($response);
    }

    public function logout()
    {
		session()->remove('user');
		// session()->remove('teacher');
		// session()->remove('subscription');
		// session()->remove('subscription_info');
		$response['success'] = TRUE;
		return redirect('/');
    }

    public function direct_login()
    {
		session()->set('admin', 1);
    }

	public function validate_fb_id()
	{
		$request = service('request');
		$data = $request->getPost();
		$response['method'] = $request->getMethod();
		$response['request'] = $request;
		$response['data'] = $data;
		$response['success'] = FALSE;
		if (!isset($data['fb_id'])){
			$response['message'] = 'There is no valid Facebook account.';
			return $this->respond($response);
		}
		$user = $this->model->where(['fb_id' => $data['fb_id']])->findAll();
		if (count($user) == 1){
			$response['user_id'] = $user[0]['id'];
			session()->set('user', $user[0]['id']);
			$response['success'] = TRUE;
			$response['return_url'] = site_url('account');
		}else{
			$response['message'] = 'There is no user connected with this Facebook account.';
		}
		return $this->respond($response);
	}

	public function validate_google_id()
	{
		$request = service('request');
		$data = $request->getPost();
		$response['method'] = $request->getMethod();
		$response['request'] = $request;
		$response['data'] = $data;
		$response['success'] = FALSE;
		if (!isset($data['google_id'])){
			$response['message'] = 'There is no valid Google account.';
			return $this->respond($response);
		}
		$user = $this->model->where(['google_id' => $data['google_id']])->findAll();
		if (count($user) == 1){
			$response['user_id'] = $user[0]['id'];
			session()->set('user', $user[0]['id']);
			$response['success'] = TRUE;
			$response['return_url'] = site_url('account');
		}else{
			$response['message'] = 'There is no user connected with this Google account.';
		}
		return $this->respond($response);
	}

	public function validate_google_token()
	{
		$request = service('request');
		$data = $request->getPost();
		$response['method'] = $request->getMethod();
		$response['request'] = $request;
		$response['data'] = $data;
		$response['success'] = FALSE;
		if (empty($data['google_token'])){
			$response['message'] = 'There is no valid Google account.';
			return $this->respond($response);
		}
		//Check google token
		//$client = new Google_Client(['client_id' => '833987669230-9l96j3rpv6468ai1ct59qiorgaba1j18.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
		$client = new Google_Client(['client_id' => '21386772169-32tphh0d0jl66bqsm38fvm6ghgrau1g7.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
		$payload = $client->verifyIdToken($data['google_token']);
		if ($payload) {
		  $userid = $payload['sub'];
		  // If request specified a G Suite domain:
		  //$domain = $payload['hd'];
			$user = $this->model->where(['google_token' => $data['google_token']])->findAll();
			if (count($user) == 1){
				$response['user_id'] = $user[0]['id'];
				session()->set('user', $user[0]['id']);
				$response['success'] = TRUE;
				$response['return_url'] = site_url('account');
			}else{
				$response['message'] = 'There is no user connected with this Google account.';
			}
		} else {
		  // Invalid ID token
		  $response['message'] = 'Invalid Google token.';
		}
		return $this->respond($response);
	}

    public function forgot_pass()
    {
		$email_model = new EmailModel();
		$request = service('request');
		$data = $request->getPost();

        $user = $this->model->where(['email' => $data['email']])->first();
        if ($user != NULL){
            // $response['user'] = $user;
            $to = $data['email'];
            $subject = 'Lagree On Demand - Forgot password';
            $data = [
                'reset_pass_link' => base_url() . '/login/new_password/' . md5($user['id'])
            ];
            $template = 'front/email_templates/reset-password';
            $response = $email_model->send_template($to, FALSE, $subject, $data, $template);
            // $response = $email_model->send_email($data);
        }else{
            $response['msg'] = 'We did not find any user with this email address. Please try again';
            $response['email'] = $data['email'];
            $response['user'] = $user;
        }

        return $this->respond($response);
    }
    public function new_password($id)
    {
        $data = $this->model->where(['MD5(id)' => $id])->first();
        $data['user'] = $data;
		$data['logged_user'] = $this->user;
		$data['settings'] = $this->settings;

        $data['current']['image'] = base_url() . 'images/liveevents1.jpg';
		$data['current']['seo_title'] = 'New password';
		$data['current']['seo_description'] = 'Lagree On Demand New password';
		$data['current']['seo_keywords'] = 'Lagree On Demand New password';

		echo view('front/pages/new-pass_view', $data);
    }

    public function reset_pass()
    {
		$email_model = new EmailModel();
		$request = service('request');
		$data = $request->getPost();

        // $response['data'] = $data;
        $validation =  \Config\Services::validation();
		$rules = $this->model->validationRules;
		$data = $this->request->getPost();

        unset($rules['firstname']);
        unset($rules['lastname']);
		$validation->reset();
		$validation->setRules($rules);
        $response['success'] = FALSE;
        if (!$validation->run($data)){
			$response['message'] = implode('</br>', $validation->getErrors());
		}else{
            if (isset($data['password']) AND $data['password'] <> ''){
                $data['password'] = '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['password']))));
            }
            $response['success'] = $this->model->save($data);
        }

        if($response['success']){
            $to = $data['email'];
            $subject = 'Lagree On Demand - Password changed';
            $data = [];
            $template = 'front/email_templates/password-changed';
            $response = $email_model->send_template($to, FALSE, $subject, $data, $template);
        }else{
            $response['email_sent'] = 'NOT SEND';
        }

        return $this->respond($response);
    }

	public function test_token()
	{
		$id_token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6ImFkZDhjMGVlNjIzOTU0NGFmNTNmOTM3MTJhNTdiMmUyNmY5NDMzNTIiLCJ0eXAiOiJKV1QifQ.eyJpc3MiOiJhY2NvdW50cy5nb29nbGUuY29tIiwiYXpwIjoiODMzOTg3NjY5MjMwLTlsOTZqM3JwdjY0NjhhaTFjdDU5cWlvcmdhYmExajE4LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwiYXVkIjoiODMzOTg3NjY5MjMwLTlsOTZqM3JwdjY0NjhhaTFjdDU5cWlvcmdhYmExajE4LmFwcHMuZ29vZ2xldXNlcmNvbnRlbnQuY29tIiwic3ViIjoiMTEyODg3NDU5MTIyMzQ3MTUwODY4IiwiZW1haWwiOiJtaWxvcy5kam9ub3ZpYy5tb2JpbG5pQGdtYWlsLmNvbSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJhdF9oYXNoIjoiM0ZlbG5RZ2lHZ3VGWm1TNVVHYWlKUSIsIm5hbWUiOiJNaWxvcyBEam9ub3ZpYyIsInBpY3R1cmUiOiJodHRwczovL2xoMy5nb29nbGV1c2VyY29udGVudC5jb20vYS9BQVRYQUp4dlVoeTA4U2pTNjRFVlcwV2NhMzNXa01TZHhPeGgzOF9KY1ZGdj1zOTYtYyIsImdpdmVuX25hbWUiOiJNaWxvcyIsImZhbWlseV9uYW1lIjoiRGpvbm92aWMiLCJsb2NhbGUiOiJlbiIsImlhdCI6MTYzNDg5OTg5NiwiZXhwIjoxNjM0OTAzNDk2LCJqdGkiOiI0NTMzYTkxNTI2NDhhMjQxOWM5Mjg1ZjA2Njg0ZWEyOTljN2FiODE4In0.MJIMsju2dy-VGuYM4nPkh-pIyLLLbkUdjvGHCatfEciY8aLcWXeZe6K3G7l_EL8C7aZkdibGYXvjWde8ZcM7IJCZBT5j74eQynATIsxjCLWuFmoi4n7U9snQD_ZCRVZPiVXmd4JkNxLvKnaF2uo0-YJpP2ZRYx-1NU1dooYoG8HysHB8LGWPBWcCQU2O_cN0z4PT8i_gJh5PKEIn54mWLt9b1UfuntugDwc5DFHxMWPMmlLWm2JcTT-QmHBByuQCamc0YBUK1i6J8g8m9Q8Sbp19NXdT02YsYgUqvtiQLo-KBlZ58MSmjPbr62eyoArTiJxukSSyq7aD8Tc3q4vUog';
		$client = new Google_Client(['client_id' => '833987669230-9l96j3rpv6468ai1ct59qiorgaba1j18.apps.googleusercontent.com']);  // Specify the CLIENT_ID of the app that accesses the backend
		$payload = $client->verifyIdToken($id_token);
		if ($payload) {
		  $userid = $payload['sub'];
		  // If request specified a G Suite domain:
		  //$domain = $payload['hd'];
		  echo $userid;
		  echo '<pre>';
		  var_dump($payload);
		} else {
		  // Invalid ID token
		  echo 'NE VALJA';
		}
	}

    public function session()
    {
		// if(session()->has('admin')){
		// 	 echo session("admin");
		// }
        echo '<pre>';
        echo session("per_page");
        echo '<br>';
		print_r(session()->get());
        echo '</pre>';
    }
}
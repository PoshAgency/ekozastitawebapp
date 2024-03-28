<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\SettingsModel;

class Settings extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {         
        $SettingsModel = new SettingsModel();

        $data['current'] = $SettingsModel->where('id', 1)->first();

        echo view('settings/index_view', $data);
    }

    public function save()
    {
        $SettingsModel = new SettingsModel();

        $validation =  \Config\Services::validation();
		$data = $this->request->getPost();
		$rules = $SettingsModel->validationRules;
        if(isset($data['id']) AND $data['id'] > 0){
            $image_exists = $data['image_exists'];
        }
        if(isset($data['id']) AND $data['id'] > 0){
            $rules['id'] = 'required';
        }else{
            unset($data['id']);
            unset($rules['id']);
        }
        $data = array_filter($data);
        $rules = array_filter($rules);
        
		$validation->reset();
		$validation->setRules($rules);
		if (!$validation->run($data)){
            $response['validatedData'] = $validation->getValidated();
			$response['json'] = $validation->getErrors();
		}else{
			$response['message'] = 'Sačuvano';
			$files = $this->request->getFiles();
			$response['files'] = $files;
			if (isset($files['logo'][0]) AND $files['logo'][0]->isValid()){
				$file = $files['logo'][0];
				$response['ClientExtension'] = $file->getClientExtension();
				$response['guessExtension'] = $file->guessExtension();
				$response['getClientMimeType'] = $file->getClientMimeType();
				$response['getMimeType'] = $file->getMimeType();
				$name = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/settings', $name);

				// \Config\Services::image()
				// 	->withFile(ROOTPATH . 'public/uploads/classes/' . $name)
				// 	->resize(750, 410, true, 'width')
				// 	->save(ROOTPATH . 'public/uploads/classes/' . $name, 90);

				// \Config\Services::image()
				// 	->withFile(ROOTPATH . 'public/uploads/classes/' . $name)
				// 	->resize(510, 300, true, 'width')
				// 	->save(ROOTPATH . 'public/uploads/classes/thumb_' . $name, 100);

                $data['logo'] = 'uploads/settings/' . $name;
                // $data['image_small'] = 'uploads/classes/thumb_' . $name;
			}else if(isset($image_exists) AND $image_exists == 0){
                $data['logo'] = '';
            }

            $response['success'] = $SettingsModel->save($data);
		}
		$response['data'] = $data;
		//echo json_encode($response);
		return $this->respond($response);
    }

}
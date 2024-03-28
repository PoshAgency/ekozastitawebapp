<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ClientsModel;
use App\Models\SettingsModel;
use App\Models\UsersModel;

class Users extends BaseController
{
    use ResponseTrait;
    protected $helpers = ['form'];

    public function index()
    {         
        echo view('administrators/index_view');
    }

    public function datatable()
    {
        $post = $this->request->getPost();
        
        $draw = $post['draw'];
        $row = $post['start'];
        
        $rowperpage = $post['length']; // Rows display per page
        $columnIndex = $post['order'][0]['column']; // Column index
        $columnName = $post['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $post['order'][0]['dir']; // asc or desc
        $searchValue = $post['search']['value']; // Search value

        $UsersModel = new UsersModel();
        $data = $UsersModel->all_users();        
        
        $totalRecords = is_array($data) ? count($data) : 0;

        $data = $UsersModel->all_users($searchValue);
        $totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $UsersModel->all_users($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row );
        $response = array(
        //"mrnj" => $sql,
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data_final
        );
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    ////////////////////////////////////////////////////////////////////////////
    
    public function show($id = 0)
    {
        $UsersModel = new UsersModel();
        $data['current'] = $UsersModel->where('id', $id)->first();
        $data['all_Users'] = $UsersModel->Users_Users($id);
        
        echo view('administrators/show_view',$data);
    }
    
    public function edit($id = 0)
    {
    // user
    $UsersModel = new UsersModel();
    $data['current'] = $UsersModel->where(['id' => $id])->first();
    $data['all_groups'] = $UsersModel->query("SELECT * FROM groups")->getResultArray();
    
    echo view('administrators/edit_view',$data);
    }
    
    public function single_user($id = 0)
    {
        $UsersModel = new UsersModel();
        $response['success'] = FALSE;
        if ($id > 0){
            $response = $UsersModel->where(['id' => $id])->first();
            $response['success'] = TRUE;
        }
        return $this->respond($response);
    }

    public function save()
    {
        $UsersModel = new UsersModel();

        $validation =  \Config\Services::validation();
        $data = $this->request->getPost();
        $rules = $UsersModel->validationRules;
        if(isset($data['id']) AND $data['id'] > 0){
            unset($rules['password']);
            unset($data['password']);
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
            // handle validation errors
            //$prepared['validation_list'] = $validation->listErrors();
            //$response['message'] = implode('</br>', $this->model->errors());
            // $response['message'] = implode('</br>', $validation->getErrors());
            // $response['message'] = 'Dodavanje Korisnika nije uspelo.';
            $response['json'] = $validation->getErrors();
        }else{
            $response['message'] = 'Korisnik uspešno snimljen';
            if (!file_exists(ROOTPATH . 'public/uploads/users')) {
                mkdir(ROOTPATH . 'public/uploads/users', 0777, true);
            }
            $files = $this->request->getFiles();
            $response['files'] = $files;
            if (isset($files['image'][0]) AND $files['image'][0]->isValid()){
                $file = $files['image'][0];
                $response['ClientExtension'] = $file->getClientExtension();
                $response['guessExtension'] = $file->guessExtension();
                $response['getClientMimeType'] = $file->getClientMimeType();
                $response['getMimeType'] = $file->getMimeType();
                $name = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/users', $name);

                // \Config\Services::image()
                // 	->withFile(ROOTPATH . 'public/uploads/classes/' . $name)
                // 	->resize(750, 410, true, 'width')
                // 	->save(ROOTPATH . 'public/uploads/classes/' . $name, 90);

                // \Config\Services::image()
                // 	->withFile(ROOTPATH . 'public/uploads/classes/' . $name)
                // 	->resize(510, 300, true, 'width')
                // 	->save(ROOTPATH . 'public/uploads/classes/thumb_' . $name, 100);

                $data['image'] = 'uploads/users/' . $name;
                // $data['image_small'] = 'uploads/classes/thumb_' . $name;
            }else if(isset($image_exists) AND $image_exists == 0){
                $data['image'] = '';
            }

            $response['success'] = $UsersModel->save($data);
        }
        $response['data'] = $data;
        //echo json_encode($response);
        return $this->respond($response);
    }
}

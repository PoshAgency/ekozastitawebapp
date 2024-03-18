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
        $UsersModel = new UsersModel();

        $data['Users'] = $UsersModel->where('not_active', 0)->findAll();

        echo view('Users/index_view', $data);
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
		$data = $UsersModel->all_Users();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $UsersModel->all_Users($searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $UsersModel->all_Users($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row );
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
        
        echo view('Users/show_view',$data);
    }
    
    public function edit($id = 0)
    {
      // user
      $UsersModel = new UsersModel();
      $data['current'] = $UsersModel->single_user($id);
      
      echo view('Users/edit_view',$data);
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
            $response['validatedData'] = $validation->getValidated();
			$response['message'] = 'Korisnik uspešno snimljen';

            $response['success'] = $UsersModel->save($data);
		}
		$response['data'] = $data;
		//echo json_encode($response);
		return $this->respond($response);
    }
    
    // Ajax delete
    public function delete()
    {
      $id = $this->request->getPost('id');
      if( $id ) {
        $userModel = new UsersModel();
        $response['success'] = $userModel->delete($id);
      }
      else {
        $response['success'] = false;
      }
      return $this->respond($response);
    }
}

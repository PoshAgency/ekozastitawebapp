<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\OperatorsModel;
use App\Models\SettingsModel;
use App\Models\UsersModel;

class Operators extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {         
        echo view('operators/index_view');
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

        $OperatorsModel = new OperatorsModel();
		$data = $OperatorsModel->all_operators();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $OperatorsModel->all_operators($searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $OperatorsModel->all_operators($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row );
		$response = array(
		  //"mrnj" => $sql,
		  "draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data_final
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
    }
    public function operator_clients($id = 0)
    {
        $response = [];
        if($id > 0){
            $post = $this->request->getPost();
            
            $draw = $post['draw'];
            $row = $post['start'];
            
            $rowperpage = $post['length']; // Rows display per page
            $columnIndex = $post['order'][0]['column']; // Column index
            $columnName = $post['columns'][$columnIndex]['data']; // Column name
            $columnSortOrder = $post['order'][0]['dir']; // asc or desc
            $searchValue = $post['search']['value']; // Search value

            $OperatorsModel = new OperatorsModel();
            $data = $OperatorsModel->operator_objects($id);        
            
            $totalRecords = is_array($data) ? count($data) : 0;

            $data = $OperatorsModel->operator_objects($id, $searchValue);
            $totalRecordwithFilter = is_array($data) ? count($data) : 0;

            $data_final = $OperatorsModel->operator_objects($id, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
            $response = array(
            //"mrnj" => $sql,
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data_final
            );
        }

        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    public function edit($id = 0)
    {
      $OperatorsModel = new OperatorsModel();
      $data['current'] = $OperatorsModel->single_operator($id);      
      
      echo view('operators/edit_view', $data);
    }    
    public function show($id = 0)
    {
      $OperatorsModel = new OperatorsModel();
      $data['current'] = $OperatorsModel->single_operator($id);      
      
      echo view('operators/show_view', $data);
    }    
    public function save()
    {
        $OperatorsModel = new OperatorsModel();

        $validation =  \Config\Services::validation();
		$data = $this->request->getPost();
		$rules = $OperatorsModel->validationRules;
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
        $response['success'] = FALSE;
		if (!$validation->run($data)){
            $response['validatedData'] = $validation->getValidated();
			$response['json'] = $validation->getErrors();
		}else{
			$response['message'] = 'Operativac uspešno snimljen';
            $response['success'] = $OperatorsModel->save($data);
		}
		$response['data'] = $data;
		//echo json_encode($response);
		return $this->respond($response);
    }
}

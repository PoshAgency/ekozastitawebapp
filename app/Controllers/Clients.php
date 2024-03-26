<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ClientsModel;
use App\Models\ObjectsModel;
use App\Models\SettingsModel;
use App\Models\UsersModel;

class Clients extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {         
        $clientsModel = new ClientsModel();

        $data['clients'] = $clientsModel->where('not_active', 0)->findAll();

        echo view('clients/index_view', $data);
    }
    public function dashboard()
    {         
        $clientsModel = new ClientsModel();

        $data['clients'] = $clientsModel->where('not_active', 0)->findAll();

        echo view('clients/client-dashboard_view', $data);
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

        $clientsModel = new ClientsModel();
		$data = $clientsModel->all_clients();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $clientsModel->all_clients($searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $clientsModel->all_clients($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row );
		$response = array(
		  //"mrnj" => $sql,
		  "draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data_final
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
    }
    public function get_objects($id = 0)
    {         
        $clientsModel = new ClientsModel();

        $response['success'] = FALSE;
        if($id > 0) {
            $response['objects'] = $clientsModel->client_objects($id);
            if(count($response['objects']) > 0){
                $response['success'] = TRUE;
            }
        }

		return $this->respond($response);
    }
    public function client_objects_datatable($id = 0)
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

            $clientsModel = new ClientsModel();
            $data = $clientsModel->client_objects($id);        
            
            $totalRecords = is_array($data) ? count($data) : 0;

            $data = $clientsModel->client_objects($id, $searchValue);
            $totalRecordwithFilter = is_array($data) ? count($data) : 0;

            $data_final = $clientsModel->client_objects($id, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
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
    public function client_reports_datatable($id = 0)
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

            $clientsModel = new ClientsModel();
            $data = $clientsModel->client_reports($id);        
            
            $totalRecords = is_array($data) ? count($data) : 0;

            $data = $clientsModel->client_reports($id, $searchValue);
            $totalRecordwithFilter = is_array($data) ? count($data) : 0;

            $data_final = $clientsModel->client_reports($id, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
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
    public function client_workorders_datatable($id = 0)
    {
        $response = [];
        $post = $this->request->getPost();
        
        $draw = $post['draw'];
        $row = $post['start'];
        
        $rowperpage = $post['length']; // Rows display per page
        $columnIndex = $post['order'][0]['column']; // Column index
        $columnName = $post['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $post['order'][0]['dir']; // asc or desc
        $searchValue = $post['search']['value']; // Search value

        $clientsModel = new ClientsModel();
        $data = $clientsModel->client_workorders($id);        
        
        $totalRecords = is_array($data) ? count($data) : 0;

        $data = $clientsModel->client_workorders($id, $searchValue);
        $totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $clientsModel->client_workorders($id, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
        $response = array(
        //"mrnj" => $sql,
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data_final
        );

        echo json_encode($response, JSON_PRETTY_PRINT);
    }
    public function client_users_datatable($id = 0)
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

            $clientsModel = new ClientsModel();
            $data = $clientsModel->client_users($id);        
            
            $totalRecords = is_array($data) ? count($data) : 0;

            $data = $clientsModel->client_users($id, $searchValue);
            $totalRecordwithFilter = is_array($data) ? count($data) : 0;

            $data_final = $clientsModel->client_users($id, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
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
    public function show($id = 0)
    {
        $ClientsModel = new ClientsModel();
        $ObjectsModel = new ObjectsModel();
        $data['current'] = $ClientsModel->single_client($id);
        // $data['all_objects'] = $ClientsModel->client_objects($id);
        $data['count_objects'] = $ClientsModel->client_objects_count($id);
        // $data['all_reports'] = $ClientsModel->client_reports($id);
        $data['count_reports'] = $ClientsModel->client_reports_count($id);
        // $data['all_contact_persons'] = $ClientsModel->clients_users($id);
        $data['count_users'] = $ClientsModel->client_users_count($id);
        
        echo view('clients/show_view', $data);
    }    
    public function edit($id = 0)
    {
      $ClientsModel = new ClientsModel();
      $data['current'] = $ClientsModel->single_client($id);      
      
      echo view('clients/edit_view', $data);
    }    
    public function save()
    {
        $ClientsModel = new ClientsModel();

        $validation =  \Config\Services::validation();
		$data = $this->request->getPost();
		$rules = $ClientsModel->validationRules;
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
			$response['message'] = 'Klijent uspešno snimljen';
			$files = $this->request->getFiles();
			$response['files'] = $files;
			if (isset($files['image'][0]) AND $files['image'][0]->isValid()){
				$file = $files['image'][0];
				$response['ClientExtension'] = $file->getClientExtension();
				$response['guessExtension'] = $file->guessExtension();
				$response['getClientMimeType'] = $file->getClientMimeType();
				$response['getMimeType'] = $file->getMimeType();
				$name = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/clients', $name);

				// \Config\Services::image()
				// 	->withFile(ROOTPATH . 'public/uploads/classes/' . $name)
				// 	->resize(750, 410, true, 'width')
				// 	->save(ROOTPATH . 'public/uploads/classes/' . $name, 90);

				// \Config\Services::image()
				// 	->withFile(ROOTPATH . 'public/uploads/classes/' . $name)
				// 	->resize(510, 300, true, 'width')
				// 	->save(ROOTPATH . 'public/uploads/classes/thumb_' . $name, 100);

                $data['image'] = 'uploads/clients/' . $name;
                // $data['image_small'] = 'uploads/classes/thumb_' . $name;
			}else if(isset($image_exists) AND $image_exists == 0){
                $data['image'] = '';
            }

            $response['success'] = $ClientsModel->save($data);
		}
		$response['data'] = $data;
		//echo json_encode($response);
		return $this->respond($response);
    }
}

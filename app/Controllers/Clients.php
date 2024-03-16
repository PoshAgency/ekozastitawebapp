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
        $Client = $this->request->getPost('client'); 
        $Client['client_date'] = date_us_2_mysql($Client['client_date']);
        $clientModel = new ClientsModel();      
        // echo "<pre>";
        // print_r($Client);
        // die();
        $res = $clientModel->save($Client);
        if( $res ) {
            $response['success'] = true;
            $response['message'] = 'Data successfully saved';
        }
        else
        {
            $response['success'] = false;
            $response['message'] = 'Data not saved';
        }
        return $this->respond($response);
    }
}

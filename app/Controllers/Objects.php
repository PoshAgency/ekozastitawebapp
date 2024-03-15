<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ObjectsModel;
use App\Models\ClientsModel;
use App\Models\SettingsModel;
use App\Models\UsersModel;

class Objects extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {         
        $objectsModel = new ObjectsModel();

        $data['objects'] = $objectsModel->where('not_active', 0)->findAll();

        echo view('objects/index_view', $data);
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

        $objectsModel = new ObjectsModel();
		$data = $objectsModel->all_objects();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $objectsModel->all_objects($searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $objectsModel->all_objects($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row );
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
        $ObjectsModel = new ObjectsModel();
        $ObjectsModel = new ObjectsModel();
        $data['current'] = $ObjectsModel->where('id', $id)->first();
        $data['all_objects'] = $ObjectsModel->objects_objects($id);
        
        echo view('objects/show_view',$data);
    }
    
    public function edit($id = 0)
    {
      // Object
      $objectsModel = new ObjectsModel();
      $Object = $objectsModel->getOneObjects($id);
      $Object['object_date'] = date_mysql_to_us($Object['object_date']);
      $data['Object'] = $Object;
      
      $usersModel = new UsersModel();
      $data['usersList'] = $usersModel->getUsersList();
      
      echo view('objects/edit_view',$data);
    }
    
    
    public function save()
    {
      $Object = $this->request->getPost('object'); 
      $Object['object_date'] = date_us_2_mysql($Object['object_date']);
      $ObjectModel = new ObjectsModel();      
//      echo "<pre>";
//      print_r($Object);
//      die();
      $res = $ObjectModel->save($Object);
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
    
    // Ajax delete
    public function delete()
    {
      $id = $this->request->getPost('id');
      if( $id ) {
        $ObjectModel = new ObjectsModel();
        $response['success'] = $ObjectModel->delete($id);
      }
      else {
        $response['success'] = false;
      }
      return $this->respond($response);
    }
}

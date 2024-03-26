<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ClientsModel;
use App\Models\ObjectsModel;
use App\Models\ReportsModel;

class Reports extends BaseController
{
    use ResponseTrait;
    
    public function index()    // ekozastita_app.site/reports
    {         
        $ClientsModel = new ClientsModel();
        $data['all_active_clients'] = $ClientsModel->all_clients();
        
        echo view('reports/index_view', $data);
    }
    public function datatable()
    {
		$post = $this->request->getPost();

        if(isset($post['filter']) AND is_Array($post['filter']) AND !empty($post['filter'])){
            $filter = $post['filter']; // filter value
        }else{
            $filter = []; // filter value
        }
        
		$draw = $post['draw'];
		$row = $post['start'];
		
		$rowperpage = $post['length']; // Rows display per page
		$columnIndex = $post['order'][0]['column']; // Column index
		$columnName = $post['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $post['order'][0]['dir']; // asc or desc
		$searchValue = $post['search']['value']; // Search value

        $ReportsModel = new ReportsModel();
		$data = $ReportsModel->all_reports();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $ReportsModel->all_reports($filter, $searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $ReportsModel->all_reports($filter, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
		$response = array(
		  //"mrnj" => $sql,
		  "draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data_final
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function all_workorders_datatable()
    {
		$post = $this->request->getPost();

		$draw = $post['draw'];
		$row = $post['start'];
		
		$rowperpage = $post['length']; // Rows display per page
		$columnIndex = $post['order'][0]['column']; // Column index
		$columnName = $post['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $post['order'][0]['dir']; // asc or desc
		$searchValue = $post['search']['value']; // Search value

        $ReportsModel = new ReportsModel();
		$data = $ReportsModel->all_workorders();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $ReportsModel->all_workorders($searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $ReportsModel->all_workorders($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
		$response = array(
		  //"mrnj" => $sql,
		  "draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data_final
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function show()    // ekozastita_app.site/reports/show
    {         
        echo view('reports/show_view');
    }

    public function edit()    // ekozastita_app.site/reports/edit
    {         
        echo view('reports/edit_view');
    }
}
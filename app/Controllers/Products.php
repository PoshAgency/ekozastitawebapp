<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ProductsModel;
use App\Models\SettingsModel;
use App\Models\UsersModel;
use App\Models\ProductFilesModel;

class Products extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {         
        echo view('products/index_view');
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

        $ProductsModel = new ProductsModel();
		$data = $ProductsModel->all_products();        
        
		$totalRecords = is_array($data) ? count($data) : 0;

        $data = $ProductsModel->all_products($searchValue);
		$totalRecordwithFilter = is_array($data) ? count($data) : 0;

        $data_final = $ProductsModel->all_products($searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row );
		$response = array(
		  //"mrnj" => $sql,
		  "draw" => intval($draw),
		  "iTotalRecords" => $totalRecords,
		  "iTotalDisplayRecords" => $totalRecordwithFilter,
		  "aaData" => $data_final
		);
		echo json_encode($response, JSON_PRETTY_PRINT);
    }
    public function product_clients($id = 0)
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

            $ProductsModel = new ProductsModel();
            $data = $ProductsModel->product_objects($id);        
            
            $totalRecords = is_array($data) ? count($data) : 0;

            $data = $ProductsModel->product_objects($id, $searchValue);
            $totalRecordwithFilter = is_array($data) ? count($data) : 0;

            $data_final = $ProductsModel->product_objects($id, $searchValue, $columnName." ".$columnSortOrder, $rowperpage, $row);
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
      $ProductsModel = new ProductsModel();
      $data['current'] = $ProductsModel->single_product($id);      
      $data['current']['files'] = $ProductsModel->product_files($id);      
      
      echo view('products/edit_view', $data);
    }    
    public function show($id = 0)
    {
      $ProductsModel = new ProductsModel();
      $data['current'] = $ProductsModel->single_product($id);      
      
      echo view('products/show_view', $data);
    }    
    public function save()
    {
        $ProductsModel = new ProductsModel();
        $ProductFilesModel = new ProductFilesModel();

        $validation =  \Config\Services::validation();
		$data = $this->request->getPost();
		$rules = $ProductsModel->validationRules;
        $data = array_filter($data);
        $rules = array_filter($rules);
        
		$validation->reset();
		$validation->setRules($rules);
        $response['success'] = FALSE;
		if (!$validation->run($data)){
            $response['validatedData'] = $validation->getValidated();
			$response['json'] = $validation->getErrors();
		}else{
			$response['message'] = 'Peparat je uspešno snimljen';
            if (!file_exists(ROOTPATH . 'public/uploads/products')) {
                mkdir(ROOTPATH . 'public/uploads/products', 0777, true);
            }
            if (!file_exists(ROOTPATH . 'public/uploads/documents')) {
                mkdir(ROOTPATH . 'public/uploads/documents', 0777, true);
            }

            $files = $this->request->getFiles();
			$response['files'] = $files;
			if (isset($files['image'][0]) AND $files['image'][0]->isValid()){
				$file = $files['image'][0];
				// $response['ClientExtension'] = $file->getClientExtension();
				// $response['guessExtension'] = $file->guessExtension();
				// $response['getClientMimeType'] = $file->getClientMimeType();
				// $response['getMimeType'] = $file->getMimeType();
				$name = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/products', $name);
                $data['image'] = 'uploads/products/' . $name;
			}else if(isset($image_exists) AND $image_exists == 0){
                $data['image'] = '';
            }
			if (isset($files['files']) AND is_array($files['files']) AND count($files['files']) > 0){
                foreach($files['files'] as $key => $single_file){
                    if ($single_file->isValid()){
                        $file = $single_file;
                        // $response['ClientExtension'] = $file->getClientExtension();
                        // $response['guessExtension'] = $file->guessExtension();
                        // $response['getClientMimeType'] = $file->getClientMimeType();
                        // $response['getMimeType'] = $file->getMimeType();
                        $name = $file->getRandomName();
                        $file->move(ROOTPATH . 'public/uploads/documents', $name);
                        $data['uploaded_files'][$key]['url'] = 'uploads/documents/' . $name;
                        $data['uploaded_files'][$key]['title'] = $data['uploaded_files'][$key]['title'];
                    }
                }
            }
            $response['success'] = $ProductsModel->save($data);
            $response['inserted_id'] = isset($data['id']) ? $data['id'] : $ProductsModel->getInsertID();

            if(isset($data['uploaded_files']) AND is_array($data['uploaded_files']) AND count($data['uploaded_files']) > 0){
                foreach($data['uploaded_files'] as $key => $filee){
                    $filee['product_id'] = $response['inserted_id'];
                    $data['uploaded'] = $ProductFilesModel->save($filee);
                }
            }

		}
		$response['data'] = $data;
		//echo json_encode($response);
		return $this->respond($response);
    }
}

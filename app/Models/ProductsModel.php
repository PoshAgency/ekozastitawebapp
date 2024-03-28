<?php
namespace App\Models;

use CodeIgniter\Model;
// use App\Models\LeversTypeModel;

class ProductsModel extends Model
{
    protected $table = 'products';
	protected $allowedFields = ["title","image",];
    
    private $tableUsers = 'users';    
    
	protected $returnType     = 'array';
	
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
	
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
	
    protected $validationRules    = [
        'title'    => [
            'label'  => 'Naziv preparata',
            'rules'  => 'required|min_length[2]',
            'errors' => [
                'required' => 'Polje Naziv preparata je obavezno',
                'min_length' => 'Naziv preparata mora imati najmanje 2 karaktera',
            ]
        ],
        // 'image'     => [
        //     'label'  => 'Slika',
        //     'rules'  => 'required',
        //     'errors' => [
        //         'required' => 'Slika je obavezna',
        //     ]
        // ]
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
	
    public function all_products($searchTerm = '', $order = '', $limit = NULL, $offset = NULL)
    {
        $products = $this->query("SELECT id, title, image
                FROM products
                WHERE deleted_at IS NULL
                AND 
                (
                    title LIKE '%{$searchTerm}%'
                )
                " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
        ")->getResultArray();
        
        return $products;
    }
    public function single_product($id = NULL)
    {
        if($id != NULL AND $id > 0){
            $single_product = $this->query("SELECT products.*
                    FROM products
                    WHERE id = " . $id . "
                    AND deleted_at IS NULL
            ")->getRowArray();
        }else{
            $single_product = [];
        }
        
        return $single_product;
    }
    public function product_files($id = NULL)
    {
        if($id != NULL AND $id > 0){
            $files = $this->query("SELECT *
                    FROM product_files
                    WHERE product_id = " . $id . "
                    AND deleted_at IS NULL
            ")->getResultArray();
        }else{
            $files = [];
        }
        
        return $files;
    }
}


<?php
namespace App\Models;

use CodeIgniter\Model;

class ObjectsModel extends Model
{
    protected $table = 'cobjects';
	protected $allowedFields = ["client_id","tobject_id","ordered","name","country","city","region","street","phone","fax","square","notes","active","pboxes_no","gtraps_no","ilamps_no","ptraps_no"];
    
    private $tableUsers = 'users';    
    
	protected $returnType     = 'array';
	
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
	
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
	
    protected $validationRules    = [
        //'message'         => 'required', 
        //'due_date'        => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
	
	//protected $beforeInsert = ['prepare_data'];
	//protected $beforeUpdate = ['prepare_data'];

    public function all_objects($searchTerm = '', $order = '', $limit = null, $offset = null )
    {
        $objects = $this->query("SELECT *
                FROM cobjects
                WHERE client_id = " . $id . "
                AND deleted_at IS NULL
                AND 
                (
                    name LIKE '%{$searchTerm}%'
                    OR country LIKE '%{$searchTerm}%' 
                    OR city LIKE '%{$searchTerm}%' 
                    OR region LIKE '%{$searchTerm}%'
                    OR street LIKE '%{$searchTerm}%'
                    OR phone LIKE '%{$searchTerm}%'
                    OR square LIKE '%{$searchTerm}%'
                    OR notes LIKE '%{$searchTerm}%'
                )
                " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
        ")->getResultArray();
        
        return $objects;
    }
    public function objects_objects($id = null ){
        
    }
    public function objects_reports($id = null ){
        
    }
    public function objects_users($id = null ){
        
    }
  
}


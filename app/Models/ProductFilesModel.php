<?php namespace App\Models;

use CodeIgniter\Model;

class ProductFilesModel extends Model
{
    protected $table = 'product_files';
	protected $allowedFields = ['title', 'url', 'product_id'];
	protected $returnType     = 'array';
	
    protected $primaryKey = 'id';
/*
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
	
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
	*/
    protected $validationRules    = [
        'url'           => 'required',
        'product_id'    => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
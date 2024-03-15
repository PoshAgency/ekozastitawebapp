<?php namespace App\Models;

use CodeIgniter\Model;

class UsertypesModel extends Model
{
    protected $table = 'usertypes';
	protected $allowedFields = ['title'];
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
        'title'     => 'required|alpha_numeric_space|min_length[3]'
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
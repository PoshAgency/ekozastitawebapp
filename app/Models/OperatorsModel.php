<?php
namespace App\Models;

use CodeIgniter\Model;
// use App\Models\LeversTypeModel;

class OperatorsModel extends Model
{
    protected $table = 'operators';
	protected $allowedFields = ["first_name","last_name","username","password","email","phone","city"];
    
    private $tableUsers = 'users';    
    
	protected $returnType     = 'array';
	
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
	
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
	
    protected $validationRules    = [
        'id'    => 'required',
        'first_name'    => [
            'label'  => 'Ime',
            'rules'  => 'required|min_length[2]',
            'errors' => [
                'required' => 'Polje Ime je obavezno',
                'min_length' => 'Ime mora imati najmanje 2 karaktera',
            ]
        ],
        'last_name'     => [
            'label'  => 'Prezime',
            'rules'  => 'required|min_length[2]',
            'errors' => [
                'required' => 'Polje Prezime je obavezno',
                'min_length' => 'Prezime mora imati najmanje 2 karaktera',
            ]
        ],
        'email'        => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email|is_unique[operators.email,id,{id}]',
            'errors' => [
                'required' => 'Email polje je obavezno',
                'is_unique' => 'Ova email adresa je zauzeta. Izaberite drugu email adresu',
                'valid_email' => 'Unesite validnu email adresu',
            ]
        ],
        'password'     => [
            'label'  => 'Lozinka',
            'rules'  => 'required|min_length[6]',
            'errors' => [
                'required' => 'Lozinka je obavezna',
                'min_length' => 'Lozinka mora imati najmanje 6 alfa-numerickih karaktera',
            ]
        ]
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
	
	protected $beforeInsert = ['prepare_data'];
	protected $beforeUpdate = ['prepare_data'];

    public function all_operators($searchTerm = '', $order = '', $limit = NULL, $offset = NULL)
    {
        $operators = $this->query("SELECT id, first_name, last_name, CONCAT(first_name, ' ', last_name) as full_name, email, phone, city
                FROM operators
                WHERE deleted_at IS NULL
                AND 
                (
                    first_name LIKE '%{$searchTerm}%'
                    OR last_name LIKE '%{$searchTerm}%'
                    OR phone LIKE '%{$searchTerm}%' 
                    OR email LIKE '%{$searchTerm}%' 
                    OR city LIKE '%{$searchTerm}%'
                )
                " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
        ")->getResultArray();
        
        return $operators;
    }
    public function single_operator($id = NULL)
    {
        if($id != NULL AND $id > 0){
            $single_operator = $this->query("SELECT operators.*
                    FROM operators
                    WHERE id = " . $id . "
                    AND deleted_at IS NULL
            ")->getRowArray();
        }else{
            $single_operator = [];
        }
        
        return $single_operator;
    }
	protected function prepare_data(array $data)
	{
		if (isset($data['data']['password']) AND $data['data']['password'] <> ''){
			$data['data']['password'] = '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['data']['password']))));
		}else{
			unset($data['data']['password']);
		}
		return $data;
	}
}


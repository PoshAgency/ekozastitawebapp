<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
	protected $allowedFields = ["lastname","email","firstname","username","password","status","usertype","group_id","ref_id"];
	protected $returnType     = 'array';

    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $createdField  = 'created';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'id'    => 'required',
        'firstname'    => [
            'label'  => 'Ime',
            'rules'  => 'required|min_length[2]',
            'errors' => [
                'required' => 'Polje Ime je obavezno',
                'min_length' => 'Ime mora imati najmanje 2 karaktera',
            ]
        ],
        'lastname'     => [
            'label'  => 'Prezime',
            'rules'  => 'required|min_length[2]',
            'errors' => [
                'required' => 'Polje Prezime je obavezno',
                'min_length' => 'Prezime mora imati najmanje 2 karaktera',
            ]
        ],
        'email'        => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email|is_unique[users.email,id,{id}]',
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
    protected $validationMessages = [
        'firstname'    => 'Ime polje je obavezno',
        'lastname'     => 'Prezime polje je obavezno',
        'email'        => 'Email polje je obavezno',
        'password'     => 'Lozinka je obavezna!'
    ];
    protected $skipValidation     = false;

	protected $beforeInsert = ['prepare_data'];
	protected $beforeUpdate = ['prepare_data'];

	public function login_user(array $data)
	{
		$response['success'] = FALSE;
		$users = $this->where(['email' => $data['email'], 'password' => '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['password']))))])->findAll();
		if (count($users) == 1){
			$response['user'] = $users[0];
			$response['user_id'] = $users[0]['id'];
			$response['group_id'] = $users[0]['group_id'];
            $role = $this->query('SELECT name FROM groups WHERE id = ' . $users[0]['group_id'])->getRowArray();
            $response['user']['role'] = $role['name'];
			$response['success'] = TRUE;
		}else{
			$response['error'] = 'Email ili lozinka ne postoji u bazi.';
		}
		return $response;
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
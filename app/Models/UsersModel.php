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

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        // 'firstname'     => 'required|min_length[2]',
        // 'lastname'     => 'required|min_length[2]',
        'email'        => 'required|valid_email|is_unique[users.email,id,{id}]'
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

	protected $beforeInsert = ['prepare_data'];
	protected $beforeUpdate = ['prepare_data'];

	public function login_user(array $data)
	{
		$response['success'] = FALSE;
		$users = $this->where(['email' => $data['email'], 'password' => '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['password']))))])->findAll();
		if (count($users) == 1){
			$response['user_id'] = $users[0]['id'];
			$response['success'] = TRUE;
		}else{
			$response['error'] = 'Bad username or password.';
		}
		return $response;
	}

	public function getUsers($id = false)
	{
		if ($id === false){
			return $this->findAll();
		}
		return $this->where(['id' => $id])->first();
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
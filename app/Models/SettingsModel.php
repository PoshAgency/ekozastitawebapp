<?php namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
	protected $allowedFields = [
                                'site_name',
                                'main_name', 
                                'main_email', 
                                'main_phone', 
                                'logo', 
                                'header_js', 
                                'footer_js', 
                                'facebook', 
                                'instagram', 
                                'linkedin', 
                                'twitter', 
                                'youtube', 
                                'google_analytics', 
                                'footer_text', 
                              ];
    protected $returnType     = 'array';
    // protected $protectFields = false; // to disable allowed fields

    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'main_name'     => 'required|min_length[2]',
        'main_email'     => 'required|valid_email',
        'main_phone'     => 'required|min_length[2]'
        // 'slug'        => 'required|alpha_dash|is_unique[classes.slug,id,{id}]',
        // 'content'     => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

	protected $beforeInsert = ['prepare_data'];
	protected $beforeUpdate = ['prepare_data'];

	// public function add_gallery($page_id = 0, $gallery = array())
	// {
	// 	$response['success'] = FALSE;
	// 	$db      = \Config\Database::connect();
	// 	$builder = $db->table('classes_galleries');
	// 	$builder->delete(['page_id' => $page_id]);
	// 	if (count($gallery) > 0)
	// 	{
	// 		$builder->insertBatch($gallery);
	// 	}

	// 	/*
	// 	if (count($users) == 1)
	// 	{
	// 		$response['user_id'] = $users[0]['id'];
	// 		$response['success'] = TRUE;
	// 	}
	// 	else
	// 	{
	// 		$response['error'] = 'Bad username or password.';
	// 	}*/
	// 	return $response;
	// }

	protected function prepare_data(array $data)
	{
		return $data;
	}

}
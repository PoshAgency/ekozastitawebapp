<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;

class SubscribersModel extends Model
{
    protected $table = 'users';
	protected $allowedFields = ["lastname","email","firstname","username","password","status","usertype","group_id","ref_id"];
    protected $returnType     = 'array';
    // protected $protectFields = false; // to disable allowed fields

    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        // 'firstname'     => [
        //     'label'  => 'Firstname',
        //     'rules'  => 'required|alpha_numeric_space|min_length[2]',
        // ],
        // 'lastname'     => [
        //     'label'  => 'Lastname',
        //     'rules'  => 'required|alpha_numeric_space|min_length[2]',
        // ],
        // 'password'     => [
        //     'label'  => 'Password',
        //     'rules'  => 'required|min_length[8]',
        // ],
        // 'email'     => [
        //     'label'  => 'Email',
        //     'rules'  => 'required|valid_email|is_unique[subscribers.email,id,{id}]',
        //     'errors' => [
        //         'is_unique' => 'That email has already been taken. Please choose another.',
        //     ],
        // ],
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;

	protected $beforeInsert = ['prepare_data'];
	//protected $beforeUpdate = ['prepare_data'];

    public function all_subscribers($start = 0, $limit = 10, $search_term = NULL, $order = "subscribers.firstname ASC"){
        $limit_size =  ($limit != 0) ? " LIMIT $start, $limit" : "";
        if($search_term != NULL){
            $words = explode(" ", $search_term);
            $string = array_map(function(&$word){
                return "+" . $word . "*";
            }, $words);

            $term = implode(" ",$string);
            // $search =  "AND (MATCH(classes.title) AGAINST('{$term}' IN BOOLEAN MODE) OR MATCH(teachers.firstname) AGAINST('{$term}' IN BOOLEAN MODE) OR MATCH(teachers.lastname) AGAINST('{$term}' IN BOOLEAN MODE))";
            $search =  "(
                MATCH(firstname) AGAINST('+{$term}*' IN BOOLEAN MODE)
                OR
                MATCH(lastname) AGAINST('+{$term}*' IN BOOLEAN MODE)
                OR
                MATCH(email) AGAINST('+{$term}*' IN BOOLEAN MODE)
            )";

        }else{
            $search = "";
        }

        // $search =  ($search_term != NULL) ? "AND classes.title LIKE '%$search_term%'" : "";
        $data = $this->query("SELECT *
                            FROM subscribers
                            WHERE subscribers.deleted_at IS NULL
                            " . $search . "
                            ORDER BY " . $order . "
                            " . $limit_size . "
                        ")->getResultArray();
        return $data;
    }

    public function login_user(array $data)
	{
		// $stripe_model = new StripeModel();
		// $TeachersModel = new TeachersModel();
		$response['success'] = FALSE;
		$users = $this->where(['email' => $data['email'], 'password' => '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['password']))))])->findAll();
		// $users = ($data['username'] == 'kax' AND $data['password'] == 'kax') ? array('logged' => 1) : array();
		// $teacher = $TeachersModel->where(['email' => $data['email']])->first();
        // if (isset($teacher)){
        //     $t = $teacher['id'];
        // }else{
        //     $t = 0;
        // }
        if (count($users) == 1){
			$response['success'] = TRUE;
			$response['user_id'] = $users[0]['id'];
		}else{
			$response['error'] = 'Bad username or password.';
		}
		return $response;
	}

	public function my_favs($user_id)
	{
        $data = $this->query("SELECT classes.*, difficulty.title as diff, teachers.slug  as teach_slug,
                            COALESCE(x.cnt,0) AS countView,
                            COALESCE(y.rate,0) AS classRate,
                            CONCAT(teachers.firstname, ' ', teachers.lastname)  as teach,
                            GROUP_CONCAT(DISTINCT machines.short_name SEPARATOR ', ') AS all_class_machines,
                            IF(subscribers_favs.subscriber_id = " . $user_id . ", 1, 0) AS inFavs,
                            IF(classes.teacher = " . (isset($_SESSION['teacher']) ? $_SESSION['teacher'] : 0) . ", 1, 0) AS own,
                            IF(classes.id IN (
                                SELECT * FROM (
                                        SELECT class_id FROM subscribers_classes WHERE subscriber_id = " . (isset($_SESSION['user']) ? $_SESSION['user'] : 0) . "
                                ) as classes_purchased
                            ), 1, 0) as purchased,
                            IF(classes.id IN (
                                    SELECT * FROM (
                                            SELECT class_id FROM subscribers_watched WHERE subscriber_id = " . (isset($_SESSION['user']) ? $_SESSION['user'] : 0) . "
                                    ) as classes_watched
                            ), 1, 0) as watched
                            FROM classes
                            LEFT OUTER JOIN (SELECT class_id, count(*) as cnt FROM classes_views GROUP BY class_id) x on x.class_id = classes.id
                            LEFT OUTER JOIN (SELECT class_id, AVG(rate) as rate FROM classes_rate GROUP BY class_id) y on y.class_id = classes.id
                            LEFT JOIN classes_machine ON classes_machine.class_id = classes.id
                            LEFT JOIN machines ON machines.id = classes_machine.class_machine
                            LEFT JOIN difficulty on difficulty.id = classes.difficulty
                            LEFT JOIN teachers on teachers.id = classes.teacher
                            LEFT JOIN subscribers_favs ON subscribers_favs.class_id = classes.id
                            LEFT JOIN subscribers_classes ON (subscribers_classes .class_id = classes.id)
                            LEFT JOIN subscribers_watched on subscribers_watched.class_id = classes.id
                            WHERE classes.deleted_at IS NULL
                            AND subscribers_favs.subscriber_id = " . $user_id . "
                            GROUP BY classes.id
                        ")->getResultArray();
        return $data;
	}

	public function bought_classes($user_id)
	{
        $data = $this->query("SELECT classes.*, difficulty.title as diff, teachers.slug  as teach_slug,
                            COALESCE(x.cnt,0) AS countView,
                            COALESCE(y.rate,0) AS classRate,
                            CONCAT(teachers.firstname, ' ', teachers.lastname)  as teach,
                            GROUP_CONCAT(DISTINCT machines.short_name SEPARATOR ', ') AS all_class_machines,
                            IF(subscribers_favs.subscriber_id = " . $user_id . ", 1, 0) AS inFavs,
                            IF(classes.teacher = " . (isset($_SESSION['teacher']) ? $_SESSION['teacher'] : 0) . ", 1, 0) AS own,
                            IF(classes.id IN (
                                SELECT * FROM (
                                        SELECT class_id FROM subscribers_classes WHERE subscriber_id = " . $user_id . "
                                ) as classes_purchased
                            ), 1, 0) as purchased,
                            IF(classes.id IN (
                                    SELECT * FROM (
                                            SELECT class_id FROM subscribers_watched WHERE subscriber_id = " . $user_id . "
                                    ) as classes_watched
                            ), 1, 0) as watched
                            FROM classes
                            LEFT OUTER JOIN (SELECT class_id, count(*) as cnt FROM classes_views GROUP BY class_id) x on x.class_id = classes.id
                            LEFT OUTER JOIN (SELECT class_id, AVG(rate) as rate FROM classes_rate GROUP BY class_id) y on y.class_id = classes.id
                            LEFT JOIN classes_machine ON classes_machine.class_id = classes.id
                            LEFT JOIN machines ON machines.id = classes_machine.class_machine
                            LEFT JOIN difficulty on difficulty.id = classes.difficulty
                            LEFT JOIN teachers on teachers.id = classes.teacher
                            LEFT JOIN subscribers_favs ON subscribers_favs.class_id = classes.id
                            LEFT JOIN subscribers_classes ON (subscribers_classes .class_id = classes.id)
                            LEFT JOIN subscribers_watched on subscribers_watched.class_id = classes.id
                            WHERE classes.deleted_at IS NULL
                            AND subscribers_classes.subscriber_id = " . $user_id . "
                            GROUP BY classes.id
                        ")->getResultArray();
        return $data;
	}

	protected function prepare_data(array $data)
	{

		if (isset($data['data']['password']) AND $data['data']['password'] <> ''){
			$data['data']['password'] = '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['data']['password']))));
		}else{
			unset($data['data']['password']);
		}

		if (isset($data['password']) AND $data['password'] <> ''){
			$data['password'] = '*'.strtoupper(hash('sha512',pack('H*',hash('sha512', $data['password']))));
		}else{
			unset($data['password']);
		}

		return $data;
	}
}
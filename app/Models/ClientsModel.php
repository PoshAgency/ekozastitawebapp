<?php
namespace App\Models;

use CodeIgniter\Model;
// use App\Models\LeversTypeModel;

class ClientsModel extends Model
{
    protected $table = 'clients';
	protected $allowedFields = ["name","state","city","region","address","zip","pib","id_number","mail","image","web","fax","telefon","contract","napomena","deratizacija","dezinsekcija","dezinfekcija","fumigacija","total_destruction","not_active","username","password","alarm_naslov","alarm_datum","alarm_napomena","alarm_sakriveno","onetime","facebook","instagram","twitter"];
    
    private $tableUsers = 'users';    
    
	protected $returnType     = 'array';
	
    protected $primaryKey = 'id';

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
	
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
	
    protected $validationRules    = [
        'name'         => 'required', 
        'city'        => 'required',
        'email'        => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
	
	//protected $beforeInsert = ['prepare_data'];
	//protected $beforeUpdate = ['prepare_data'];

    public function all_clients($searchTerm = '', $order = '', $limit = NULL, $offset = NULL)
    {
        $clients = $this->query("SELECT *
                FROM clients
                WHERE not_active = 0
                AND deleted_at IS NULL
                AND 
                (
                    name LIKE '%{$searchTerm}%'
                    OR telefon LIKE '%{$searchTerm}%' 
                    OR mail LIKE '%{$searchTerm}%' 
                    OR city LIKE '%{$searchTerm}%'
                    OR address LIKE '%{$searchTerm}%'
                    OR contract LIKE '%{$searchTerm}%'
                )
                " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
        ")->getResultArray();
        
        return $clients;
    }
    public function client_objects($id = NULL, $searchTerm = '', $order = '', $limit = NULL, $offset = NULL){
        if($id != NULL AND $id > 0){
            $objects = $this->query("SELECT cobjects.*, DATE_FORMAT(ar.date_done, '%d.%m.%Y \u %H:%i') as date_done, IF(ar.report_number IS NULL, CONCAT('00',ar.id, '/', '" . date('Y') . "'), ar.report_number) as report_num
                    FROM cobjects
                    -- LEFT JOIN tobjects ON cobjects.tobject_id = tobjects.id
                    LEFT JOIN (SELECT *, MAX(id) as max_id FROM app_reports WHERE approved = 1 GROUP BY id) ar ON (ar.client_id = cobjects.client_id AND ar.cobject_id = cobjects.id)
                    WHERE cobjects.client_id = " . $id . "
                    AND cobjects.active = 1
                    AND cobjects.deleted_at IS NULL
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
                    GROUP BY cobjects.id
                    " . ($order != NULL ? " ORDER BY ". print_r($order, true) : '') . "
                    " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                    " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
            ")->getResultArray();
        }else{
            $objects = [];
        }
        
        return $objects;
    }
    public function client_objects_count($id = NULL){
        if($id != NULL AND $id > 0){
            $objects = $this->query("SELECT cobjects.*, tobjects.object_type as type
                    FROM cobjects
                    LEFT JOIN tobjects ON cobjects.tobject_id = tobjects.id
                    WHERE client_id = " . $id . "
                    AND deleted_at IS NULL
            ")->getResultArray();
        }else{
            $objects = [];
        }
        
        return count($objects);
    }
    public function client_users($id = NULL, $searchTerm = '', $order = '', $limit = NULL, $offset = NULL){
        if($id != NULL AND $id > 0){
            $objects = $this->query("SELECT users.*
                    FROM users
                    WHERE ref_id = " . $id . "
                    AND deleted_at IS NULL
                    AND 
                    (
                        firstname LIKE '%{$searchTerm}%'
                        OR lastname LIKE '%{$searchTerm}%' 
                        OR email LIKE '%{$searchTerm}%' 
                        OR username LIKE '%{$searchTerm}%'
                    )
                    " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                    " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                    " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
            ")->getResultArray();
        }else{
            $objects = [];
        }
        
        return $objects;
    }
    public function client_users_count($id = NULL){
        if($id != NULL AND $id > 0){
            $objects = $this->query("SELECT users.*
                    FROM users
                    WHERE ref_id = " . $id . "
                    AND deleted_at IS NULL
            ")->getResultArray();
        }else{
            $objects = [];
        }
        
        return count($objects);
    }
    public function client_reports($id = NULL, $searchTerm = '', $order = '', $limit = NULL, $offset = NULL){
        if($id != NULL AND $id > 0){
            $reports = $this->query("SELECT app_reports.*, '' as date_done_srb, cobjects.name as object_name, clients.name as client_name, cobjects.id as object_id, clients.id as client_id, IF(ar.report_number IS NULL, CONCAT('00',ar.id, '/', '" . date('Y') . "'), ar.report_number) as report_num
                    FROM app_reports
                    LEFT JOIN cobjects ON cobjects.id = app_reports.cobject_id
                    LEFT JOIN clients ON clients.id = app_reports.client_id
                    LEFT JOIN (SELECT *, MAX(id) as max_id FROM app_reports WHERE approved = 1 GROUP BY id) ar ON (ar.client_id = cobjects.client_id AND ar.cobject_id = cobjects.id)
                    WHERE app_reports.client_id = " . $id . "
                    AND app_reports.deleted_at IS NULL
                    GROUP BY app_reports.id
                    HAVING 
                    (
                        client_name LIKE '%{$searchTerm}%'
                        OR report_number LIKE '%{$searchTerm}%' 
                        OR object_name LIKE '%{$searchTerm}%' 
                        OR date_done LIKE '%{$searchTerm}%'
                    )
                    " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                    " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                    " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
            ")->getResultArray();
            foreach ($reports as $key => $row) {
                $reports[$key]['date_done_srb'] = datetime_srb($row['date_done']);
            }
        
        }else{
            $reports = [];
        }
        
        return $reports;
    }
    public function client_reports_count($id = NULL){
        if($id != NULL AND $id > 0){
            $reports = $this->query("SELECT id, report_number
                    FROM app_reports
                    WHERE app_reports.client_id = " . $id . "
                    AND app_reports.deleted_at IS NULL
            ")->getResultArray();
        }else{
            $reports = [];
        }
        
        return count($reports);
    }
    public function client_contact_persons($id = NULL, $searchTerm = '', $order = '', $limit = NULL, $offset = NULL){
        if($id != NULL AND $id > 0){
            $contact_persons = $this->query("SELECT  id, 
                    CONCAT(first_name, ' ', last_name) AS name, 
                    CONCAT(phone1, IF(phone2 != '', CONCAT(', ', phone2), ''), IF(phone3 != '', CONCAT(', ', phone3), '')) AS phone, 
                    CONCAT(mobile1, IF(mobile2 != '', CONCAT(', ', mobile2), ''), IF(mobile3 != '', CONCAT(', ', mobile3), '')) AS mobile, 
                    CONCAT(mail1, IF(mail2 != '', CONCAT(', ', mail2), ''), IF(mail3 != '', CONCAT(', ', mail3), '')) AS email, 
                    position, 
                    comment
                    FROM  client_contact_persones
                    WHERE client_id = " . $id . "
                    AND deleted_at IS NULL
                    HAVING 
                    (
                        name LIKE '%{$searchTerm}%'
                        OR phone LIKE '%{$searchTerm}%' 
                        OR mobile LIKE '%{$searchTerm}%' 
                        OR email LIKE '%{$searchTerm}%' 
                        OR position LIKE '%{$searchTerm}%'
                        OR comment LIKE '%{$searchTerm}%'
                    )
                    " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                    " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                    " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
            ")->getResultArray();
        }else{
            $contact_persons = [];
        }
        
        return $contact_persons;
    }
    public function client_contact_persons_count($id = NULL){
        if($id != NULL AND $id > 0){
            $contact_persons = $this->query("SELECT id, client_id
                    FROM client_contact_persones
                    WHERE client_id = " . $id . "
                    AND deleted_at IS NULL
            ")->getResultArray();
        }else{
            $contact_persons = [];
        }
        
        return count($contact_persons);
    }
    public function single_client($id = NULL){
        if($id != NULL AND $id > 0){
            $single_client = $this->query("SELECT clients.*
                    FROM clients
                    WHERE id = " . $id . "
                    AND deleted_at IS NULL
            ")->getRowArray();
        }else{
            $single_client = [];
        }
        
        return $single_client;
    }
}


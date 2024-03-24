<?php
namespace App\Models;

use CodeIgniter\Model;
// use App\Models\LeversTypeModel;

class ReportsModel extends Model
{
    protected $table = 'reports';
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

    public function all_reports($filter = NULL, $searchTerm = '', $order = '', $limit = NULL, $offset = NULL)
    {
        $client_id = ''; 
        $object_id = ''; 
        if($filter != NULL){
            if(isset($filter['client_id'])){ $client_id = ' AND app_reports.client_id  = ' . $filter['client_id'] . ' '; }
            if(isset($filter['object_id'])){ $object_id = ' AND app_reports.cobject_id = ' . $filter['object_id'] . ' '; }
            // if(isset($filter['client_id'])){ $client_id = ' AND client_id = ' . $filter['client_id'] . ' '; }
            // if(isset($filter['client_id'])){ $client_id = ' AND client_id = ' . $filter['client_id'] . ' '; }
        }
        $reports = $this->query("SELECT app_reports.*, cobjects.name as object_name, clients.name as client_name, cobjects.id as object_id, clients.id as client_id, IF(app_reports.report_number IS NULL, CONCAT('00',app_reports.id, '/', '" . date('Y') . "'), app_reports.report_number) as report_num
                FROM app_reports
                LEFT JOIN (SELECT * FROM cobjects WHERE deleted_at IS NULL) cobjects ON cobjects.id = app_reports.cobject_id
                LEFT JOIN (SELECT * FROM clients WHERE deleted_at IS NULL) clients ON clients.id = app_reports.client_id
                WHERE app_reports.approved = 1
                " . $client_id . "
                " . $object_id . "
                AND app_reports.deleted_at IS NULL
                HAVING 
                    object_name LIKE '%{$searchTerm}%'
                    OR client_name LIKE '%{$searchTerm}%' 
                    OR report_num LIKE '%{$searchTerm}%' 
                    OR date_done LIKE '%{$searchTerm}%'
                " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
        ")->getResultArray();
        
        return $reports;
    }

    public function single_report($id = NULL){
        if($id != NULL AND $id > 0){
            $single_report = $this->query("SELECT reports.*
                    FROM reports
                    WHERE id = " . $id . "
                    AND deleted_at IS NULL
            ")->getRowArray();
        }else{
            $single_report = [];
        }
        
        return $single_report;
    }
}


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
        $critical = ''; 
        $dates = ''; 
        if($filter != NULL){
            if(isset($filter['dates']) AND $filter['dates'] != ''){ 
                $d = explode(' to ', $filter['dates']);
                $dateFrom = explode('.', $d[0]);
                $dateTo = explode('.', $d[1]);
                $dateMySqlFrom = $dateFrom[2] . '/' . $dateFrom[1] . '/' . $dateFrom[0];
                $dateMySqlTo = $dateTo[2] . '/' . $dateTo[1] . '/' . $dateTo[0];
                $dates = "AND date_done BETWEEN '$dateMySqlFrom' AND '$dateMySqlTo'";
                // echo $dates . '<br>';
            }
            if(isset($filter['client_id']) AND $filter['client_id'] != ''){ 
                $client_id = ' AND app_reports.client_id  = ' . $filter['client_id'] . ' '; 
            }
            if((isset($filter['critical']) AND $filter['critical'] != '') AND (isset($filter['all_objects']) AND $filter['all_objects'] != 1)){ 
                $critical = ' AND critical > 0 '; 
            }
            if((isset($filter['object_id']) AND $filter['object_id'] != '') AND (isset($filter['all_objects']) AND $filter['all_objects'] != 1)){ 
                $object_id = ' AND app_reports.cobject_id = ' . $filter['object_id'] . ' '; 
            }
        }
        // $sss = "SELECT app_reports.*, cobjects.name as object_name, clients.name as client_name, cobjects.id as object_id, clients.id as client_id, IF(app_reports.report_number IS NULL, CONCAT('00',app_reports.id, '/', '" . date('Y') . "'), app_reports.report_number) as report_num, (SELECT COUNT(*) FROM baits WHERE rating > 0 AND baits.report_id = app_reports.id) AS critical
        //         FROM app_reports
        //         LEFT JOIN (SELECT * FROM cobjects WHERE deleted_at IS NULL) cobjects ON cobjects.id = app_reports.cobject_id
        //         LEFT JOIN (SELECT * FROM clients WHERE deleted_at IS NULL) clients ON clients.id = app_reports.client_id
        //         WHERE app_reports.approved = 1
        //         " . $client_id . "
        //         " . $object_id . "
        //         " . $dates . "
        //         AND app_reports.deleted_at IS NULL
        //         HAVING (
        //             object_name LIKE '%$searchTerm%'
        //             OR client_name LIKE '%$searchTerm%' 
        //             OR report_num LIKE '%$searchTerm%' 
        //             OR date_done LIKE '%$searchTerm%'
        //         )
        //         " . $critical . "
        //         " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
        //         " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
        //         " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '');

        // echo '<pre>';
        // print_r($sss);
        // die();
                
        $reports = $this->query("SELECT app_reports.*, cobjects.name as object_name, clients.name as client_name, cobjects.id as object_id, clients.id as client_id, IF(app_reports.report_number IS NULL, CONCAT('00',app_reports.id, '/', '" . date('Y') . "'), app_reports.report_number) as report_num, (SELECT COUNT(*) FROM baits WHERE rating > 0 AND baits.report_id = app_reports.id) AS critical
                FROM app_reports
                LEFT JOIN (SELECT * FROM cobjects WHERE deleted_at IS NULL) cobjects ON cobjects.id = app_reports.cobject_id
                LEFT JOIN (SELECT * FROM clients WHERE deleted_at IS NULL) clients ON clients.id = app_reports.client_id
                WHERE app_reports.approved = 1
                " . $client_id . "
                " . $object_id . "
                " . $dates . "
                AND app_reports.deleted_at IS NULL
                HAVING (
                    object_name LIKE '%$searchTerm%'
                    OR client_name LIKE '%$searchTerm%' 
                    OR report_num LIKE '%$searchTerm%' 
                    OR date_done LIKE '%$searchTerm%'
                )
                " . $critical . "
                " . ($order != NULL ? " ORDER BY ". print_r($order,true) : '') . "
                " . (($limit != NULL AND $limit != -1) ? " LIMIT {$limit} " : '') . "
                " . (($limit != NULL AND $limit != -1 AND $offset != NULL) ? " OFFSET {$offset} " : '') . "
        ")->getResultArray();
        return $reports;
    }

    public function all_workorders($searchTerm = '', $order = '', $limit = NULL, $offset = NULL)
    {
        $workorders = $this->query("SELECT app_reports.*, cobjects.name as object_name, clients.name as client_name, cobjects.id as object_id, clients.id as client_id, IF(app_reports.report_number IS NULL, CONCAT('00',app_reports.id, '/', '" . date('Y') . "'), app_reports.report_number) as report_num
                FROM app_reports
                LEFT JOIN (SELECT * FROM cobjects WHERE deleted_at IS NULL) cobjects ON cobjects.id = app_reports.cobject_id
                LEFT JOIN (SELECT * FROM clients WHERE deleted_at IS NULL) clients ON clients.id = app_reports.client_id
                WHERE app_reports.approved = 0
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
        foreach ($workorders as $key => $row) {
            $workorders[$key]['date_done_srb'] = datetime_srb($row['date_done']);
        }

        return $workorders;
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


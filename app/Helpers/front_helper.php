<?php
// Function: used to create slugs
if (!function_exists("slugify")) {
    function slugify($text = '')
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
if (!function_exists("duration")) {
    function duration($time = 0)
    {
        if($time < 60){
            $time_formated = gmdate("s\"", $time);
        }else if($time > 59 && $time < 3600){
            $time_formated = gmdate("i\' s\"", $time);
        }else if($time > 3599){
            $time_formated = substr(gmdate("H\h i\'", $time),1);
        }
        return $time_formated;
    }
}
if (!function_exists("svg")) {
    function svg()
    {
        $svg = '<div class="no-img-icon me-2" style="width: 32px;height: 32px;min-width: 32px;min-height: 32px;background: #f0f0f0;display: flex;align-items: center;justify-content:center;border-radius: 3px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="users" class="lucide lucide-users w-5 h-5 text-center text-slate-800" style="color: #777 !important;"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" ></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>';

        return $svg;
    }
}
if (!function_exists("settings")) {
    function settings()
    {
        $SettingsModel = model('SettingsModel');
        return $SettingsModel->where(['id' => 1])->first();
    }
}

if (!function_exists("duration_standard")) {
    function duration_standard($time = 0)
    {
        if($time < 60){
            $time_formated = '00:' . gmdate("s", $time);
        }else if($time > 59 && $time < 3600){
            $time_formated = gmdate("i:s", $time);
        }else if($time > 3599){
            $time_formated = substr(gmdate("H:i:s", $time),1);
        }
        return $time_formated;
    }
}
if (!function_exists("only_minutes")) {
    function only_minutes($time = 0)
    {
        if($time < 60){
            $time_formated = 1;
        }else if($time > 59 && $time < 3600){
            $time_formated = round($time / 60);
        }else if($time > 3599){
            $hours = $time / 3600;
            $minutes = (($time - (3600 * floor($hours))) / 60);
            $seconds = (($time - (3600 * floor($hours)) - (60 * floor($minutes))) / 60);
            $time_formated = floor($hours) . 'h ' . floor($minutes);
        }
        return $time_formated;
    }
}
if (!function_exists("rentTimeDifference")) {
    function rentTimeDifference($start){
        $diff = strtotime($start . " + 1 day") - strtotime('now');
        $fullHours   = floor($diff/(60*60));
        $fullMinutes = floor(($diff-($fullHours*60*60))/60);
        $fullSeconds = floor($diff-($fullHours*60*60)-($fullMinutes*60));

        return sprintf("%02d",$fullHours) . ":" . sprintf("%02d",$fullMinutes) . ":" . sprintf("%02d",$fullSeconds);
    }
}
if (!function_exists('create_session_nums')){
	function create_session_nums(){
        $result['broj1'] = rand(5,25);
        $result['broj2'] = rand(5,25);
        session()->set("broj1", $result['broj1']);
        session()->set("broj2", $result['broj2']);

        return $result;
	}
}
if (!function_exists('date_srb')){
	function date_srb($date){
        if( $date != NULL AND $date != '00/00/0000' AND $date != '0000-00-00' AND $date != '1969-12-31' AND $date != '' ){
            return  date_format(date_create($date), "d.m.Y");
        }else{
            return NULL;
        }
    }
}
if (!function_exists('datetime_srb')){
	function datetime_srb($date){
        if( $date != NULL AND $date != '00/00/0000' AND $date != '0000-00-00' AND $date != '1969-12-31' AND $date != '' ){
            return  date_format(date_create($date), "d.m.Y \u H:i");
        }else{
            return NULL;
        }
    }
}

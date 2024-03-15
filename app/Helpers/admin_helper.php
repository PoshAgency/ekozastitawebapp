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
if (!function_exists("svg")) {
    function svg()
    {
        $svg = '<div class="no-img-icon me-2" style="width: 32px;height: 32px;min-width: 32px;min-height: 32px;background: #f0f0f0;display: flex;align-items: center;justify-content:center;border-radius: 3px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="users" class="lucide lucide-users w-5 h-5 text-center text-slate-800" style="color: #777 !important;"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" ></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>';

        return $svg;
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
if (!function_exists("duration_standard")) {
    function duration_standard($time = 0)
    {
        if($time < 60){
            $time_formated = '00:' . gmdate("s", $time);
        }else if($time > 59 && $time < 3600){
            $time_formated = gmdate("i:s", $time);
        }else if($time > 3599){
            $time_formated = substr(gmdate("H:i", $time),1);
        }
        return $time_formated;
    }
}
if (!function_exists("duration_standard2")) {
    function duration_standard2($time = 0)
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
if (!function_exists("base64_to_jpeg")) {
    function base64_to_jpeg($base64_string, $output_file) {
        // open the output file for writing
        $ifp = fopen($output_file, 'wb');

        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        $data = explode(',', $base64_string);

        // we could add validation here with ensuring count( $data ) > 1
        fwrite($ifp, base64_decode($data[1]));

        // clean up the file resource
        fclose($ifp);

        return $output_file;
    }
}
if (!function_exists("is_base64_encoded")) {
    function is_base64_encoded($data)
    {
        if (strpos($data, 'data:image/png') !== false OR strpos($a, 'data:image/jpg') !== false) {
            return TRUE;
        } else {
            return FALSE;
        }
    };
}
if (!function_exists("only_minutes")) {
    function only_minutes($time = 0)
    {
        if($time < 60){
            $time_formated = 1;
        }else if($time > 59 && $time < 3600){
            $time_formated = gmdate("i:s", $time);
        }else if($time > 3599){
            $hours = $time / 3600;
            $minutes = (($time - (3600 * round($hours))) / 60);
            $seconds = (($time - (3600 * round($hours)) - (60 * round($minutes))) / 60);
            $time_formated = round($hours) . 'h ' . round($minutes);
        }
        return $time_formated;
    }
}
if(!function_exists('check_field')) {
    function check_field($table = NULL, $field = NULL) {
        // Check if column exists in table, if not - create column
        $db = \Config\Database::connect();
        if ($db->tableExists($table)) {
            if(!$db->fieldExists($field, $table)) {
                if($db->simpleQuery("ALTER TABLE $table ADD `$field` VARCHAR(255) NOT NULL;")) {
                    $result['created'] = TRUE;
                }else{
                    $result['created'] = FALSE;
                    $result['error'] = $db->error();
                }
            }else{
                $result['error'] = 'Field elready exists';
            }
        }
        return $result;
    }
}
if(!function_exists('add_fields')) {
    function add_fields($table = '', $post = array())
    {
        $db = db_connect();

        $table_fields = $db->getFieldNames($table);
        $post_fields = array_keys($post);
        $new_fields = array_diff($post_fields, $table_fields);

        foreach ($new_fields as $key => $one_field) {
            $check = check_field($table, $one_field);
        }
        //die();
        return TRUE;
    }
}

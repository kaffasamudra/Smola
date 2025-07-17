<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('dd')) {
    /**
     * Dump and Die (seperti Laravel)
     * 
     * @param mixed ...$vars Semua variabel yang ingin di-dump
     */
    function dd(...$vars)
    {
        echo '<pre style="background: #222; color: #0f0; padding: 15px; border-radius: 5px; font-size: 14px;">';
        foreach ($vars as $var) {
            print_r($var);
            echo "\n-----------------------------\n";
        }
        echo '</pre>';
        die('🔍 Debug Stopped Here!');
    }


    //untuk ambil semua data dari payload 
    if (!function_exists('_post')) {
        function _post($table, $exclude = ['id', 'created_at', 'updated_at'])
        {
            $CI =& get_instance(); 
            $CI->load->database();

            // Ambil struktur kolom tabel
            $fields = $CI->db->list_fields($table);
            $data = [];

            foreach ($fields as $field) {
                if (in_array($field, $exclude)) continue;

                $value = $CI->input->post($field);
                if ($value !== null) {
                    $data[$field] = $value;
                }
            }

            return $data;
        }
    }
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('_all')) {
    /**
     * Ambil semua data dari tabel
     *
     * @param string $table Nama tabel
     * @param array $order_by ['kolom' => 'ASC' / 'DESC']
     * @return array Hasil data (array of objects)
     */
    function _all($table, $order_by = [])
    {
        $CI =& get_instance();
        $CI->load->database();

        if (!empty($order_by)) {
            foreach ($order_by as $key => $val) {
                $CI->db->order_by($key, $val);
            }
        }

        $query = $CI->db->get($table);
        return $query->result();
    }
}

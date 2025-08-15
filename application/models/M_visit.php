<?php
class M_visit extends CI_Model {

    public function save_visit()
    {
        $data = [
            'ip_address' => $this->input->ip_address(),
            'visit_time' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('visitors', $data);
    }

    public function get_weekly_views()
    {
        $query = $this->db->query("
            SELECT DAYNAME(visit_time) as day, COUNT(*) as total
            FROM visitors
            WHERE visit_time >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)
            GROUP BY DAYNAME(visit_time)
            ORDER BY FIELD(day, 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday')
        ");
        return $query->result();
    }
}
<?php

class Admin_Login_Model extends CI_Model {
    
    public function admin_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email', $data['admin_email']);
        $this->db->where('admin_password', $data['admin_password']);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
<?php

class Admin_Model extends CI_Model {
    
    public function select_admin_by_id($admin_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_admin_info()
    {
        $data=array();
        $data['admin_name'] = $this->input->post('admin_name', true);
        $data['admin_email'] = $this->input->post('admin_email', true);
        $data['admin_password'] = $this->input->post('admin_password', true);
        $admin_id=$this->input->post('admin_id',true);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin',$data);
    }
    
    public function save_slider_info($data)
    {
        $this->db->insert('tbl_slider',$data);
    }
    
    public function select_all_slider()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_slider_by_id($slider_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('slider_id',$slider_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_slider_info($data)
    {
        $slider_id=$this->input->post('slider_id',true);
        $this->db->where('slider_id',$slider_id);
        $this->db->update('tbl_slider',$data);
    }
    
    public function delete_slider_by_id($slider_id)
    {
        $this->db->where('slider_id',$slider_id);
        $this->db->delete('tbl_slider');
    }
    
    public function save_category_info()
    {
        $data=array();
        $data['category_name'] = $this->input->post('category_name', true);
        $this->db->insert('tbl_category',$data);
    }
    
    public function select_all_category()
    {
        $sql = "SELECT * FROM tbl_category";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_category_by_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_category_info()
    {
        $data=array();
        $data['category_name'] = $this->input->post('category_name', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }
    
    public function delete_category_by_id($category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    
    public function save_project_info($data)
    {
        $this->db->insert('tbl_project',$data);
    }
    
    public function select_all_project()
    {
        $sql = "SELECT * FROM tbl_category AS c, tbl_project AS p WHERE p.category_id=c.category_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_project_by_id($project_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_id',$project_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_project_info($data)
    {
        $project_id=$this->input->post('project_id',true);
        $this->db->where('project_id',$project_id);
        $this->db->update('tbl_project',$data);
    }
    
    public function delete_project_by_id($project_id)
    {
        $this->db->where('project_id',$project_id);
        $this->db->delete('tbl_project');
    }
    
    public function save_client_info($data)
    {
        $this->db->insert('tbl_client',$data);
    }
    
    public function select_all_client()
    {
        $sql = "SELECT * FROM tbl_client";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_client_by_id($client_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_client');
        $this->db->where('client_id',$client_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_client_info()
    {
        $data=array();
        $data['client_name'] = $this->input->post('client_name', true);
        $client_id = $this->input->post('client_id', true);
        $this->db->where('client_id',$client_id);
        $this->db->update('tbl_client',$data);
    }
    
    public function delete_client_by_id($client_id)
    {
        $this->db->where('client_id',$client_id);
        $this->db->delete('tbl_client');
    }
    
    public function save_testimonial_info()
    {
        $data=array();
        $data['testimonial_details'] = $this->input->post('testimonial_details', true);
        $data['testimonial_name'] = $this->input->post('testimonial_name', true);
        $data['testimonial_designation'] = $this->input->post('testimonial_designation', true);
        $this->db->insert('tbl_testimonial',$data);
    }
    
    public function select_all_testimonial()
    {
        $sql = "SELECT * FROM tbl_testimonial";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_testimonial_by_id($testimonial_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_testimonial');
        $this->db->where('testimonial_id',$testimonial_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_testimonial_info()
    {
        $data=array();
        $data['testimonial_details'] = $this->input->post('testimonial_details', true);
        $data['testimonial_name'] = $this->input->post('testimonial_name', true);
        $data['testimonial_designation'] = $this->input->post('testimonial_designation', true);
        $testimonial_id = $this->input->post('testimonial_id', true);
        $this->db->where('testimonial_id',$testimonial_id);
        $this->db->update('tbl_testimonial',$data);
    }
    
    public function delete_testimonial_by_id($testimonial_id)
    {
        $this->db->where('testimonial_id',$testimonial_id);
        $this->db->delete('tbl_testimonial');
    }

    public function save_event_info($data)
    {
        $this->db->insert('tbl_event',$data);
    }
    
    public function select_all_event()
    {
        $sql = "SELECT * FROM tbl_event";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_event_by_id($event_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_event');
        $this->db->where('event_id',$event_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_event_info($data)
    {
        $event_id = $this->input->post('event_id', true);
        $this->db->where('event_id',$event_id);
        $this->db->update('tbl_event',$data);
    }
    
    public function delete_event_by_id($event_id)
    {
        $this->db->where('event_id',$event_id);
        $this->db->delete('tbl_event');
    }
    
    public function save_team_info($data)
    {
        $this->db->insert('tbl_team',$data);
    }
    
    public function select_all_team()
    {
        $sql = "SELECT * FROM tbl_team";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_team_by_id($team_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_team');
        $this->db->where('team_id',$team_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_team_info($data)
    {
        $team_id=$this->input->post('team_id',true);
        $this->db->where('team_id',$team_id);
        $this->db->update('tbl_team',$data);
    }
    
    public function delete_team_by_id($team_id)
    {
        $this->db->where('team_id',$team_id);
        $this->db->delete('tbl_team');
    }
}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
    public function index()
    {
        $data = array();
        $data['title'] = 'The Vive Communication';
        $data['all_slider'] = $this->admin_model->select_all_slider();
        $data['all_category'] = $this->admin_model->select_all_category();
        $data['all_project'] = $this->admin_model->select_all_project();
        $data['all_client'] = $this->admin_model->select_all_client();
        $data['all_testimonial'] = $this->admin_model->select_all_testimonial();
        $data['all_event'] = $this->admin_model->select_all_event();
        $data['all_team'] = $this->admin_model->select_all_team();
        $this->load->view('master', $data);
    }
    
    public function project_details($project_id)
    {
        $data = array();
        $data['title'] = 'Project Details';
        $data['project_info'] = $this->admin_model->select_project_by_id($project_id);
        $this->load->view('project_details', $data);
    }
    
    public function event_details($event_id)
    {
        $data = array();
        $data['title'] = 'Event Details';
        $data['event_info'] = $this->admin_model->select_event_by_id($event_id);
        $this->load->view('event_details', $data);
    }
    
    public function contact()
    {
        $mdata = array(); 
        $mdata['name'] = $this->input->post('name', true);
        $mdata['message'] = $this->input->post('message', true);
        $mdata['from_address'] = $this->input->post('email', true);
        $mdata['admin_full_name'] = 'Contact Us';
        $mdata['to_address'] = 'obi.prog@gmail.com';
        $mdata['subject'] = 'Contact Us';        
        $this->mailer_model->sendEmail($mdata, 'contact');
        redirect('home');
    }
}
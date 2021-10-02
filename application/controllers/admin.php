<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) 
        {
            redirect('admin_login', 'refresh');
        }
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Dashboard';
        $data['dashboard'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('admin_login');
    }
    
    public function edit_admin($admin_id) 
    {
        $data = array();
        $data['title'] = 'Edit Admin';
        $data['admin_info'] = $this->admin_model->select_admin_by_id($admin_id);
        $data['dashboard'] = $this->load->view('admin/edit_admin', $data, true);
        $sdata = array();
        $sdata['edit_admin'] = 'Update Admin Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_admin() 
    {
        $this->admin_model->update_admin_info();
        redirect('admin');
    }
    
    public function add_slider()
    {
        $data = array();
        $data['title'] = 'Add Slider';
        $data['dashboard'] = $this->load->view('admin/add_slider', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_slider()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/slider_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('slider_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'slider_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/slider_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '1850';
                $config['height'] = '1030';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'slider_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['slider_heading'] = $this->input->post('slider_heading', true);
        $data['slider_subheading'] = $this->input->post('slider_subheading', true);
        $data['slider_link'] = $this->input->post('slider_link', true);
        $this->admin_model->save_slider_info($data);
        $sdata = array();
        $sdata['save_slider'] = 'Slider Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_slider');
    }
    
    public function manage_slider()
    {
        $data = array();
        $data['title'] = 'Manage Slider';
        $data['all_slider'] = $this->admin_model->select_all_slider();
        $data['dashboard'] = $this->load->view('admin/manage_slider', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_slider($slider_id) 
    {
        $data = array();
        $data['title'] = 'Edit Slider';
        $data['slider_info'] = $this->admin_model->select_slider_by_id($slider_id);
        $data['dashboard'] = $this->load->view('admin/edit_slider', $data, true);
        $sdata = array();
        $sdata['edit_slider'] = 'Update Slider Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_slider()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/slider_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('slider_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'slider_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/slider_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '1850';
                $config['height'] = '1030';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'slider_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['slider_heading'] = $this->input->post('slider_heading', true);
        $data['slider_subheading'] = $this->input->post('slider_subheading', true);
        $data['slider_link'] = $this->input->post('slider_link', true);
        $this->admin_model->update_slider_info($data);
        $sdata = array();
        $sdata['save_slide'] = 'Slide Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_slider');
    }
    
    public function delete_slider($slider_id) 
    {        
        $this->admin_model->delete_slider_by_id($slider_id);
        redirect('admin/manage_slider');
    }

    public function add_category()
    {
        $data = array();
        $data['title'] = 'Add Category';
        $data['dashboard'] = $this->load->view('admin/add_category', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_category()
    {
        $this->admin_model->save_category_info();
        $sdata = array();
        $sdata['save_category'] = 'Category Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_category');
    }
    
    public function manage_category()
    {
        $data = array();
        $data['title'] = 'Manage Category';
        $data['all_category'] = $this->admin_model->select_all_category();
        $data['dashboard'] = $this->load->view('admin/manage_category', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_category($category_id) 
    {
        $data = array();
        $data['title'] = 'Edit Category';
        $data['category_info'] = $this->admin_model->select_category_by_id($category_id);
        $data['dashboard'] = $this->load->view('admin/edit_category', $data, true);
        $sdata = array();
        $sdata['edit_category'] = 'Update Category Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_category()
    {
        $this->admin_model->update_category_info();
        $sdata = array();
        $sdata['save_category'] = 'Category Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_category');
    }

    public function delete_category($category_id) 
    {        
        $this->admin_model->delete_category_by_id($category_id);
        redirect('admin/manage_category');
    }
    
    public function add_project()
    {
        $data = array();
        $data['title'] = 'Add Project';
        $data['all_category'] = $this->admin_model->select_all_category();
        $data['dashboard'] = $this->load->view('admin/add_project', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_project()
    {
        $data=array();
        $data['category_id'] = $this->input->post('category_id', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/project_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('project_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'project_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/project_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '270';
                $config['height'] = '330';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'project_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['project_name'] = $this->input->post('project_name', true);
        $data['project_description'] = $this->input->post('project_description', true);
        $this->admin_model->save_project_info($data);
        $sdata = array();
        $sdata['save_project'] = 'Project Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_project');
    }
    
    public function manage_project()
    {
        $data = array();
        $data['title'] = 'Manage Project';
        $data['all_project'] = $this->admin_model->select_all_project();
        $data['dashboard'] = $this->load->view('admin/manage_project', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_project($project_id) 
    {
        $data = array();
        $data['title'] = 'Edit Project';
        $data['all_category'] = $this->admin_model->select_all_category();
        $data['project_info'] = $this->admin_model->select_project_by_id($project_id);
        $data['dashboard'] = $this->load->view('admin/edit_project', $data, true);
        $sdata = array();
        $sdata['edit_project'] = 'Update Project Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_project()
    {
        $data=array();
        $data['category_id'] = $this->input->post('category_id', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/project_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('project_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'project_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/project_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '270';
                $config['height'] = '330';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'project_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['project_name'] = $this->input->post('project_name', true);
        $data['project_description'] = $this->input->post('project_description', true);
        $this->admin_model->update_project_info($data);
        $sdata = array();
        $sdata['save_project'] = 'Project Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_project');
    }
    
    public function delete_project($project_id) 
    {        
        $this->admin_model->delete_project_by_id($project_id);
        redirect('admin/manage_project');
    }

    public function add_client()
    {
        $data = array();
        $data['title'] = 'Add Client';
        $data['dashboard'] = $this->load->view('admin/add_client', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_client()
    {
        /**START IMAGE UPLOAD**/
        $config['upload_path'] = 'upload_image/client_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10240';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $error = '';
        $fdata = array();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('client_image'))
        {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } 
        else 
        {
            $fdata = $this->upload->data();
            $index = 'client_image';
            $data[$index] = $config['upload_path'] . $fdata['file_name'];
        }
        /**END IMAGE UPLOAD**/
        $this->admin_model->save_client_info($data);
        $sdata = array();
        $sdata['save_client'] = 'Client Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_client');
    }
    
    public function manage_client()
    {
        $data = array();
        $data['title'] = 'Manage Client';
        $data['all_client'] = $this->admin_model->select_all_client();
        $data['dashboard'] = $this->load->view('admin/manage_client', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function delete_client($client_id) 
    {        
        $this->admin_model->delete_client_by_id($client_id);
        redirect('admin/manage_client');
    }

    public function add_testimonial()
    {
        $data = array();
        $data['title'] = 'Add Testimonial';
        $data['dashboard'] = $this->load->view('admin/add_testimonial', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_testimonial()
    {
        $this->admin_model->save_testimonial_info();
        $sdata = array();
        $sdata['save_testimonial'] = 'Testimonial Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_testimonial');
    }
    
    public function manage_testimonial()
    {
        $data = array();
        $data['title'] = 'Manage Testimonial';
        $data['all_testimonial'] = $this->admin_model->select_all_testimonial();
        $data['dashboard'] = $this->load->view('admin/manage_testimonial', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_testimonial($testimonial_id) 
    {
        $data = array();
        $data['title'] = 'Edit Testimonial';
        $data['testimonial_info'] = $this->admin_model->select_testimonial_by_id($testimonial_id);
        $data['dashboard'] = $this->load->view('admin/edit_testimonial', $data, true);
        $sdata = array();
        $sdata['edit_testimonial'] = 'Update Testimonial Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_testimonial()
    {
        $this->admin_model->update_testimonial_info();
        $sdata = array();
        $sdata['save_testimonial'] = 'Testimonial Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_testimonial');
    }

    public function delete_testimonial($testimonial_id) 
    {        
        $this->admin_model->delete_testimonial_by_id($testimonial_id);
        redirect('admin/manage_testimonial');
    }
    
    public function add_event()
    {
        $data = array();
        $data['title'] = 'Add Event';
        $data['dashboard'] = $this->load->view('admin/add_event', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_event()
    {
        $data=array();
        $data['event_name'] = $this->input->post('event_name', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
        $cnt = 0;
        foreach ($_FILES as $eachFile)
        {
            if ($eachFile['size'] > 0)
            {

                $config['upload_path'] = 'upload_image/event_slider_' . $cnt . '/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('event_slider_' . $cnt))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'event_slider_' . $cnt;
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/event_slider_' . $cnt . '/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '270';
                $config['height'] = '330';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'event_slider_' . $cnt;
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
                }
                $cnt++;
        }
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['event_description'] = $this->input->post('event_description', true);
        $this->admin_model->save_event_info($data);
        $sdata = array();
        $sdata['save_event'] = 'Event Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_event');
    }
    
    public function manage_event()
    {
        $data = array();
        $data['title'] = 'Manage Event';
        $data['all_event'] = $this->admin_model->select_all_event();
        $data['dashboard'] = $this->load->view('admin/manage_event', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_event($event_id) 
    {
        $data = array();
        $data['title'] = 'Edit Event';
        $data['event_info'] = $this->admin_model->select_event_by_id($event_id);
        $data['dashboard'] = $this->load->view('admin/edit_event', $data, true);
        $sdata = array();
        $sdata['edit_event'] = 'Update Event Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_event()
    {
        $data=array();
        $data['event_name'] = $this->input->post('event_name', true);
        /** IF THEY DO NOT SELECT A IMAGE **/
        $cnt = 0;
        foreach ($_FILES as $eachFile)
        {
            if ($eachFile['size'] > 0)
            {

                $config['upload_path'] = 'upload_image/event_slider_' . $cnt . '/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('event_slider_' . $cnt))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'event_slider_' . $cnt;
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/event_slider_' . $cnt . '/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '270';
                $config['height'] = '330';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'event_slider_' . $cnt;
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
                }
                $cnt++;
        }
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['event_description'] = $this->input->post('event_description', true);
        $this->admin_model->update_event_info($data);
        $sdata = array();
        $sdata['save_event'] = 'Event Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_event');
    }

    public function delete_event($event_id) 
    {        
        $this->admin_model->delete_event_by_id($event_id);
        redirect('admin/manage_event');
    }
    
    public function add_team()
    {
        $data = array();
        $data['title'] = 'Add Team';
        $data['dashboard'] = $this->load->view('admin/add_team', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_team()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/team_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('team_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'team_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/team_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '350';
                $config['height'] = '250';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'team_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
            }
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['team_name'] = $this->input->post('team_name', true);
        $data['team_designation'] = $this->input->post('team_designation', true);
        $data['team_facebook_link'] = $this->input->post('team_facebook_link', true);
        $data['team_twitter_link'] = $this->input->post('team_twitter_link', true);
        $this->admin_model->save_team_info($data);
        $sdata = array();
        $sdata['save_team'] = 'Team Saved';
        $this->session->set_userdata($sdata);
        redirect('admin/add_team');
    }
    
    public function manage_team()
    {
        $data = array();
        $data['title'] = 'Manage Team';
        $data['all_team'] = $this->admin_model->select_all_team();
        $data['dashboard'] = $this->load->view('admin/manage_team', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_team($team_id) 
    {
        $data = array();
        $data['title'] = 'Edit Team';
        $data['team_info'] = $this->admin_model->select_team_by_id($team_id);
        $data['dashboard'] = $this->load->view('admin/edit_team', $data, true);
        $sdata = array();
        $sdata['edit_team'] = 'Update Team Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }
    
    public function update_team()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/team_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('team_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'team_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/team_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = '350';
                $config['height'] = '250';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'team_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $data['team_name'] = $this->input->post('team_name', true);
        $data['team_designation'] = $this->input->post('team_designation', true);
        $data['team_facebook_link'] = $this->input->post('team_facebook_link', true);
        $data['team_twitter_link'] = $this->input->post('team_twitter_link', true);
        $this->admin_model->update_team_info($data);
        $sdata = array();
        $sdata['save_team'] = 'Team Edited';
        $this->session->set_userdata($sdata);
        redirect('admin/manage_team');
    }
    
    public function delete_team($team_id) 
    {        
        $this->admin_model->delete_team_by_id($team_id);
        redirect('admin/manage_team');
    }

    public function about()
    {
        $data = array();
        $data['title'] = 'LabTrio';
        $data['dashboard'] = $this->load->view('admin/about', $data, true);
        $this->load->view('admin/master', $data);
    }
}
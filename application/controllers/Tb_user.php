<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tb_user = $this->Tb_user_model->get_all();

        $data = array(
            'tb_user_data' => $tb_user
        );

        $this->load->view('tb_user/tb_user_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_user_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'password' => $row->password,
		'name' => $row->name,
		'status_active' => $row->status_active,
		'user_created' => $row->user_created,
		'date_created' => $row->date_created,
		'user_modified' => $row->user_modified,
		'date_modified' => $row->date_modified,
	    );
            $this->load->view('tb_user/tb_user_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_user'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_user/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'name' => set_value('name'),
	    'status_active' => set_value('status_active'),
	    'user_created' => set_value('user_created'),
	    'date_created' => set_value('date_created'),
	    'user_modified' => set_value('user_modified'),
	    'date_modified' => set_value('date_modified'),
	);
        $this->load->view('tb_user/tb_user_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'name' => $this->input->post('name',TRUE),
		'status_active' => $this->input->post('status_active',TRUE),
		'user_created' => $this->input->post('user_created',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'user_modified' => $this->input->post('user_modified',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
	    );

            $this->Tb_user_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_user_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_user/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'name' => set_value('name', $row->name),
		'status_active' => set_value('status_active', $row->status_active),
		'user_created' => set_value('user_created', $row->user_created),
		'date_created' => set_value('date_created', $row->date_created),
		'user_modified' => set_value('user_modified', $row->user_modified),
		'date_modified' => set_value('date_modified', $row->date_modified),
	    );
            $this->load->view('tb_user/tb_user_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'name' => $this->input->post('name',TRUE),
		'status_active' => $this->input->post('status_active',TRUE),
		'user_created' => $this->input->post('user_created',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'user_modified' => $this->input->post('user_modified',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
	    );

            $this->Tb_user_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_user'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_user_model->get_by_id($id);

        if ($row) {
            $this->Tb_user_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_user'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('status_active', 'status active', 'trim|required');
	$this->form_validation->set_rules('user_created', 'user created', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('user_modified', 'user modified', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_user.php */
/* Location: ./application/controllers/Tb_user.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-23 05:50:10 */
/* http://harviacode.com */
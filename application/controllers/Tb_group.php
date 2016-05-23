<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_group extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_group_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tb_group = $this->Tb_group_model->get_all();

        $data = array(
            'tb_group_data' => $tb_group
        );

        $this->load->view('tb_group/tb_group_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_group_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'group_code' => $row->group_code,
		'group_description' => $row->group_description,
		'status_active' => $row->status_active,
		'user_created' => $row->user_created,
		'date_created' => $row->date_created,
		'user_modified' => $row->user_modified,
		'date_modified' => $row->date_modified,
	    );
            $this->load->view('tb_group/tb_group_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_group'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_group/create_action'),
    	    'id' => set_value('id'),
    	    'group_code' => set_value('group_code'),
    	    'group_description' => set_value('group_description'),
    	    'status_active' => set_value('status_active'),
    	    'user_created' => set_value('user_created'),
    	    'date_created' => set_value('date_created'),
    	    'user_modified' => set_value('user_modified'),
    	    'date_modified' => set_value('date_modified'),
    	);
        $this->load->view('tb_group/tb_group_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'group_code' => $this->input->post('group_code',TRUE),
        		'group_description' => $this->input->post('group_description',TRUE),
        		'status_active' => $this->input->post('status_active',TRUE),
        		'user_created' => $this->input->post('user_created',TRUE),
        		'date_created' => $this->input->post('date_created',TRUE),
        		'user_modified' => $this->input->post('user_modified',TRUE),
        		'date_modified' => $this->input->post('date_modified',TRUE),
        	    );

            $this->Tb_group_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_group'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_group_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_group/update_action'),
		'id' => set_value('id', $row->id),
		'group_code' => set_value('group_code', $row->group_code),
		'group_description' => set_value('group_description', $row->group_description),
		'status_active' => set_value('status_active', $row->status_active),
		'user_created' => set_value('user_created', $row->user_created),
		'date_created' => set_value('date_created', $row->date_created),
		'user_modified' => set_value('user_modified', $row->user_modified),
		'date_modified' => set_value('date_modified', $row->date_modified),
	    );
            $this->load->view('tb_group/tb_group_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_group'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'group_code' => $this->input->post('group_code',TRUE),
		'group_description' => $this->input->post('group_description',TRUE),
		'status_active' => $this->input->post('status_active',TRUE),
		'user_created' => $this->input->post('user_created',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'user_modified' => $this->input->post('user_modified',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
	    );

            $this->Tb_group_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_group'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_group_model->get_by_id($id);

        if ($row) {
            $this->Tb_group_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_group'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_group'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('group_code', 'group code', 'trim|required');
	$this->form_validation->set_rules('group_description', 'group description', 'trim|required');
	$this->form_validation->set_rules('status_active', 'status active', 'trim|required');
    //$this->form_validation->set_rules('user_created', 'user created', 'trim|required');
	$this->form_validation->set_rules('user_created', 'user created', 'trim');
    //$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim');
    //$this->form_validation->set_rules('user_modified', 'user modified', 'trim|required');
	$this->form_validation->set_rules('user_modified', 'user modified', 'trim');
    //$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_group.php */
/* Location: ./application/controllers/Tb_group.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-23 06:47:22 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_pemohon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_pemohon_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $tb_pemohon = $this->Tb_pemohon_model->get_all();

        $data = array(
            'tb_pemohon_data' => $tb_pemohon
        );

        $this->load->view('tb_pemohon/tb_pemohon_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_pemohon_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'email' => $row->email,
		'nama' => $row->nama,
		'jenis' => $row->jenis,
		'alamat' => $row->alamat,
		'telepon' => $row->telepon,
		'fax' => $row->fax,
		'contact_person' => $row->contact_person,
		'nomor_contact_person' => $row->nomor_contact_person,
		'status_active' => $row->status_active,
		'user_created' => $row->user_created,
		'date_created' => $row->date_created,
		'user_modified' => $row->user_modified,
		'date_modified' => $row->date_modified,
	    );
            $this->load->view('tb_pemohon/tb_pemohon_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_pemohon'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_pemohon/create_action'),
	    'id' => set_value('id'),
	    'email' => set_value('email'),
	    'nama' => set_value('nama'),
	    'jenis' => set_value('jenis'),
	    'alamat' => set_value('alamat'),
	    'telepon' => set_value('telepon'),
	    'fax' => set_value('fax'),
	    'contact_person' => set_value('contact_person'),
	    'nomor_contact_person' => set_value('nomor_contact_person'),
	    'status_active' => set_value('status_active'),
	    'user_created' => set_value('user_created'),
	    'date_created' => set_value('date_created'),
	    'user_modified' => set_value('user_modified'),
	    'date_modified' => set_value('date_modified'),
	);
        $this->load->view('tb_pemohon/tb_pemohon_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'fax' => $this->input->post('fax',TRUE),
		'contact_person' => $this->input->post('contact_person',TRUE),
		'nomor_contact_person' => $this->input->post('nomor_contact_person',TRUE),
		'status_active' => $this->input->post('status_active',TRUE),
		'user_created' => $this->input->post('user_created',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'user_modified' => $this->input->post('user_modified',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
	    );

            $this->Tb_pemohon_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_pemohon'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_pemohon_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_pemohon/update_action'),
		'id' => set_value('id', $row->id),
		'email' => set_value('email', $row->email),
		'nama' => set_value('nama', $row->nama),
		'jenis' => set_value('jenis', $row->jenis),
		'alamat' => set_value('alamat', $row->alamat),
		'telepon' => set_value('telepon', $row->telepon),
		'fax' => set_value('fax', $row->fax),
		'contact_person' => set_value('contact_person', $row->contact_person),
		'nomor_contact_person' => set_value('nomor_contact_person', $row->nomor_contact_person),
		'status_active' => set_value('status_active', $row->status_active),
		'user_created' => set_value('user_created', $row->user_created),
		'date_created' => set_value('date_created', $row->date_created),
		'user_modified' => set_value('user_modified', $row->user_modified),
		'date_modified' => set_value('date_modified', $row->date_modified),
	    );
            $this->load->view('tb_pemohon/tb_pemohon_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_pemohon'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'telepon' => $this->input->post('telepon',TRUE),
		'fax' => $this->input->post('fax',TRUE),
		'contact_person' => $this->input->post('contact_person',TRUE),
		'nomor_contact_person' => $this->input->post('nomor_contact_person',TRUE),
		'status_active' => $this->input->post('status_active',TRUE),
		'user_created' => $this->input->post('user_created',TRUE),
		'date_created' => $this->input->post('date_created',TRUE),
		'user_modified' => $this->input->post('user_modified',TRUE),
		'date_modified' => $this->input->post('date_modified',TRUE),
	    );

            $this->Tb_pemohon_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_pemohon'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_pemohon_model->get_by_id($id);

        if ($row) {
            $this->Tb_pemohon_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_pemohon'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_pemohon'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
	$this->form_validation->set_rules('fax', 'fax', 'trim|required');
	$this->form_validation->set_rules('contact_person', 'contact person', 'trim|required');
	$this->form_validation->set_rules('nomor_contact_person', 'nomor contact person', 'trim|required');
	$this->form_validation->set_rules('status_active', 'status active', 'trim|required');
	$this->form_validation->set_rules('user_created', 'user created', 'trim|required');
	$this->form_validation->set_rules('date_created', 'date created', 'trim|required');
	$this->form_validation->set_rules('user_modified', 'user modified', 'trim|required');
	$this->form_validation->set_rules('date_modified', 'date modified', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_pemohon.php */
/* Location: ./application/controllers/Tb_pemohon.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-23 08:03:30 */
/* http://harviacode.com */
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa_model->get_data('tbl_mahasiswa')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tambah_mahasiswa');
        $this->load->view('templates/footer');
    }


    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'npm_mahasiswa' => $this->input->post('npm_mahasiswa'),
                'alamat_mahasiswa' => $this->input->post('alamat_mahasiswa'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
            );
            $this->mahasiswa_model->insert_data($data, 'tbl_mahasiswa');
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('mahasiswa');
        }
    }

    public function _rules()
    {   
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('npm_mahasiswa', 'NPM Mahasiswa', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('alamat_mahasiswa', 'Alamat Mahasiswa', 'required', array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'required', array('required' => '%s Harus Diisi'));
    }

	public function hapus($id=null)
	{
		$this->mahasiswa_model->delete($id, 'tbl_mahasiswa');
		redirect('mahasiswa');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->get_data_by_id($id, 'tbl_mahasiswa')->row();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('edit_mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function edit_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->edit($this->input->post('id_mahasiswa'));
		} else {
			$id = $this->input->post('id_mahasiswa');
			$data = array(
				'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
				'npm_mahasiswa' => $this->input->post('npm_mahasiswa'),
				'alamat_mahasiswa' => $this->input->post('alamat_mahasiswa'),
				'nomor_telepon' => $this->input->post('nomor_telepon'),
			);
			$this->mahasiswa_model->update_data($id, $data, 'tbl_mahasiswa');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('mahasiswa');
		}
	}

}
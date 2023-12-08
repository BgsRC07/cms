<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi  extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $data   =   array(
            'judul_halaman' =>  'Halaman Konfigurasi',
            'konfig'        =>  $konfig
        );
		$this->template->load('template_admin','admin/konfigurasi',$data);
	}
    public function update() {
        $where = array('id_konfigurasi' => 1);
        $data   =   array(
            'judul_web'  => $this->input->post('judul'),
            'profil_web'  => $this->input->post('profil_web'),
            'facebook'  => $this->input->post('facebook'),
            'instagram'  => $this->input->post('instagram'),
            'email'  => $this->input->post('email'),
            'alamat'  => $this->input->post('alamat'),
            'no_wa'  => $this->input->post('no_wa'),
        );
        $this->db->update('konfigurasi',$data,$where);
        $this->session->set_flashdata('alert','<div class="alert alert-success" role="alert">
        Berhasil memperbarui konfigurasi
        </div>');
        redirect('admin/konfigurasi');
    }
}

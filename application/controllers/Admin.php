<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    cek_login();
    }

    public function index()
    {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['jumlahanggota'] = $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows();
    $where = ['stok != 0'];
    $data['totalstok'] = $this->ModelBuku->total('stok', $where);

    $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
    $data['buku'] = $this->ModelBuku->getBuku()->result_array();
    $this->load->view('admin/header', $data);
    $this->load->view('admin/sidebar', $data);
    $this->load->view('admin/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('admin/footer');
    }
}
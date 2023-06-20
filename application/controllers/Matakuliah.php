<?php
class Matakuliah extends CI_Controller
{
public function index()
{
    $this->load->view('view-form-matakuliah');
}
public function cetak()
{
    $this->form_validation->set_rules('kode', 'Kode Matakuliah',
    'required|min_length[3]', [
        'required' => 'Kode Matakuliah Harus diisi',
        'min_length' => 'Kode terlalu pendek'
        ]);
    $this->form_validation->set_rules('nama', 'Nama Matakuliah',
    'required|min_length[5]', [
        'required' => 'Nama Matakuliah Harus diisi',
        'min_length' => 'Nama terlalu pendek'
        ]);

        //jika form validasi tidak berjalan sesuai rules
        //jika ditemukan kondisi sesuai rules
    if ($this->form_validation->run() != true) {
        $this->load->view('view-form-matakuliah');
    } else { //kalau sudah memenuhi rules
        $data = [
        'kode' => $this->input->post('kode'),
        'nama' => $this->input->post('nama'),
        'sks' => $this->input->post('sks')
        ];
        $this->load->view('view-data-matakuliah', $data);
    }
}
}
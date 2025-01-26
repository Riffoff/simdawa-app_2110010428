<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisModel extends CI_Model {
    
    private $tabel = "jenis_beasiswa";
    public function get_jenis(){
        return $this->db->get($this->tabel)->result();
        //baris 9 bertujuan untuk mengambil data dari tabel jenis_beasiswa. selain dengan fungsi get,
        //kita juga bisa menggunakan $this->db->query('select * from jenis_beasiswa')->result();
    }

    public function insert_jenis(){
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];
        //nama_jenis sebelah kiri, sesuaikan dengan nama kolom di tabel
        //nama_jenis sebelah kanan, sesuaikan dengan name di form yaitu (jenis_create.php baris 29)
        $this->db->insert($this->tabel, $data);

        if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('pesan', "Data Jenis berhasil ditambahkan!");
        $this->session->set_flashdata('status', true);
        } else {
        $this->session->set_flashdata('pesan', "Data Jenis gagal ditambahkan!");
        $this->session->set_flashdata('status', false);
        }

        
    }

    public function get_jenis_byid($id){
        return $this->db->get_where($this->tabel, ['id'=>$id])->row();
    }

    public function update_jenis(){
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->tabel, $data);

        if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('pesan', "Data Jenis berhasil diperbaharui!");
        $this->session->set_flashdata('status', true);
        } else {
        $this->session->set_flashdata('pesan', "Data Jenis gagal diperbaharui!");
        $this->session->set_flashdata('status', false);
        }
    }
    
    public function delete_jenis($id){
        $this->db->where('id', $id);
        $this->db->delete($this->$tabel);

        if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('pesan', "Data Jenis berhasil dihapus!");
        $this->session->set_flashdata('status', true);
        } else {
        $this->session->set_flashdata('pesan', "Data Jenis gagal dihapus!");
        $this->session->set_flashdata('status', false);
        }
    }
}
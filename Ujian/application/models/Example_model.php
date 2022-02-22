<?php

class Example_model extends CI_Model{

    public function addData()
    {
        $data=[
            'judul'=>$_POST['judul'],
            'penulis'=>$_POST['penulis'],
            'penerbit'=>$_POST['penerbit'],
            'tanggal_terbit'=>$_POST['tgl_terbit'],
            'kota_terbit'=>$_POST['kota'],
            'tebal'=>$_POST['tebal']
        ];

        $this->db->insert('perpustakaan',$data);
    }

    public function getData()
    {
        return $this->db->get('perpustakaan')->result_array();
    }

    public function editData(){
        $this->db->set('judul', $_POST['judul']);
        $this->db->set('penulis', $_POST['penulis']);
        $this->db->set('penerbit', $_POST['penerbit']);
        $this->db->set('tanggal_terbit', $_POST['tgl_terbit']);
        $this->db->set('kota_terbit', $_POST['kota']);
        $this->db->set('tebal', $_POST['tebal']);
        $this->db->where('id_perpustakaan', $_POST['id_perpustakaan']);
        $this->db->update('perpustakaan');
    }
    
    public function deleteData($id){
        $this->db->delete('perpustakaan',['id_perpustakaan'=>$id]);
    }
    public function detailData($id){
        return $this->db->get('perpustakaan',['id_perpustakaan'=>$id]);
    }
}
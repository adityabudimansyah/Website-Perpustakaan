<?php

class Example extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('example_model');
    }

    public function index()
    {
        $this->load->view('part/header');
        $this->load->view('main_content');
        $this->load->view('part/footer');
    }

    public function addData(){
        $this->load->model('example_model');
        $this->example_model->addData();

        redirect('example/dataBuku');
    }

    public function dataBuku()
    {
        $data['perpustakaan']=$this->example_model->getData();
        $this->load->view('part/header');
        $this->load->view('data_buku',$data);
        $this->load->view('part/footer');
    }

    public function editData(){
        $this->example_model->editData();

        redirect('example/dataBuku');
    }

    public function deleteData($id){
        $this->example_model->deleteData($id);
        redirect('example/dataBuku');
    }

    public function detailData($id){
        $this->load->model('example_model');
        $this->example_model->deleteData($id);
        redirect('example/dataBuku');
    }
}
<?php

class Home extends CI_Controller {
    public function index ()
    {
       $this->load->database();
       $this->load->model('Dashboard_model');

       $data['title']='SINDHI HOME';
       $data['jml_stasiun']=$this->Dashboard_model->jumlah_stasiun();
       $data['rr_max']=$this->Dashboard_model->hujanMax();
       $data['cakupan_data']=$this->Dashboard_model->cakupan_data();
       $this->load->view('templates/header', $data);
       $this->load->view('templates/navbar');
       $this->load->view('home', $data);
       $this->load->view('templates/footer');
    }

}
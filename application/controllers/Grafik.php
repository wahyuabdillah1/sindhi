<?php

class Grafik extends CI_Controller {

    public function __construct ()
    {   
        parent::__construct();
        $this->load->database();
        $this->load->model('Visualisasi_model');
        $this->load->model('Statistik_model');
    
    }

    public function index ()
    {  
       $data['title']='Visualisasi Data';
       $data['visualisasi']=$this->Visualisasi_model->getAllVisualisasi();
       $data['resolusi']=$this->Statistik_model->get_resolusi();
       $this->load->view('templates/header', $data);
       $this->load->view('templates/navbar');
       $this->load->view('visualisasi',$data);
       $this->load->view('grafik',$data);
       $this->load->view('templates/footer');
    }

}
<?php

class Statistik extends CI_Controller {

    public function __construct ()
    {   
        parent::__construct();
        $this->load->database();
        $this->load->model('Statistik_model');
    
    }

    public function get_statistik()
    {
    //$this->Statistik_model->get_statistik($_POST['id']);
      
    $id_resolusi= $_POST ['id'];
    $data=$this->Statistik_model->get_statistik($id_resolusi);
    echo json_encode($data);

  /* $id_resolusi=$this->input->post('id');
   $this->Statistik_model->get_statistik($id_resolusi);
   echo json_encode($id_resolusi);*/

        //echo $id_resolusi;
    //$getstatistik = $this->Statistik_model->get_statistik($id_resolusi);
    //var_dump($id_resolusi);

   // $data = $this->Statistik_model->get_statistik($id_resolusi)->result();
      // echo json_encode($id_resolusi);

      // json_encode($this->model('Statistik_model')->get_statistik($_POST['id']));

    }

}
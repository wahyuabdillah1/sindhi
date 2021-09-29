<?php

class Visualisasi_model extends CI_model {
    public function getAllVisualisasi()
    
    {

        $query = $this->db->get('tb_station');
        return $query->result();

    } 

    public function view_monthly()
    
    {
        $query = $this->db->query("select * from view_data_bulanan where station_id='$id_stasiun' and data_timestamp like '%$time_awal%'");
        return $query->result_array();
    } 

}
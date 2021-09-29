<?php
 
class Statistik_model extends CI_Model{
     
    function get_resolusi(){
        $query = $this->db->query("SELECT * FROM tb_resolution");
        return $query->result();  
    }
 
    function get_statistik($id_resolusi){
        
        $hsl=$this->db->query("SELECT * FROM tb_statistics WHERE resolution_id='$id_resolusi'");
        return $hsl->result();
       
    }
     
}
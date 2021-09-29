<?php

class Dashboard_model extends CI_model {
    public function jumlah_stasiun()
    
    {
        $query = $this->db->query("SELECT COUNT(id) AS id FROM tb_station ;");
        return $query->result();
    }

    public function hujanMax()
    
    {
        $query = $this->db->query("SELECT MAX(rainfall_day_mm) AS ch_mm FROM tb_daily_rainfall WHERE rainfall_day_mm <>9999.0 and rainfall_day_mm <>8888.0;");
        return $query->result();
    }

    public function cakupan_data()
    
    {
        $query = $this->db->query("SELECT min(date_format(tb_daily_rainfall.data_timestamp,'%Y')) AS tahun_awal, max(date_format(tb_daily_rainfall.data_timestamp,'%Y')) AS tahun_akhir from tb_daily_rainfall where data_timestamp<>0000;");
        return $query->result();
    }


    
}
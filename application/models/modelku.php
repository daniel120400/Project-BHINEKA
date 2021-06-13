<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model {
    // public function getDataBrg($tabel){
    //     $datanih = $this->db->query(" SELECT * FROM .$tabel");
    //     return $datanih->result_array();
    // }

    public function getDataBrg($tabel){
        $datanih = $this->db->get($tabel);
        return $datanih->result_array();
    }
    public function masuk($tabel,$data){
        $datanih = $this->db->insert($tabel,$data);
        return $datanih;
    }
    public function perbarui($tabel,$data,$where){
        $datanih = $this->db->update($tabel,$data,$where);
        return $datanih;
    }
    public function getData_khusus($tabel,$where){
        $datanih = $this->db->get_where($tabel,$where);
        return $datanih->result_array();
    }
    public function hapus($tabel,$where){
        $datanih = $this->db->delete($tabel,$where);
        return $datanih;
    }
}
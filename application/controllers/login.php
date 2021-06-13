<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    $this->load->model('modelku');
    $datanih = $this ->modelku->getData("barang");
    $data = array(
        "databrg" => $datanih
    );
    $this->load->view('home',$data);
}

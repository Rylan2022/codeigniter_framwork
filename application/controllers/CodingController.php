<?php 
defined('BASEPATH') OR exit("No direct script allowed");

class CodingController extends CI_Controller{
    
    public function coding($code='x') {
        $mycode['php'] = $code;
        $this->load->view('coding', $mycode);
    }
}
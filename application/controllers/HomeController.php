<?php
defined('BASEPATH') OR exit("No direct script allowed");

class HomeController extends CI_Controller{
    public function index(){


        // $data['name'] = $name;
        // $data['name'] = "This is Data";
        // $arr['abc'] = "Sunday";
        $arr['numbers'] = array("One", "Two", "Three", "Four");
        $this->load->view('homepage',$arr);
    }

    
}

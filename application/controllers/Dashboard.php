<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
        $data['title']='Dashboard - Scanner';
        $this->load->view('template/auth_header',$data);
        $this->load->view('dashboard');
        $this->load->view('template/auth_footer');
    }

}
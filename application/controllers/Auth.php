<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller { 

    public function index(){
        if ($this->session->userdata('email1')) {
            redirect('dashboard');
        }
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()==false){
            $data['title']='Login';
            $this->load->view('template/auth_header',$data);
            $this->load->view('auth');
            $this->load->view('template/auth_footer');
            }else{
                $this->_login();
                   
            }
    }
}
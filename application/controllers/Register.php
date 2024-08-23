<?php

class Register extends CI_Controller{

    public function RegisterUser(){
        // validation rules
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordagain', 'Again Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                    $this->load->model('model_user');
                    $response=$this->model_user->insertUserData();
                    if ($response) {
                        $this->session->set_flashdata('msg','Registered Successfully.. Please Login');
                        redirect('Home/Register');
                    }else{
                        $this->session->set_flashdata('msg','Something went wrong');
                        redirect('Home/Register'); 
                    }
                }

    }

}
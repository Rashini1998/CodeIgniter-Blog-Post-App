<?php

class Login extends CI_Controller{

    public function LoginUser(){

        // validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {
                    $this->load->model('model_user');
                    $result=$this->model_user->loginUser();

                    if($result != false){
                        //set session
                        $userData = array(
                            'user_id' => $result->id,
                            'fname' => $result->fname,
                            'lname' => $result->lname,
                            'email' => $result->email,
                            'loggedIn'=> TRUE
                        );

                        $this->session->set_userdata($userData);
                        //redirect to the admin dashboard
                        $this->session->set_flashdata('welcome','Welcome Back');
                        redirect('Admin/index');

                    }else{
                        //error
                        $this->session->set_flashdata('errmsg','Wrong Credentials');
                        redirect('Home/Login');
                    }
                }

    }

    public function LogoutUser(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('loggedIn');
        redirect('Home/Login');
    }

}
<?php

class Admin extends CI_Controller{

    public function index(){
        $this->load->view('admin/dashboard');
    }

    public function addPost(){
        $this->load->view('admin/add');
    }

}
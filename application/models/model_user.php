<?php

class model_user extends CI_Model {
    function insertUserData() {
        // data insert

        //get data
        $data = array(
            'fname' => $this->input->post('fname',TRUE),
            'lname' => $this->input->post('lname',TRUE),
            'email' => $this->input->post('email',TRUE),
            'password' => sha1($this->input->post('password',TRUE))
        );

        //insert data to the database.
        return $this->db->insert('users',$data);
        
    }

    function loginUser(){
        // check email password in the database
        //     if exists --> session create
        //     else --> errors

        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        //check email and password in the database
        $this->db->where('email',$email);
        $this->db->where('password',$password);

        //search from users table
        $respond = $this->db->get('users');
        if($respond->num_rows()==1){
            return $respond->row(0);
        }else{
            return false;
        }


    }


}
?>
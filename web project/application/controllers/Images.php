<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header'); 
        if (!$this->session->userdata('logged_in'))//check if user already login
        {   
            if (get_cookie('remember')) { // check if user activate the "remember me" feature  
                $username = get_cookie('username'); //get the username from cookie
                $password = get_cookie('password'); //get the username from cookie
                if ( $this->user_model->login($username, $password) )//check username and password correct
                {
                    $user_data = array('username' => $username,'logged_in' => true );
                    $this->session->set_userdata($user_data); //set user status to login in session
                    $this->load->view('file',array('error' => ' ')); //if user already logined show upload page
                }
            }else{
                redirect('login'); //if user already logined direct user to home page
            }
        }else{
            $this->load->view('file',array('error' => ' ')); //if user already logined show login page
        }
        $this->load->view('template/footer');
    }
    //Code from INFS3202 Lecture and Practical
    public function do_upload() {
        $this->load->model('file_model');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|mp4|mkv|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('userfile')) {
            $this->load->view('template/header');
            $data = array('error' => $this->upload->display_errors());
            $this->load->view('file', $data);
            $this->load->view('template/footer');
        } 
        else 
        {
            $this->file_model->upload($this->upload->data('file_name'), $this->upload->data('full_path'),$this->session->userdata('username'));
            $this->load->view('template/header');
            $this->load->view('file', array('error' => 'File upload success. <br/>'));
            $this->load->view('template/footer');
        }
    }


    private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }



}




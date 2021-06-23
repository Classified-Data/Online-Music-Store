<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Papers example from INFS3202 course */
class Papers extends CI_Controller {

    public function index()
	{
		$this->load->database();

		$this->load->view('welcome_message');
	}

    public function read($year = 2018) {
        if ( ! file_exists(APPPATH.'views/papers/'.$year.'.php')) {
            show_404();
        }

        $data['year'] = $year;
        $this->load->view('template/header', $data);
        $this->load->view('papers/'.$year, $data);
        $this->load->view('template/footer', $data);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RaffleDraw extends CI_Controller {
    
    public function index() {
		if (!$this->session->has_userdata('win_count')) {
            $this->session->set_userdata('win_count', 0);
        }

        $randomNumber = mt_rand(1000000, 9999999);

        $data['randomNumber'] = $randomNumber;
        $data['winCount'] = $this->session->userdata('win_count');
        
		$this->load->view('templates/header');
		$this->load->view('raffle/index', $data);
		$this->load->view('templates/header');
    }

	public function randomNumber() {
        $winCount = $this->session->userdata('win_count');
        $winCount++;
        $this->session->set_userdata('win_count', $winCount);

        redirect('raffledraw/index');
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countdown extends CI_Controller {

    public function view() {
        $now = time();
        $endOfDay = strtotime('tomorrow') - 1;
        $remainingSeconds = $endOfDay - $now;

        $currentDate = date('Y-m-d H:i:s');

        $data['currentDate'] = $currentDate;
        $data['remainingSeconds'] = $remainingSeconds;


		$this->load->view('templates/header');
        $this->load->view('countdown/index', $data);
		
    }
}

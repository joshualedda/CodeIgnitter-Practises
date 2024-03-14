<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
	public function view() {
		$page = 'view';
	
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}
	
		$this->load->library('form_validation');
		$this->load->helper('security');
	
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('course', 'Course', 'trim|required|xss_clean');
		$this->form_validation->set_rules('score', 'Score', 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules('reason', 'Reason', 'trim|required|xss_clean');
	
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Feedback Form';
			$this->load->view('templates/header');
			$this->load->view('pages/' . $page, $data);
			$this->load->view('templates/footer');
		} else {
			$name = $this->input->post('name');
			$course = $this->input->post('course');
			$score = $this->input->post('score');
			$reason = $this->input->post('reason');
	
			$this->session->set_userdata('entry_data', [
				'name' => $name,
				'course' => $course,
				'score' => $score,
				'reason' => $reason
			]);
	
			redirect('pages/entry');
		}
	}	

    public function entry() {
        $data['entry_data'] = $this->session->userdata('entry_data');
        $this->load->view('templates/header');
        $this->load->view('pages/entry', $data);
        $this->load->view('templates/footer');
    }
}

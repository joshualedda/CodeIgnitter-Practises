<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PhoneBook extends CI_Controller
{

	public function index()
	{
		$data['contacts'] = $this->ContactModel->getContact();

		$this->load->view('templates/header');
		$this->load->view('templates/alert');
		$this->load->view('phonebook/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->view('templates/header');
		$this->load->view('phonebook/create');
		$this->load->view('templates/footer');
	}

	public function process()
	{
		if ($this->input->post()) {
			if ($this->input->post('submit')) {
				$this->store();
				$this->update();
			} else {
				return false;
			}
		}
	}

	public function store()
	{
		$this->load->library('form_validation');
		$this->load->helper('security');

		$this->form_validation->set_rules('name', 'Name', 'required|callback_alpha_only');
		$this->form_validation->set_rules('contact', 'Contact', 'required|numeric|exact_length[11]');

		if ($this->form_validation->run() == false) {
			$this->create();
		} else {
			$name = $this->input->post('name');
			$contact = $this->input->post('contact');

			$this->load->model('ContactModel');

			$result = $this->ContactModel->addContact($name, $contact);
			if ($result) {
				$this->session->set_flashdata('success', 'Contact added successfully.');
			} else {
				$this->session->set_flashdata('error', 'Failed to add contact. Please try again.');
			}

			redirect('phonebook');
		}
	}

	public function view($contactId) 
	{
		$data['contact'] = $this->ContactModel->getContactById($contactId);
		$this->load->view('templates/header');
		$this->load->view('phonebook/view', $data);
		$this->load->view('templates/footer');
	}

	public function edit($contactId) 
	{
		$data['contact'] = $this->ContactModel->getContactById($contactId);
		$this->load->view('templates/header');
		$this->load->view('phonebook/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update() 
	{
		$this->load->library('form_validation');
		$this->load->helper('security');
	
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required|numeric');
		$this->form_validation->set_rules('id', 'ID', 'required|numeric');
	
		if ($this->form_validation->run() == false) {
			$id = $this->input->post('id');
			redirect("phonebook/edit/$id");
		} else {
			$id = $this->input->post('id');
			$name = $this->security->xss_clean($this->input->post('name'));
			$contact = $this->security->xss_clean($this->input->post('contact'));
	
			$this->load->model('ContactModel');
	
			$result = $this->ContactModel->updateContact($id, $name, $contact);
			if ($result) {
				$this->session->set_flashdata('success', 'Contact updated successfully.');
			} else {
				$this->session->set_flashdata('error', 'Failed to update contact. Please try again.');
			}
			redirect('phonebook');
		}
	}
	
	//destroy
	public function destroy($contactId) {
		$this->ContactModel->deleteContact($contactId);
		$this->session->set_flashdata('success', 'Bookmark deleted successfully.');
		redirect('phonebook');
	}


	
}

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmark extends CI_Controller {

	public function index() 
	{
		$data['bookmarks'] = $this->BookmarkModel->getBookmark();

		$this->load->view('templates/header');
		$this->load->view('templates/alert');
		$this->load->view('book/index', $data);
		$this->load->view('templates/footer');
	}

	public function delete($bookmarkId) {
		$data['bookmark'] = $this->BookmarkModel->getBookmarkById($bookmarkId);

		$this->load->view('templates/header');
		$this->load->view('book/view', $data);
		$this->load->view('templates/footer');
	}

	public function destroy($bookmarkId) {
		$this->BookmarkModel->deleteBookmark($bookmarkId);
		$this->session->set_flashdata('success', 'Bookmark deleted successfully.');
		redirect('bookmark');
	}
	
	public function addBookMark() {
		$this->load->view('templates/header');
		$this->load->view('book/add');
		$this->load->view('templates/footer');
	}

	public function process()
	{
		if ($this->input->post()) {
			if ($this->input->post('submit')) {
				$this->createBookMark();
			} else {
				return false;
			}
		}
	}

	public function createBookMark() {
		$this->load->library('form_validation');
		$this->load->helper('security');
	
		$this->form_validation->set_rules('folder', 'Folder', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required|valid_url');
	
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header');
			$this->load->view('book/add');
			$this->load->view('templates/footer');
		} else {
			$folder = $this->security->xss_clean($this->input->post('folder'));
			$name = $this->security->xss_clean($this->input->post('name'));
			$url = $this->security->xss_clean($this->input->post('url'));
	
			$this->load->model('BookmarkModel');
			$result = $this->BookmarkModel->addBookmark($folder, $name, $url);
			if ($result) {
				$this->session->set_flashdata('success', 'Bookmark added successfully.');
				redirect('bookmark');
			} else {
				echo "Failed to add bookmark. Please try again.";
			}
		}
	}

}

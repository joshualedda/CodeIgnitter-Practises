<?php 

class BookmarkModel extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	public function getBookmark() {
		$query =  $this->db->get('bookmark');
		return $query->result_array();
	}

	public function getBookmarkById($bookmarkId) {
        $query = $this->db->get_where('bookmark', array('id' => $bookmarkId));
        return $query->row_array();
    }

	public function deleteBookmark($bookmarkId) {
		$this->db->where('id', $bookmarkId);
		$this->db->delete('bookmark');
	}
	
	//add
	public function addBookmark($folder, $name, $url) {
        $data = array(
            'folder' => $folder,
            'name' => $name,
            'url' => $url
        );

        $this->db->insert('bookmark', $data);

        return ($this->db->affected_rows() > 0);
    }
}

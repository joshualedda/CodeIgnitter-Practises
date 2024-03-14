<?php 

class ContactModel extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	public function getContact() {
		$query =  $this->db->get('contact');
		return $query->result_array();
	}

	public function getContactById($contactId) {
        $query = $this->db->get_where('contact', array('id' => $contactId));
        return $query->row_array();
    }

	public function deleteContact($contactId) {
		$this->db->where('id', $contactId);
		$this->db->delete('contact');
	}
	
	//add
	public function addContact($name, $contact) {
        $data = array(
            'name' => $name,
            'contact' => $contact
        );

        $this->db->insert('contact', $data);

        return ($this->db->affected_rows() > 0);
    }

	//update
	public function updateContact($id, $name, $contact) {
        $data = array(
            'name' => $name,
            'contact' => $contact
        );
        $this->db->where('id', $id);
        return $this->db->update('contact', $data); 
    }
}

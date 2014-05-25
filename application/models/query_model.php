<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Query_model extends CI_Model {
    
//    var $title   = '';
//    var $content = '';
//    var $date    = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
//        $this->load->database();
    }
    
    function get_last_ten_entries()
    {
//        $query = $this->db->get('entries', 10);
//        return $query->result();
    }

    function insert_entry()
    {  
        $first_name = $this->input->post('firstname');
        $middle_name = $this->input->post('middlename');
        $last_name = $this->input->post('lastname');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('number');
        
        $new_contact = $this->db->query("INSERT INTO contacts 
                                        (first_name, middle_name, last_name, address, phone_number) 
                                         VALUES 
                                        (".$this->db->escape($first_name).", 
                                         ".$this->db->escape($middle_name).", 
                                         ".$this->db->escape($last_name).", 
                                         ".$this->db->escape($address).", 
                                         ".$this->db->escape($phone_number).")
                                        ");
        
        return $new_contact;
    }

    function update_entry($id)
    {
        $first_name = $this->input->post('firstname');
        $middle_name = $this->input->post('middlename');
        $last_name = $this->input->post('lastname');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('number');        
        
        $edit_contact = $this->db->query("UPDATE contacts SET
                                            first_name = ".$this->db->escape($first_name).",
                                            middle_name = ".$this->db->escape($middle_name).",
                                            last_name = ".$this->db->escape($last_name).",
                                            address = ".$this->db->escape($address).",
                                            phone_number = ".$this->db->escape($phone_number)."
                                         WHERE id = ".$id."
                                        ");
        return $edit_contact;
    }
    
    function get_contacts() {
        $contacts = $this->db->query("SELECT id, last_name, first_name, middle_name, address, phone_number FROM contacts ORDER BY last_name ASC");               
        return $contacts->result_array();
    }
    
    function get_selected_contact($id) {
        $contact = $this->db->query("SELECT id, last_name, first_name, middle_name, address, phone_number FROM contacts WHERE id = ".$id."");               
        return $contact->row_array();
    }
    
    function delete_contact($id) {
        $del = $this->db->query("DELETE FROM contacts WHERE id = '".$id."'");
        return $del;
    }

}

/* End of file query_model.php */
/* Location: ./application/models/query_model.php */
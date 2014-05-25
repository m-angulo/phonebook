<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
            $this->load->model('query_model');
        }
    
	public function index()
	{
//		$this->load->view('welcome_message');
            echo 'jello';
	}
        
        public function contact_list() {            
            $list = $this->query_model->get_contacts();
            $data['contacts'] = $list;              
            $this->load->view('contact_list', $data);                 
        }
        
        public function contact_form() {  
            $this->load->view('contact_form');    
        }
        
        public function contact_form_edit($id) {             
            $select = $this->query_model->get_selected_contact($id);
            $data['contact'] = $select;
            $this->load->view('contact_form_edit', $data);    
        }
        
        public function save() {
            $this->query_model->insert_entry();
            echo 'New contact has been successfully saved!';
            $this->contact_list();
        }
        
        public function edit($id) {            
            $this->query_model->update_entry($id);
            echo 'Contact has been successfully updated!';
            $this->contact_list();
        }
        
        public function delete($id) {
            $this->query_model->delete_contact($id);
            echo 'Contact has been deleted';
            $this->contact_list();
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
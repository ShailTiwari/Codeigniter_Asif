<?php
class Mod_admin extends CI_Model {

	public function __construct() {

		parent::__construct();
		$this->load->database();
	}

	public function get_admin_by_username($u) {
         
         $this->db->where('username', $u);
         $obj=$this->db->get('login');
         return $obj;

	}
	public function get_user($useremail) {
         
         $this->db->where('email', $useremail);
         $obj=$this->db->get('admin');
         return $obj;

	}
	public function get_view() {
         
         $obj=$this->db->query('SELECT id,username,email,password,address,date_format(dob,"%d/%m/%Y") as dob,city,gender,image,status FROM admin');
         if ($obj->num_rows() > 0) {
            return $obj->result();
        } else {
            return false;
        }

	}

}

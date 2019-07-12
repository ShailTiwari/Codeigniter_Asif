<?php
/**
* @ Mohd Asif 
*/
class API extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->Model('mod_admin');


	}

    function index() {
         
        // if ($this->input->post('submit')) {
        	
        	$u=$this->input->post('username');
        	$p=$this->input->post('password');
            $obj=$this->mod_admin->get_admin_by_username($u);
            if ($obj->num_rows()==1) 
            {
            	$data=$obj->row_array();
                 echo json_encode($data);
                // if ($data['password']==$p) 
                // {
                //  echo "You are Login";
                // }else{
             //        echo "Invalid Password";
             //    }
                
            }
            // else
            //  {
            //      echo "Invalid UserName & Password";
            // }
        // }
		// $this->load->view('admin/admin_view');
        // echo "API Page";
	}

    function register(){

        $hdn_id=$this->input->post('hdn_id');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $address=$this->input->post('address');
        $email=$this->input->post('email');
        $dob=$this->input->post('dob');
        $city=$this->input->post('city');
        $gender=$this->input->post('gender');
        $ckb1=$this->input->post('ckb1');
        if (isset($ckb1)) {
            $ckb1_val = 1;
        }else{
            $ckb1_val = 0;
        }

          $data["username"] = $username;
          $data["email"] = $email;
          $data["password"] = $password;
          $data["address"] = $address;
          $data["dob"] = $dob;
          $data["city"] = $city;
          $data["gender"] = $gender;
          $data["status"] = $ckb1_val;

          if ($hdn_id == "") {

              $msg=$this->db->insert('admin',$data);
              echo json_encode($msg);
          }
          
    }

    function logout() {   
       $res=$this->session->sess_destroy();
       echo json_encode($res);
    }

}
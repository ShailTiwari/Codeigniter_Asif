<?php
/**
* @ Mohd Asif 
*/
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('mod_admin');


	}
    public function backdoor() {

        if (! $this->session->userdata('admin_backdoor')) 
            redirect('admin');
    }
        function dash() {
        $this->backdoor();
        $pagedata=array('pagename'=>'admin/dash', 'title'=>'Dashboard');
        $this->load->view('layout', $pagedata);
        $this->backdoor();
    }
    public function index(){
        $data["title"] = "Login";
        $this->load->view('local_view',$data);
    }

    public function AdminLogin() {
         
        if ($this->input->post('submit')) {
        	
        	$u=$this->input->post('username');
        	$p=$this->input->post('password');
            $obj=$this->mod_admin->get_admin_by_username($u);
            if ($obj->num_rows()==1) 
            {
            	$data=$obj->row_array();
            	if ($data['password']==$p) 
            	{
            		$this->session->set_userdata('admin_backdoor', true);
            		redirect('admin/dash');
            	}
            	else 
            	{
            		$this->session->set_flashdata('msg', 'This Password Is Invalid');
            		redirect('admin/AdminLogin');
            	}
            }
            else
             {

                 $this->session->set_flashdata('msg', 'This Username & Password is Invalid');
                 redirect('admin/AdminLogin');
            }
        }
         
		$this->load->view('admin/admin_view');
	}
    public function UserLogin(){
        if ($this->input->post('submit')) {
           $useremail = $this->input->post('useremail');
           $password = $this->input->post('password');
           $obj=$this->mod_admin->get_user($useremail);
           if ($obj->num_rows()==1) {
                 $data=$obj->row_array();
               if ($data['password']==$password) {

                  $this->session->set_userdata('admin_backdoor', true);
                  redirect('home');

               }else{

                  $this->session->set_flashdata('msg', 'This Password Is Invalid');
                  redirect('admin/UserLogin');
               }
           }else{

              $this->session->set_flashdata('msg', 'This EmailID & Password is Invalid');
                 redirect('admin/UserLogin');

           }

        }
        $this->load->view('admin/user_view');
    }

	public function Save_Student(){
		$hdn_id=$this->input->post('hdn_id');
		$username=$this->input->post('username');
		$useremail=$this->input->post('useremail');
		$userpassword=$this->input->post('userpassword');
		$cpassword=$this->input->post('cpassword');
		$address=$this->input->post('address');
		$dob=$this->input->post('dob');
        // print_r($dob);die;
        // $d = explode('/', $dob[0]);
        // $dob_Date = $d[2]."-".$d[1]."-".$d[0]; 
		$city=$this->input->post('city');
		$gender=$this->input->post('gender');
		$chk_status = $this->input->post('chk_status');
        if(isset($chk_status)){
            $chk_val = 1;
        } else {
            $chk_val = 0;
        }
		// $image=$this->input->post('image');


        $data["username"] = $username;
        $data["email"] = $useremail;
        $data["password"] = $userpassword;
        $data["address"] = $address;
        $data["dob"] = $dob;
        $data["city"] = $city;
        $data["gender"] = $gender;
        $data["status"] = $chk_val;

        if ($hdn_id == "") {
            // echo "insert";
        	$this->db->insert('admin',$data);
        }else{
            // echo "update";
            $this->db->where('id',$id);
            $this->db->update('admin',$data);
        }  
        redirect('admin/dash');      
	}
    
    public function add_student()
    {    $this->backdoor();
         $pagedata=array('pagename'=>'admin/add_student', 'title'=>'Add Student');
         $this->load->view('layout', $pagedata);
    }
    public function view_student()
    {    $this->backdoor();
         $pagedata['res']=$this->mod_admin->get_view();
         $pagedata["title"] = "View Student";
         $pagedata['pagename'] = 'admin/view_student';
         // print_r($pagedata);die;
         // $pagedata=array('pagename'=>'admin/view_student', 'title'=>'View Student' ,'result'=>'data');
         $this->load->view('layout', $pagedata);
    }
    public function about()
    {    $this->backdoor();
         $pagedata=array('pagename'=>'admin/about', 'title'=>'About');
        $this->load->view('layout', $pagedata);
    }
    public function team()
    {    $this->backdoor();
         $pagedata=array('pagename'=>'admin/team', 'title'=>'Team');
        $this->load->view('layout', $pagedata);
    }
    public function contact()
    {    $this->backdoor();
         $pagedata=array('pagename'=>'admin/contact', 'title'=>'Contact');
        $this->load->view('layout', $pagedata);
    }
    public function logout()
    {   
       $this->session->sess_destroy();
       redirect('admin');
    }
}
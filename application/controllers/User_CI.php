<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_CI extends CI_Controller {

        // public function user(){
        //     $this->load->view('add_user');
        // }

        public function __construct()
         {
            parent::__construct();
            $this->load->database();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->load->model('User_model');
            $this->form_validation->set_rules('first_name','First name','required');
            $this->form_validation->set_rules('last_name','Last name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('phone_no','Phone','required');
            $this->form_validation->set_rules('street_address','Address','required');
            $this->form_validation->set_rules('pincode','Pincode','required');
    
         }
   
            function viewuser()
                {		
                $this->load->model('User_model'); //obj
                $email=$this->session->userdata('email');
                $where=array("email"=>$email);
                $fetch=$this->User_model->select_where('user',$where);
                $reg['user']=$fetch->result_array();
                $this->load->view('view_user',$reg);		
	            }



        public function edituser($Id){
            
            $this->load->model('User_model');
            $user = $this->User_model->getUser($Id);
            $data = array();
            $data['user'] = $user;
            $this->load->view('edit_user',$data);
           
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first_name','First name','required');
            $this->form_validation->set_rules('last_name','Last name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('phone_no','Phone','required');
            $this->form_validation->set_rules('street_address','Address','required');
            $this->form_validation->set_rules('pincode','Pincode','required');


            if($this->form_validation->run()=== TRUE){
                
                 //update cars record
                 $formArray = array();
                 $formArray['first_name'] = $this->input->post('first_name');
                 $formArray['last_name'] = $this->input->post('last_name');
                 $formArray['email'] = $this->input->post('email');
                 $formArray['password'] = $this->input->post('password');
                 $formArray['phone_no'] = $this->input->post('phone_no');
                 $formArray['street_address'] = $this->input->post('street_address');
                 $formArray['pincode'] = $this->input->post('pincode');
                 $this->User_model->updateUser($Id,$formArray);
                 $this->session->set_flashdata('success','Record updated successfully');
                 redirect(base_url().'index.php/User_CI/viewuser');
               
            }else {
                $this->load->view('edit_user',$data);
               
            }
        }


     

             
}

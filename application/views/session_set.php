<?php  
    $base=$this->config->item('base_url');
    // echo "yes";
    // print_r($base);
    // exit; 
    
    $email=$this->session->userdata('email');
      if($email){
      
       
      }else{
        redirect(base_url() .'index.php/Login_CI/login');
      }

     // $cookie=$this->input->set_cookie('email',$email, 30);
      //if($session_data)
      // {
      
      //     $this->input->set_cookie('admin',$email,'60');
     
?>
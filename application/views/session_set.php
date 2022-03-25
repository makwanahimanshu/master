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

     // $email=$this->session->userdata('email');
      // $cookie= $this->input->set_cookie("email",$email,60);
      // if($cookie)
      // {
       
      //   // echo "yes";
      //   //    exit;
      // }
      // else{
      //   // echo "yes";
      //   //    exit;
      // }


    //   $email=$this->session->userdata('email');
    //   $cookie=setcookie("myCookie",$email,60,"/");
    // // $cookie= $this->input->set_cookie("email","admin",60);
    //   // print_r($cookie);
    //   // exit;
    //   if($cookie)
    //   {
    //       // $this->session->unset_userdata('email');
    //       // redirect(base_url() .'index.php/Login_CI/login');
    //   }
    //   else{
    //       echo "yes";
    //       exit;
    //       //$this->session->unset_userdata('email');
    //       //redirect(base_url() .'index.php/Login_CI/login');
    //   }
?>
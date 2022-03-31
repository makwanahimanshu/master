<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_CI extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->model('Brand_model');

        // $this->form_validation->set_rules('image','Image','required');
		// $category= $this->Brand_model->cat();
		// $data = array();
    	// $data['category'] = $category;
	}
  

        public function viewbrand(){

            $this->load->model('Brand_model');
            $brand = $this->Brand_model->all();
            $data = array();
            $data['brand'] = $brand;
            $this->load->view('view_brand',$data);
        }

             public function create(){
           
                $category= $this->Brand_model->cat();
                $data = array();
                $data['category'] = $category;
                $this->load->view('add_brand',$data);
             }


             public function create1(){

                $this->form_validation->set_rules('brand_name','brand_name','required');
                if($this->form_validation->run() === TRUE)
                    {
                            if(isset($_POST['save'])){ 
                                $this->Brand_model->create1($_POST);
                                $this->session->set_flashdata('sucess','yes');
                                redirect(base_url().'index.php/Brand_CI/viewbrand');  ;
                                alert("data  inserted");
                            }
                            else{
                                echo "no yes<pre>";
                            
                            }
                        }
                        else{
                            echo "no";
                            $this->load->view('add_brand');
                        }
                        
                    
                    }

            	

	   

   

        // public function editBrand($Id){
        //     $this->load->model('Brand_model');
        //     $brand = $this->Brand_model->getBrand($Id);
        //     $data = array();
        //     $data['brand'] = $brand;

        //     $this->form_validation->set_rules('brand_name','Brand name','required');

        //     if($this->form_validation->run()== false){

        //         $this->load->view('edit_brand',$data);
        //     }else {
        //         //update cars record
        //         $formArray = array();
        //         $formArray['brand_name'] = $this->input->post('brand_name');
        //         $this->Brand_model->updateBrand($Id,$formArray);
        //         $this->session->set_flashdata('success','Record updated successfully');
        //         redirect(base_url().'index.php/Brand_CI/viewbrand');
        //     }
        // }


        public function deleteBrand($Id){
            $this->load->model('Brand_model');
            $brand = $this->Brand_model->getBrand($Id);
            if(empty($brand)){
                $this->session->set_flashdata('failure','Record not found in database');
                redirect(base_url().'index.php/Brand_CI/viewbrand');
            }

            $this->Brand_model->deleteBrand($Id);
            $this->session->set_flashdata('success','Record deleted successfully');
            redirect(base_url().'index.php/Brand_CI/viewbrand');
            }
  
}
          


      

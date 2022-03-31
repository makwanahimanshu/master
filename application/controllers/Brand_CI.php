<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_CI extends CI_Controller {

        // public function brand(){
        //     $this->load->view('add_brand');
        // }

        public function __construct()
	    {
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
        $this->load->model('Brand_model');
        // $this->load->model('Category_model');
        $this->form_validation->set_rules('brand_name','brand_name','required');
        // $this->form_validation->set_rules('cat_name','cat_name','required');
		}


        public function viewbrand(){
         
            // echo "tables dtaa";
            // print_r($_POST);
            // exit;
            $brand = $this->Brand_model->all();
        //$category=$this->Brand_model->cat();
            $data = array();
            $data['brand'] = $brand;
       //$data['category'] = $category;
            $this->load->view('view_brand',$data);
        }

        public function create(){

            // $this->load->model('Category_model');
            // $category = $this->Category_model->getCategory($Id);
            // $data = array();
            // $data['category'] = $category;
            
            $this->load->model('Brand_model');
                $category=$this->Brand_model->cat();
                 $data = array();

                // $fetch=$this->RegisterModel->select_where('user',$where);
                // $reg['profile']=$fetch->result_array();

                //$reg['profile']=$fetch->result_array();
                $data['category'] = $category;
                 $this->load->view('add_brand',$data);



                 $this->load->library('form_validation');

                 $this->form_validation->set_rules('brand_name','brand_name','required');
                 $this->form_validation->set_rules('cat_name','cat_name','required');       

          if($this->form_validation->run() === TRUE){
             
            // $this->load->model('Brand_model');
            // $category=$this->Brand_model->cat();
            // $data = array();
         
            // $data['category'] = $category;

            // $formArray = array();
            // $category=$this->Brand_model->cat();
            // $data = array();
            
            // $data['category'] = $category;
            // $this->load->view('add_brand',$data);
             
            $formArray['brand_name'] = $this->input->post('brand_name');
           $formArray['cat_name'] = $this->input->post('cat_name');
            $this->Brand_model->create($formArray); 

            // print_r($_POST);
            // exit;
          //   $this->Category_model->create($formArray); 
           redirect(base_url().'index.php/Brand_CI/viewbrand'); 
          } else {


            
       

            $this->load->view('add_brand');

             

             
            }  
    
      }


        public function editBrand($Id){
            $brand = $this->Brand_model->getBrand($Id);
            $data = array();
            $data['brand'] = $brand;

            $this->form_validation->set_rules('brand_name','Brand name','required');

            if($this->form_validation->run()== false){

                $this->load->view('edit_brand',$data);
            }else {
                //update cars record
                $formArray = array();
                $formArray['brand_name'] = $this->input->post('brand_name');
                $this->Brand_model->updateBrand($Id,$formArray);
                $this->session->set_flashdata('success','Record updated successfully');
                redirect(base_url().'index.php/Brand_CI/viewbrand');
            }
        }


        public function deleteBrand($Id){
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
          


      

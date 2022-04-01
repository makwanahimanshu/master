<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_CI extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
      
      
		
 
	}

        public function viewproduct(){
            $this->load->model('Product_model');
            $product = $this->Product_model->all();
            $data = array();
            $data['product'] = $product;
            $this->load->view('view_product',$data);
        }
        public function create(){
           



            $this->load->model('Product_model');
            $brand = array();
            $brand = $this->Product_model->brand();
            $data = array();
            $data['brand'] = $brand;
           
            $this->load->view('add_product',$data);
         }


        public function create1(){

               
            // echo "hy<pre>";
            // print_r($_POST);
            // exit;

            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('pro_name','pro_name','required');
            $this->form_validation->set_rules('image','Image','required');
            $this->form_validation->set_rules('discription','Discription','required');
            $this->form_validation->set_rules('ram','RAM','required');
            $this->form_validation->set_rules('memory','Memory','required');
            $this->form_validation->set_rules('stock','Stock','required');
            $this->form_validation->set_rules('price','Price','required');



            if($this->form_validation->run() === TRUE)
            {
                if(isset($_POST['save'])){ 
                    
               

                    $this->load->model('Product_model');
                        $this->Product_model->create($_POST);
                        $this->session->set_flashdata('sucess','yes');
                        redirect(base_url().'index.php/Product_CI/viewproduct'); 
                        alert("data  inserted");
                    }
                
                else{
                    echo "no yes<pre>";
                
                }
                   
            }
            else{
                    // echo "<pre>";
                    //                 print_r($_POST);
                    //                 exit;
                    
                    $this->load->view('add_product.php');
            }
                
            
            }



            public function editProduct($Id){


                $this->load->model('Product_model');
                $brand = array();
                $brand = $this->Product_model->brand();
                $data = array();
                $data['brand'] = $brand;
               
               
                $product = $this->Product_model->getProduct($Id);
               
                $data['product'] = $product;

            $this->form_validation->set_rules('pro_name','Pro name','required');
            $this->form_validation->set_rules('image','Image','required');
            $this->form_validation->set_rules('discription','Discription','required');
            $this->form_validation->set_rules('ram','RAM','required');
            $this->form_validation->set_rules('memory','Memory','required');
            $this->form_validation->set_rules('stock','Stock','required');
            $this->form_validation->set_rules('price','Price','required');

                if($this->form_validation->run()=== TRUE){

                    
                    

                     //update product record
                     $formArray = array();
                     $formArray['pro_name'] = $this->input->post('pro_name');
                     $formArray['image'] = $this->input->post('image');
                     $formArray['discription'] = $this->input->post('discription');
                     $formArray['ram'] = $this->input->post('ram');
                     $formArray['memory'] = $this->input->post('memory');
                     $formArray['stock'] = $this->input->post('stock');
                     $formArray['price'] = $this->input->post('price');
                     $formArray['brand_id'] = $this->input->post('brand_id');
                     $this->Product_model->updateProduct($Id,$formArray);

                    //  echo "<pre>";
                    //  print_r($formArray);
                    //  exit;
                     $this->session->set_flashdata('success','Record updated successfully');
                     redirect(base_url().'index.php/Product_CI/viewproduct');
                    
                }else {
<<<<<<< HEAD
                    // echo "<pre>";
                    // print_r("$_POST");
                    // exit;

                    //update product record
                    $formArray = array();
                    $formArray['image'] = $this->input->post('image');
                    $formArray['discription'] = $this->input->post('discription');
                    $formArray['ram'] = $this->input->post('ram');
                    $formArray['memory'] = $this->input->post('memory');
                    $formArray['stock'] = $this->input->post('stock');
                    $formArray['price'] = $this->input->post('price');
                    $this->Product_model->updateProduct($Id,$formArray);
                   
                    $this->session->set_flashdata('success','Record updated successfully');
                    redirect(base_url().'index.php/Product_CI/viewproduct');
=======
                 

                    $this->load->view('edit_product',$data);

                   
>>>>>>> 02278d84013f9afbfe03b8ef3c30d65c1e12624e
                }
            }

           
                
                

            public function deleteProduct($Id){

                $this->load->model('Product_model');
                $product1 = $this->Product_model->getProduct($Id);
                if(empty($product1)){
                    $this->session->set_flashdata('failure','Record not found in database');
                    redirect(base_url().'index.php/Product_CI/viewproduct');
                }


                $this->Product_model->deleteProduct($Id);
              
                $this->session->set_flashdata('success','Record deleted successfully');
                redirect(base_url().'index.php/Product_CI/viewproduct');
                }
               
    
    }
        ?>
        

      
        

      
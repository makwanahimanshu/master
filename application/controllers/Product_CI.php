<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_CI extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
        $this->load->model('Product_model');
        $this->form_validation->set_rules('image','Image','required');
        $this->form_validation->set_rules('discription','Discription','required');
        $this->form_validation->set_rules('ram','RAM','required');
        $this->form_validation->set_rules('memory','Memory','required');
        $this->form_validation->set_rules('stock','Stock','required');
        $this->form_validation->set_rules('price','Price','required');
		
 
	}

        public function viewproduct(){
           
            $product = $this->Product_model->all();
            $data = array();
            $data['product'] = $product;
            $this->load->view('view_product',$data);
        }



        public function create(){
            // echo "hy<pre>";
            // print_r($_POST);
            // exit;
            if($this->form_validation->run() === TRUE)
            {
                if(isset($_POST['save'])){ 
                                // echo "<pre>";
                                //  print_r($_POST);
                                //  exit;
                    
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
                    $this->load->view('add_product.php');
                }
                
            
            }



            public function editProduct($Id){
               
                $product = $this->Product_model->getProduct($Id);
                $data = array();
                $data['product'] = $product;

                if($this->form_validation->run()== false){

                    $this->load->view('edit_product',$data);
                }else {
                    echo "<pre>";
                    print_r("$_POST");
                    exit;

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
                }
            }


            public function deleteProduct($Id){
             
                $product = $this->Product_model->getProduct($Id);
                if(empty($product)){
                    $this->session->set_flashdata('failure','Record not found in database');
                    redirect(base_url().'index.php/Product_CI/viewproduct');
                }

                $this->Product_model->deleteProduct($Id);
                $this->session->set_flashdata('success','Record deleted successfully');
                redirect(base_url().'index.php/Product_CI/viewproduct');
                }
    
    
    
    }
        ?>
        

      
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_CI extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
		$this->load->library('form_validation');
		
 
	}

        // public function product(){
        //     $this->load->view('add_product');
        // }

        public function viewproduct(){
            $this->load->model('Product_model');
            $product = $this->Product_model->all();
            $data = array();
            $data['product'] = $product;
            $this->load->view('view_product',$data);
        }



        public function create(){
            // echo "hy<pre>";
            // print_r($_POST);
            // exit;
            $this->load->model('Product_model');
            $this->form_validation->set_rules('image','Image','required');
            $this->form_validation->set_rules('discription','Discription','required');
            $this->form_validation->set_rules('ram','RAM','required');
            $this->form_validation->set_rules('memory','Memory','required');
            $this->form_validation->set_rules('stock','Stock','required');
            $this->form_validation->set_rules('price','Price','required');
           
          
            if($this->form_validation->run() == false){
                
                 $this->load->view('add_product');
            } else {
                $formArray = array();
                $formArray['image'] = $this->input->post('image');
                $formArray['discription'] = $this->input->post('discription');
                $formArray['ram'] = $this->input->post('ram');
                $formArray['memory'] = $this->input->post('memory');
                $formArray['stock'] = $this->input->post('stock');
                $formArray['price'] = $this->input->post('price');
                $this->Product_model->create($formArray); 
              redirect(base_url().'index.php/Product_CI/viewproduct'); 
              }  
      
        }



      




        // SELECT brand_name,cat_name,brand_id FROM `brand` INNER JOIN `category` ON brand.cat_id = category.cat_id;


	// public function image(){
		
	// 	$this->load->helper('url');
	  
	// 	// Check form submit or not 
	// 	if($this->input->post('save') != NULL ){ 
	// 	   $data = array(); 
	// 	   if(!empty($_FILES['file']['name'])){ 
	// 		  // Set preference 
	// 		  $config['upload_path'] = 'uploads/'; 
	// 		  $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
	// 		  $config['max_size'] = '100'; // max_size in kb 
	// 		  $config['file_name'] = $_FILES['file']['name']; 
	 
	// 		  // Load upload library 
	// 		  $this->load->library('save',$config); 
		
	// 		  // File upload    
	// 		  if($this->save->do_upload('file')){ 
	// 			 // Get data about the file
	// 			 $uploadData = $this->save->data(); 
	// 			 $filename = $uploadData['file_name']; 
	// 			 $data['response'] = 'successfully uploaded '.$filename; 
	// 		  }else{ 
	// 			 $data['response'] = 'failed'; 
	// 		  } 
	// 	   }else{ 
	// 		  $data['response'] = 'failed'; 
	// 	   } 
	// 	   // load view 
	// 	   $this->load->view('viewproduct',$data); 
	// 	}else{
	// 	   // load view 
	// 	   $this->load->view('viewproduct'); 
	// 	} 
	//   }


}
?>

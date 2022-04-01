<?php
class Product_model extends CI_model{
   
   public function create()
    {
        $formArray=array();
        $formArray=array(
            "pro_name" => $this->input->post('pro_name'),
            "image" => $this->input->post('image'),
            "discription" => $this->input->post('discription'),
            "ram" => $this->input->post('ram'),
            "memory" => $this->input->post('memory'),
            "stock" => $this->input->post('stock'),
            "price" => $this->input->post('price'),
            "brand_id" => $this->input->post('brand_id'),
                
        );
       $this->db->insert('product',$formArray); 
    //    echo "<pre>";
    //    print_r($_POST);
    //    exit;
    }


    // public function create($data)
    // {
    //             $formArray = array();
    //             $formArray=array(
    //                 "image" => $this->input->post('image'),
    //                 "discription" => $this->input->post('discription'),
    //                 "ram" => $this->input->post('ram'),
    //                 "memory" => $this->input->post('memory'),
    //                 "stock" => $this->input->post('stock'),
    //                 "price" => $this->input->post('price')  
    //             );

    //           $this->db->insert('product_details',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    // }

    public function all(){
    
        $this->db->select('pro_id,pro_name,image,discription,RAM,memory,stock,price,brand_name');
        $this->db->from('product');
        $this->db->join('brand', 'product.brand_id = brand.brand_id');
         return $product  = $this->db->get()->result_array();
       
    }

//Show Brand Details
    public function brand(){
        
        $this->db->select('*');
        $this->db->from('brand');
        return $brand = $this->db->get()->result_array(); 
        // echo "<pre>";
        // print_r($brand);
        // exit;
        
    }
// Show Product  
    public function getProduct($Id){
        $this->db->where('pro_id',$Id);
        return $product = $this->db->get('product')->row_array(); 
        //  echo "<pre>";
        // print_r($product);
        // exit;
    }
//Update Product
    public function updateProduct($Id,$formArray){
        $this->db->where('pro_id',$Id);
        $this->db->update('product',$formArray); 
        
    }

    public function deleteProduct($Id){
        $this->db->where('pro_id',$Id);
        $this->db->delete('product'); 
     
    }
  

}
?>
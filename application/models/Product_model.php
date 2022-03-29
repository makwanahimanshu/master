<?php
class Product_model extends CI_model{
   
   public function create()
    {
        $formArray=array();
        $formArray=array(
            "image" => $this->input->post('image'),
            "discription" => $this->input->post('discription'),
            "ram" => $this->input->post('ram'),
            "memory" => $this->input->post('memory'),
            "stock" => $this->input->post('stock'),
            "price" => $this->input->post('price'),
            
            
        );
        
            // print_r($formArray);
            // exit;
              
       $this->db->insert('product_details',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    }


    // function create()
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
        
        $this->db->select('pro_details_id,pro_name,image,discription,RAM,memory,stock,price');
        $this->db->from('product_details');
       $this->db->join('product', 'product_details.pro_id = product.pro_id');
       // $this->db->join('brand', 'product.brand_id = brand.brand_name');
        return $product  = $this->db->get()->result_array();

        // return $product= $this->db->get('product_details')->result_array(); //SELECT *FORM users;
       
    }
    
    public function getProduct($Id){
        $this->db->where('pro_details_id',$Id);
        return $product = $this->db->get('product_details')->row_array(); // select * from users where user_id = ?
    }

    public function updateProduct($Id,$formArray){
        $this->db->where('pro_details_id',$Id);
        $this->db->update('product_details',$formArray); //update users SET name = ? , email = ? where user_id = ? 
        
    }

    public function deleteProduct($Id){
        $this->db->where('pro_details_id',$Id);
        $this->db->delete('product_details'); // DELETE FROM users Where user_id = ?
    }

}
?>
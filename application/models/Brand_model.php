<?php
class Brand_model extends CI_model{
    function create()
    {
        // echo "hyyy<pre>";
        // print_r($formArray);
        // exit;
        // INSERT INTO `brand` (`brand_id`, `brand_name`, `cat_id`) VALUES (NULL, 'TITAN', '1');

        // $category = $this->db->get('category')->row_array();
        // $this->db->select('cat_name');
        // $this->db->from('category');
        // $category = $this->db->get()->row_array(); 


        // $this->db->select('cat_name');
        // $this->db->from('category');
        // $category = $this->db->get()->row_array(); 
        $formArray = array();
        $formArray  = array(


           
            "brand_name" =>$this->input->post('brand_name'),
            "cat_name" =>$this->input->post('cat_name'), 

        );

        $this->db->insert('brand',$formArray);
        //$this->db->insert('category',$formArray);

        // $this->db->insert('brand_name,cat_name');
        // $this->db->from('brand');
        // $this->db->join('category', 'brand.cat_id = category.cat_id');
        //  return $brand  = $this->db->get()->result_array();
        //  $this->db->insert('brand,category',$formArray);


    }
     public function cat(){

        // $this->db->where('cat_name',1);
        // return $category= $this->db->get('category')->row_array();

        // $this->db->where('cat_id');
        // return $category = $this->db->get('category')->row_array();
    //     $this->db->select('cat_name');
    // return $category = $this->db->get('category')->row_array();

        $this->db->select('cat_name');
        $this->db->from('category');
      return $category = $this->db->get()->row_array(); 
        // echo "<pre>";
        // print_r($category);
        // exit;

        // $this->db->select('cat_name');
        // $query1 = $this->db->get('category');
        // echo "jjj" ;
        // print_r($query1);
        // exit;
        // $this->db->select('*');
        // $car=$this->db->from('category');
        // echo "jjj" ;
        // print_r($car);
        // exit;
       // $this->db->where('cat_id');
        //  $category = $this->db->get('category')->row_array();
        // echo "jjj" ;
        // print_r($category);
        // exit;
        // // select * from users where user_id = ?
    }

    public function all(){
       
    // SELECT brand_name,cat_name,brand_id FROM `brand` INNER JOIN `category` ON brand.cat_id = category.cat_id;
    //this JION method to two tables
        $this->db->select('brand_id,brand_name,cat_name');
        $this->db->from('brand');
        $this->db->join('category', 'brand.cat_id = category.cat_id');
         return $brand  = $this->db->get()->result_array();

         
        //return $brand= $this->db->get('brand')->result_array(); //SELECT *FORM users;
       
    }
    
    public function getBrand($Id){
        $this->db->where('brand_id',$Id);
        return $brand = $this->db->get('brand')->row_array(); // select * from users where user_id = ?
    }

    // public function editBrand($Id,$formArray){
    //     $this->db->where('brand_id',$Id);
    //     $this->db->update('brand',$formArray); //update users SET name = ? , email = ? where user_id = ? 
        
    // }

    public function deleteBrand($Id){
        $this->db->where('brand_id',$Id);
        $this->db->delete('brand'); // DELETE FROM users Where user_id = ?
  

   // DELETE brand, category   FROM brand   INNER JOIN category ON brand.`cat_id`=category.`cat_id`    WHERE brand.`brand_id`=3;
    // $this->db->delete('brand_name,cat_name');
    // $this->db->from('brand');
    // $this->db->join('category', 'brand.cat_id = category.cat_id');
    //  return $brand  = $this->db->get()->result_array();
    }

   

}
?>
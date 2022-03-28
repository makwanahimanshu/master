<?php
class Brand_model extends CI_model{
    function create($formArray)
    {
        // echo "hyyy<pre>";
        // print_r($formArray);
        // exit;
        $this->db->insert('brand',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
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
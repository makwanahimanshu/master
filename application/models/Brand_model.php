<?php
class Brand_model extends CI_model{
    // function create($formArray)
    // {
    //     // echo "hyyy<pre>";
    //     // print_r($formArray);
    //     // exit;
    //     $this->db->insert('brand',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
       
    // }

    // public function create($formArray)
    // {
    //     $formArray=array();
    //     $formArray=array(
    //         "brand_name" => $this->input->post('brand_name'),   
    //         "cat_id" => $this->input->post('cat_id'),    
    //     );
    //    $this->db->insert('brand',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);

    // }

    public function create1()
    {
        $formArray = array();
            $formArray  = array(

                "brand_name" => $this->input->post('brand_name'),
                "cat_id" => $this->input->post('cat_id'),    

                "brand_name" => $this->input->post('brand_name'),
                "cat_id" => $this->input->post('cat_id'),    

            );
             $this->db->insert("brand",$formArray);
    }



     public function cat(){
        // $this->db->where('cat_name',$cat_name);
        $this->db->select('*');
        $this->db->from('category');
        return $category = $this->db->get()->result_array();       // select * from users where user_id = ?
        
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

    public function updateBrand($Id,$formArray){
        $this->db->where('brand_id',$Id);
        $this->db->update('brand',$formArray);
        // echo "yes<pre>";
        // print_r($_POST);
        // exit;
    }

    public function deleteBrand($Id){
        $this->db->where('brand_id',$Id);
        $this->db->delete('brand'); // DELETE FROM users Where user_id = ?
    }

   

}
?>
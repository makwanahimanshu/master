<?php
class Order_model extends CI_model{
    // function create($formArray)
    // {
    //     $this->db->insert('car_models',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    // }

    public function all(){
        return $order= $this->db->get('order_tbl')->result_array(); //SELECT *FORM users;
       
    }
    
    public function getOrder($Id){
        $this->db->where('order_id',$Id);
        return $order = $this->db->get('order_tbl')->row_array(); // select * from users where user_id = ?
    }

    public function updateOrder($Id,$formArray){
        $this->db->where('order_id',$Id);
        $this->db->update('order_tbl',$formArray); //update users SET name = ? , email = ? where user_id = ? 
        
    }

    // public function deleteCars($Id){
    //     $this->db->where('id',$Id);
    //     $this->db->delete('car_models'); // DELETE FROM users Where user_id = ?
    // }

}
?>
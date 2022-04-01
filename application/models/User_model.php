<?php
class User_model extends CI_model{
    // function create($formArray)
    // {
    //     $this->db->insert('car_models',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    // }

    // public function all1(){
       
    //     return $user= $this->db->get('user')->result_array(); //SELECT *FORM users;
       
    // }

        function select_where($tbl,$where)
	    {
        $sel=$this->db->get_where($tbl,$where);  //get_where === select where
		return $sel;
    	}
       
        public function getUser($Id){
            $this->db->where('id',$Id);
            return $user = $this->db->get('user')->row_array();     
        }
    
   
        public function updateUser($Id,$formArray){
            $this->db->where('id',$Id);
            $this->db->where('type',admin);
            $this->db->update('user',$formArray);
            //update users SET name = ? , email = ? where user_id = ? 
            
        }


    // public function deleteCars($Id){
    //     $this->db->where('id',$Id);
    //     $this->db->delete('car_models'); // DELETE FROM users Where user_id = ?
    // }



}
?>
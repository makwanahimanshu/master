<?php
class LoginModel extends CI_model{

    // function create($formArray)
    // {
    //     $this->db->insert('car_models',$formArray); //INSERT INTO users (name,email,created) values(?,?,?);
    // }

   
    public function can_login($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        
        $query = $this->db->get('user');
        //SELECT * FROM  USER WHERE EAIL = $EMAIL AND PASSWORD =$PASSWORD

        if($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }

    }

}
?>
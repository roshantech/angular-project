<?php
class Auth_model extends CI_Model{
    public function create($formArray){
        $this->db->insert('users' , $formArray);
    }

    public function can_login(){
       $this->db->where('username',$username);
       $this->db->where('password',$password);
       $query = $this->db->get('users');

       if($query = num_rows() > 0){
            return true;
       }
       else{
            return false;
       }

    }

}

?>
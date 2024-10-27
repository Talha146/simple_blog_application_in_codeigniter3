<?php 
class User_model extends CI_model
{

    function doLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('users');
        // SELECT * FROM users WHERE username = ? AND password = ?
        $user = $query->row_array();
        return $user;
    }

}
?>
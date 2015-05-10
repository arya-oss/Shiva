<?php
Class User extends CI_Model
{
  function login($username, $password)
  {
    $this -> db -> select('user_name, pass_word, email');
    $this -> db -> from('users');
    $this -> db -> where('user_name', $username);
    $this -> db -> where('pass_word', $password);
    $this -> db -> limit(1);
 
    $query = $this -> db -> get();
 
    if($query -> num_rows() == 1){
        return $query->result();
    }
    else {
      return false;
    }
  }
}
?> 
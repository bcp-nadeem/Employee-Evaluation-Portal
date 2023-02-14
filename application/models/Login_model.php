<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

    public function checkauthLogin($username, $password){
        $result = $this->db->where(['admin_username'=>$username, 'admin_password'=>$password])
        ->get('admin_table');

        if($result){
            return $result->row()->admin_id;
        }else{
            return false;
        }
    }

}
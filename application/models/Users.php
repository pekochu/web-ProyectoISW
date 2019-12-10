<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Users extends CI_Model{

    function matchUsuario($username){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $username);
        $this->db->limit(1);

        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row_array() : false;
    }

    function updateUsuario($id, $data){
        $this->db->where('id_user', $id);
        $this->db->update('users', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
?>
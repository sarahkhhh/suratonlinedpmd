<?php 

    class UserModel extends CI_Model{

        function getUserData($idUser){
            return $this->db->get_where("user", ["id_user" => $idUser])->row_array();
        }
    }

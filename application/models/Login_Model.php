<?php

    class Login_Model extends CI_Model
    {
        public function login($username, $password)
        {
            
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            

            $query = $this->db->get('aa_user');

            if ($query->num_rows() > 0) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

?>
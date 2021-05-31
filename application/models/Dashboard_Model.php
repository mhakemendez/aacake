<?php

    class Dashboard_Model extends CI_Model
    {
        public function fetch()
        {
           return $this->db->get('gallery')->result();
        }
    }

 ?>
<?php

    class Product_Model extends CI_Model
    {
       
        function save_upload($product){

            $result= $this->db->insert('product_table',$product);
            return $result;
        }
    }
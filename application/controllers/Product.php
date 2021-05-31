<?php

    class Product extends CI_Controller
    
    {

        function __construct(){
            parent::__construct();
            $this->load->model('product_model');
            $this->load->helper('form');
            $this->load->library('form_validation');
            
            
            

        }
        
        public function index()
        
        {

            $this->load->view('dashboard/dashboard-header');
            $this->load->view('product');
            $this->load->view('dashboard/dashboard-footer');
        }

        public function add()

        {

                $this->form_validation->set_rules('product_name', 'Product Name', 'required');
                $this->form_validation->set_rules('product_price', 'Product Price', 'required');
                $this->form_validation->set_rules('product_desc', 'Product Description', 'required');
                

                if ($this->form_validation->run() == false) {
                    $data = array(
                        'response'      =>      'error',
                        'message'       =>      'There is something wrong',
                        'product_name'       =>      form_error('product_name'),
                        'product_price'       =>      form_error('product_price'),
                        'product_desc'       =>      form_error('product_desc')
                        
                    );
                }else {

                    $config['upload_path']="./assets/images";
                    $config['allowed_types']='gif|jpg|png';
                    $config['encrypt_name'] = TRUE;

                    $this->load->library('upload',$config);
                    
                    if  ($this->upload->do_upload("product_image")) {

                            $image = array('upload_data' => $this->upload->data());

                            $productName    =   $this->input->post('product_name');
                            $productPrice   =   $this->input->post('product_price'); 
                            $productDesc    =   $this->input->post('product_desc');
                            $prorductImage  = $image['upload_data']['file_name'];
                            
                            $product = array(

                                'product_name'          =>      $productName,       
                                'product_price'         =>      $productPrice,       
                                'product_description'   =>      $productDesc,       
                                'image'                 =>      $prorductImage       

                            );

                            if ($this->product_model->save_upload($product)) {

                                $data = array(
                                    'response'      =>      'success',
                                    'message'       =>      'Added New Product'
                                );
                                
                            }else {
                                $data = array(
                                    'response'      =>      'error',
                                    'message'       =>      'There is something wrong');
                            }

                            
                            $error = array('error' => $this->upload->display_errors());
                    
                    
                    
                   
                }

            }
                
            
            echo json_encode($data);
            
        
    }

    }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/94950918d7.js" crossorigin="anonymous"></script>

    

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- bootstrap -->

    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- toastr -->

    <!-- main style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css');?>">
    <!-- main style -->

</head>

    <body>

    <div class="main-page">
                <div id="sidebar" class="mynav text-center text-uppercase">
                    <div class="brand-wrapper">
                        <a class="navbar-brand" href="#">Chick's</a>
                        <a class="navbar-brand" href="#">Fondant</a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item side-active">
                            <a class="nav-link" href="<?php echo base_url('/dashboard');?>">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/account');?>">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/product');?>">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/category');?>">Category</a>
                        </li>
                    </ul>
                </div>
            
                <div id="pages" class="pages-toggle">
                    
                    <div class="main-header">
                    
                        <button class="btn btn-primary btn-toggle" id="menu-toggle">Toggle Menu</button>

                        <div class="action">
                            <div class="profile" id="profile-toggle">
                                <img src="<?php echo base_url('assets/images/1.jpg');?>" alt="">
                            </div>
                            <div class="menu" id="profile-menu">
                                <ul>
                                    <li><i class="fas fa-user-circle"></i> <a href=""> Profile </a> </li>
                                    <li><i class="fas fa-power-off"></i> <a href=" <?php echo base_url('dashboard/logout') ?> ">Logout</a></li>
                                </ul>
                            </div>
                        </div>
   
                                
                    
                    </div>
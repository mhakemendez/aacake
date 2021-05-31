    
    <div class="login-page">
        
        <div class="container login-container">
            
            <div class="row justify-content-center">
                
                <div class="col-lg-7 col-10 login-col">
                    <img src="<?php echo base_url('assets/images/sample1.jpg');?>" alt="">
                </div>
                
                <div class="col-lg-5 col-10 login-col text-center">
                    
                    <div class="container">
                        
                        <form action="<?php echo base_url('login/login_validation'); ?>" method="post">
                            
                            <a class="login-brand" href="#"><img src="<?php echo base_url('assets/images/logo.png');?>" class="logo-login" alt=""> <br> <span>LOGO NAME</span></a>
                            <h3>Admin Login</h3>
                            
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div>
                            
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                               
                            </div>

                            <label for=""></label>
                            
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                            
                          
                        
                        </form>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
    
    </div>
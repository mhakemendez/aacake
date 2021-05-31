<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-color">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo.png');?>" class="logo" alt=""><span>LOGO NAME</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT US</a>
                </li>
                <li class="nav-item login-item">
                    <a class="nav-link" href="#">REVIEWS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="landing-area">
    <div class="text-content text-center">
        <h1>HELLO GREETINGS</h1>
        <p class="landing-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Explicabo soluta quam sed blanditiis autem maiores dolorum maxime obcaecati vitae officia!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, deleniti.</p>
    </div>
</div>

<div class="about-area">
    <div class="container">
        <h2 class="text-center">ABOUT US</h2>
        <div class="row justify-content-around about-row">
            <div class="col-lg-5 about-col about-img-col">
                <img src="<?php echo base_url('assets/images/3.jpg');?>" class="about-img" alt="">
            </div>
            <div class="col-lg-5 col-11 about-col text-center my-auto col-para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa neque magni qui mollitia expedita autem voluptatum debitis dolorem cumque quas.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptas ipsum possimus perferendis culpa facilis sunt libero perspiciatis rem provident?</p>
            </div>
        </div>
    </div>
</div>

<div class="gallery">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item  active">
                    <img src="<?php echo base_url('assets/images/sample1.jpg');?>" class="carousel-img" alt="...">
                </div>
                <div class="carousel-item ">
                    <img src="<?php echo base_url('assets/images/sample2.jpg');?>" class="carousel-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/sample3.jpg');?>" class="carousel-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="menu">
    <div class="container">
        <div class="row justify-content-around text-center">
            <div class="col-lg-3 col-md-5 col-sm-5 col-10 menu-col">
                <img src="<?php echo base_url('assets/images/1.jpg');?>" class="menu-img" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, voluptate.</p>
                <button class="btn menu-btn">View Details</button>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5 col-10 menu-col">
                <img src="<?php echo base_url('assets/images/2.jpg');?>" class="menu-img" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, voluptate.</p>
                <button class="btn menu-btn">View Details</button>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5 col-10 menu-col">
                <img src="<?php echo base_url('assets/images/3.jpg');?>" class="menu-img" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, voluptate.</p>
                <button class="btn menu-btn">View Details</button>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5 col-10 menu-col">
                <img src="<?php echo base_url('assets/images/4.jpg');?>" class="menu-img" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, voluptate.</p>
                <button class="btn menu-btn">View Details</button>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5 col-10 menu-col">
                <img src="<?php echo base_url('assets/images/5.jpg');?>" class="menu-img" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, voluptate.</p>
                <button class="btn menu-btn">View Details</button>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5 col-10 menu-col">
                <img src="<?php echo base_url('assets/images/6.jpg');?>" class="menu-img" alt="">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, voluptate.</p>
                <button class="btn menu-btn">View Details</button>
            </div>
        </div>
    </div>
</div>

<div class="contact-area">
    <div class="container">
        <form>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-10 col-sm-10 col-10">
                    <h2>Contact Us</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <i class="fas fa-map-marker-alt"><span>003 Sample St. Sample City</span></i>
                </div>

                <div class="col-lg-5 col-md-10 col-sm-10 col-10 contact-right">
                    
                    <div class="row justify-content-around">
                        <div class="col-lg-5 col-6">
                            <i class="fas fa-envelope"><span>sample@email.com</span></i>
                        </div>
                        <div class="col-lg-5 col-6">
                            <i class="fas fa-phone-square-alt"><span>09565687954</span> </i>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="btn-contact mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
                        </div>
                        
                    </div>
                   
                </div>

            </div>
        </form>
    </div>
</div>



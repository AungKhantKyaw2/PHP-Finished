<?php
 ini_set('display_errors',1);
 require_once "../../sessionconfig.php";

 if(authfailed()){
  redirectro('../../signin.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plannco Home Decoration</title>
    <!-- fav icon --> 
    <link rel="icon" href="./assets/img/fav/favicon.png" type="image/png" sizes="32x32">
    <!-- font awesome css 1 -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css"/>
    <!-- boostrap css1 js1 -->
     <link rel="stylesheet" href="./assets/libs/bootstrap-5.2.3-dist/css/bootstrap.min.css" type="text/css"/>
    <!-- jquery ui css1 js1  -->
     <link rel="stylesheet" href="./assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.css" type="text/css"/>
     <!-- lightbox2 css1 js1   -->
      <link rel="stylesheet" href="./assets/libs/lightbox2-dev/dist/css/lightbox.min.css">
     <!-- custom css  -->
     <link rel="stylesheet" href="./css/style.css" type="text/css"/>
    </head>
<body>

     <!-- start Back to Top -->
  
  <div class="fixed-bottom"> 
   <a href="#header" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
  </div>
<!-- End  Back to Top  -->

<!-- Start Stick Note -->
    <div class="sticknotes">
         <a href="javascript:void(0);" class="about">About</a>
         <a href="javascript:void(0);" class="blog">Blog</a>
         <a href="javascript:void(0);" class="news">New</a>
         <a href="javascript:void(0);" class="contact">Contact</a>
    </div>

<!-- End Stick Note -->

 <!-- start header section  -->

<header id="header">
 
  <!-- Start Nav Bar -->
<nav class="navbar navbar-expand-lg fixed-top ">
 <a href="index.html" class="navbar-brand text-light mx-3">
  <img src="./assets/img/fav/favicon.png" alt="favicon" width="70"/>
  <span class="text-uppercase h2 fw-bold mx-2">Plancco <span class="h3">Home Decoration</span></span>    
</a>

<button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav1">
    <div class="bg-light lines1"></div>
    <div class="bg-light lines2"></div>
    <div class="bg-light lines3"></div>
    
</button>
<div id="nav1" class="collapse navbar-collapse justify-content-end text-uppercase fw-bold" >
    <ul class="navbar-nav">
        <li class="nav-item"><a href="javascript:void(0);"; class="nav-link mx-2 menuitems">Home</a></li>
        <li class="nav-item"><a href="#aboutus"  class="nav-link  mx-2 menuitems">About Us</a></li>
        <li class="nav-item"><a href="javascript:void(0);"  class="nav-link  mx-2 menuitems">Properties</a></li>
        <li class="nav-item"><a href="javascript:void(0);"  class="nav-link  mx-2 menuitems">Service</a></li>
        <li class="nav-item"><a href="javascript:void(0);"  class="nav-link  mx-2 menuitems">Customer</a></li>
        <li class="nav-item"><a href="javascript:void(0);" class="nav-link  mx-2 menuitems">Furniture</a></li>
        <li class="nav-item"><a href="javascript:void(0);"  class="nav-link  mx-2 menuitems">Contact</a></li>
        <li class="nav-item"><a href="../../logout.php"  class="nav-link  mx-2 menuitems">Logout</a></li>

    </ul>
</div>
</nav>

   <!-- End Nav Bar -->

   <!-- Start Banner -->
<div class="text-light text-center text-md-end banners">
  <h1 class="display-4 bannerheaders">Welcome to <span class="display-3 text-uppercase">Plannco</span> Home Decoration Co,Ltd</h1>
  <!-- class lead for kat kyae kyae text  -->
  <p class="lead bannerparagraphs">Lorem Ipsum is simply dumpy text of the printing and typsetting industry.</p>
</div>
    <!-- End Banner -->

</header>

<!-- End header section  -->


 <!-- start About us section  -->
<section class="py-5 aboutuss" id="aboutus">
   <div class="container">
  <div class="row">
    <div class="col-sm-6">
  <img src="./assets/img/users/staffgirl1.png" alt="staffgirl1"/>
    </div>
    <div class="col-sm-6 text-light">
       <div class="col">
      <h2 class="text-uppercase"> who are we!!</h2>
      <div class="lines"></div>
      <div class="lines"></div>
      <div class="lines"></div>
       </div>
       <h5><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</i></h5>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
       <a href="javascript:void(0);" class="btn btn-danger rounded-0">Read Me</a>
    </div>
  </div>
   </div>
</section>

<!-- End PAbout Us section  -->


 <!-- start Property section  -->
 <section class="py-5">
  <div class="container-fluid">
    
    <!-- start title  -->
     <div class="text-center">
       <div class="col-lg-12">
         <h3 class="titles">Properties</h3>
       </div>
     </div>
     <!-- end title  -->
      <ul class="list-inline text-center fw-bold">
        <li class="list-inline-item propertylists activeitems"  data-filter="all">All <span class="mx-3 mx-md-5 text-muted"></span></li>
        <li class="list-inline-item propertylists"  data-filter="house">House<span class="mx-3 mx-md-5 text-muted"></span></li>
        <li class="list-inline-item propertylists"  data-filter="decoration">Decoration <span class="mx-3 mx-md-5 text-muted"></span></li>
        <li class="list-inline-item propertylists"  data-filter="furniture">Furniture</li> <span class="mx-3 mx-md-5 text-muted"></span></li>
        <li class="list-inline-item propertylists"  data-filter="office">Office<span class=""></span></li>
      </ul>
    <div class="container-fluid">
   <div class="d-flex flex-wrap justify-content-center">
    <div class="filters house">  <a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="Image 1">  <img src="./assets/img/gallery/image1.jpg" alt="image1" width="200"/></a></div>
    <div class="filters house">  <a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="Image 2">  <img src="./assets/img/gallery/image2.jpg" alt="image2" width="200"/></a></div>
    <div class="filters house">  <a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="Image 3">  <img src="./assets/img/gallery/image3.jpg" alt="image3" width="200"/></a></div>
    <div class="filters decoration">  <a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="Image 4">  <img src="./assets/img/gallery/image4.jpg" alt="image4" width="200"/></a></div>
    <div class="filters decoration">  <a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="Image 5">  <img src="./assets/img/gallery/image5.jpg" alt="image5" width="200"/></a></div>
    <div class="filters decoration">  <a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="Image 6">  <img src="./assets/img/gallery/image6.jpg" alt="image6" width="200"/></a></div>
    <div class="filters furniture">  <a href="./assets/img/gallery/image7.jpg" data-lightbox="property" data-title="Image 7">  <img src="./assets/img/gallery/image7.jpg" alt="image7" width="200"/></a></div>
    <div class="filters furniture">  <a href="./assets/img/gallery/image8.jpg" data-lightbox="property" data-title="Image 8">  <img src="./assets/img/gallery/image8.jpg" alt="image8" width="200"/></a></div>
    <div class="filters furniture">  <a href="./assets/img/gallery/image9.jpg" data-lightbox="property" data-title="Image 9">  <img src="./assets/img/gallery/image9.jpg" alt="image9" width="200"/></a></div>
    <div class="filters office">  <a href="./assets/img/gallery/image1.jpg" data-lightbox="property" data-title="Image 10">  <img src="./assets/img/gallery/image3.jpg" alt="image3" width="200"/></a></div>
    <div class="filters office">  <a href="./assets/img/gallery/image2.jpg" data-lightbox="property" data-title="Image 11">  <img src="./assets/img/gallery/image4.jpg" alt="image4" width="200"/></a></div>
    <div class="filters office">  <a href="./assets/img/gallery/image3.jpg" data-lightbox="property" data-title="Image 12">  <img src="./assets/img/gallery/image5.jpg" alt="image5" width="200"/></a></div>
    <div class="filters decoration">  <a href="./assets/img/gallery/image4.jpg" data-lightbox="property" data-title="Image 13">  <img src="./assets/img/gallery/image6.jpg" alt="image6" width="200"/></a></div>
    <div class="filters decoration">  <a href="./assets/img/gallery/image5.jpg" data-lightbox="property" data-title="Image 14">  <img src="./assets/img/gallery/image7.jpg" alt="image7" width="200"/></a></div>
    <div class="filters house">  <a href="./assets/img/gallery/image6.jpg" data-lightbox="property" data-title="Image 15">  <img src="./assets/img/gallery/image8.jpg" alt="image8" width="200"/></a></div>
    <div class="filters furniture">  <a href="./assets/img/gallery/image7.jpg" data-lightbox="property" data-title="Image 16">  <img src="./assets/img/gallery/image9.jpg" alt="image9" width="200"/></a></div>
   

   </div>
    </div>


  </div>
    
 </section>

<!-- End Property section  -->


 <!-- start Adv section  -->

 <section class="py-5 missions">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-5">
   <img src="./assets/img/etc/building4.png" alt="building4" class="advimages"/>
    </div>
    <div class="col-lg-7 text-white text-center text-lg-end advtexts">
       <h1>What is Plannco & how we started our business in Myanmar</h1>
       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type </p>
    </div>
    </div>
    </div>
 </section>
<!-- End Adv section  -->

 <!-- start Service section  -->
 <section class="p-4 services">
    <div class="container-fluid">
    <!-- start title  -->
    <div class="text-center mb-3">
      <div class="col-12">
        <h3 class="titles text-light">Our Services</h3>
        <p class="lead text-light">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      </div>
    </div>
    <!-- end title  -->
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
       <div class="card servicecards">
           <img src="./assets/img/gallery/image1.jpg" alt="image1"/>
           <h5 class="text-white text-uppercase fw-bold p-2 headings">Living Room</h5>
       </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
        <div class="card servicecards">
            <img src="./assets/img/gallery/image1.jpg" alt="image2"/>
            <h5 class="text-white text-uppercase fw-bold p-2 headings">Mini Bar</h5>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
        <div class="card servicecards">
            <img src="./assets/img/gallery/image2.jpg" alt="image3"/>
            <h5 class="text-white text-uppercase fw-bold p-2 headings">Dinning Room</h5>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
        <div class="card servicecards">
            <img src="./assets/img/gallery/image3.jpg" alt="image4"/>
            <h5 class="text-white text-uppercase fw-bold p-2 headings">Meeting Room</h5>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
        <div class="card servicecards">
            <img src="./assets/img/gallery/image4.jpg" alt="image5"/>
            <h5 class="text-white text-uppercase fw-bold p-2 headings">Bed Room</h5>
        </div>
       </div>
       <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
        <div class="card servicecards">
            <img src="./assets/img/gallery/image5.jpg" alt="image6"/>
            <h5 class="text-white text-uppercase fw-bold p-2 headings">Pantry Room</h5>
        </div>
       </div>
    </div>

    </div>
 </section>

<!-- End Service section  -->

 <!-- start quotation section  -->


 <section class="p-3">
  <div class="container-fluid">
    <div class="text-center mb-3">
      <div class="col-12">
         <!-- start title  -->
        <h3 class="titles">Satisfied Clients Services</h3>
        <p class="text-light lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      </div>
    </div>
     <!-- End title  -->

     <div class="row">
     <div class="col-12">
      <ul class="clientlists">
          <li><img src="./assets//img/clients/client1.png" alt="client1"></li>
          <li><img src="./assets//img/clients/client2.png" alt="client2"></li>
          <li><img src="./assets//img/clients/client3.png" alt="client3"></li>
          <li><img src="./assets//img/clients/client4.png" alt="client4"></li>
          <li><img src="./assets//img/clients/client5.png" alt="client5"></li>
      
        </ul>
     </div>
     </div>
  </div>
    
 </section>

<!-- End quotation section  -->


 <!-- start Customer section  -->
 <section class="py-3 customers">
     <div class="container-fluid">
      <div class="col-12 text-center">
        <!-- start title  -->
       <h3 class="titles ">What Customer Say?</h3>
       
     </div>
     <!-- End title  -->

     <div class="row">
      <div class="col-md-6 mx-auto">
        <div id="customercarousel" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-bs-target="#customercarousel" data-bs-slide-to="0">1</li>
            <li class="active" data-bs-target="#customercarousel" data-bs-slide-to="1">2</li>
            <li class="active" data-bs-target="#customercarousel" data-bs-slide-to="2">3</li>
            </ol>
            <div class="carousel-inner">
                  <div class="carousel-item text-center active">
                   <img src="./assets/img/users/user1.jpg" class="rounded-circle" alt="user1"/>
                  <blockquote class="text-light"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></blockquote>
                  <h5 class="text-uppercase fw-bold text-white mb-3">Mrs.July</h5>
                  <ul class="list-inline mb-5">
                   <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                   <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                   <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                   <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                   <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  </ul>
                 </div>
                 <div class="carousel-item text-center">
                  <img src="./assets/img/users/user2.jpg" class="rounded-circle" alt="user1"/>
                 <blockquote class="text-white"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></blockquote>
                 <h5 class="text-uppercase fw-bold mb-3">Mr.Anton</h5>
                 <ul class="list-inline mb-5">
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                 </ul>
                </div>
                <div class="carousel-item text-center">
                  <img src="./assets/img/users/user3.jpg" class="rounded-circle" alt="user1"/>
                 <blockquote class=" text-white"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></blockquote>
                 <h5 class="text-uppercase fw-bold  text-white mb-3">Mrs.Yoon</h5>
                 <ul class="list-inline mb-5">
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                 </ul>
                </div>
            </div>
           </div>
      </div>

     </div>
     </div>
 </section>

<!-- End Customer section  -->


 <!-- start Quoatation section  -->

 <section>
    <div class="container">
         <div class="quotes">
          <div class="infos">
            <div class="me-5">
                <img src="./assets//img/icon/phoneicon.png" class="phoneicons" alt="phoneicon"/>
            </div>
            <div class="text-white">
              <h2 class="fw-bold text-uppercase">Request A Free Quotes</h2>
              <p class="lead">Get answers and advice from people you want it from.</p>
            </div>
          </div>
            <div>
              <a href="tel:094222131" class="btn btn-calls">Call Now <i class="fas fa-phone"></i></a>
            </div>
             
          
         </div>
    </div>
 </section>
<!-- End Quotation section  -->

<!-- Start Furniture Section  -->
<section class="bg-light text-center py-3">
  <div class="container">
    <div class="text-center mb-3">
      <div class="col-12">
         <!-- start title  -->
        <h3 class="titles">Furniture  Services</h3>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
      </div>
    </div>
      <!-- End title  -->


    <div class="row furicons">
    <div class="col-md-4">
         <img src="./assets//img/icon/services1.png" alt="service1"/>
         <h4>Fast Servicec</h4>
         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    </div>
    <div class="col-md-4">
      <img src="./assets//img/icon/services2.png" alt="service2"/>
      <h4>Secure Payments</h4>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
 </div>
 <div class="col-md-4">
  <img src="./assets//img/icon/services3.png" alt="service3"/>
  <h4>Expert teams</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
</div>
<div class="col-md-4">
  <img src="./assets//img/icon/services4.png" alt="service4"/>
  <h4>Affordable Sercie</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
</div>
<div class="col-md-4">
  <img src="./assets//img/icon/services5.png" alt="service5"/>
  <h4>90 Days warranty</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
</div>
<div class="col-md-4">
  <img src="./assets//img/icon/services6.png" alt="service6"/>
  <h4>Award Winning</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
</div>
    </div>
  </div>
</section>



<!-- End  Furniture Section  -->

<!-- Start Contact Section  -->

<section class="p-5 contacts">
         <div class="container-fluid">
         <div class="col-md-5">
       <h5 class="display-4 mb-3"> Get New Letter</h5>
         <form action="" method="">
             <div class="form-group py-4">
                 <input type="text" name="name" id="name" class="form-control py-3 inputs" placeholder="Enter Your Name" autocomplete="off"/>
                 <label for="name" class="labels">Name</label>
             </div>

             <div class="form-group py-4">
              <input type="email" name="email" id="email" class="form-control py-3 inputs" placeholder="Enter Your Email" autocomplete="off"/>
              <label for="email" class="labels">Email</label>
          </div>
          <div class="my-5">
           <div class="form-check form-switch">
           <input type="checkbox" name="accept" id="accept" class="form-check-input"/>
          <label for="accept" class="text-light form-check-label">I agree to get push notify</label>
           </div>
          </div>

          <div class="d-grid">
          <button type="submit" class="btn text-uppercase fw-bold rounded-0 submit-btns">Subscribe</button>
          </div>
         </form>
         </div>
         </div>
</section>


<!-- End Contact Section  -->

 <!-- start Footer section  -->
<footer class="bg-dark px-5">
   <div class="container-fluid">
   <div class="row text-ligt py-4">
         <div class="col-md-3 col-sm-6">
         <h5 class="mb-3"> <img src="./assets/img/fav/favicon.png" alt="footericon" width="70"/>About Us</h5>
         <p class="small text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        </div>
         <div class="col-md-3 col-sm-6">
            <h5 class="mb-3 text-white">Visit Us</h5>
            <ul class="list-unstyled">
              <li><a href="javscript:void(0);" class="footerlinks">Home</a></li>
              <li><a href="javscript:void(0);" class="footerlinks">About</a></li>
              <li><a href="javscript:void(0);" class="footerlinks">Properties</a></li>
              <li><a href="javscript:void(0);" class="footerlinks">Services</a></li>
              <li><a href="javscript:void(0);" class="footerlinks">Customers</a></li>
              <li><a href="javscript:void(0);" class="footerlinks">Furnitures</a></li>
              <li><a href="javscript:void(0);" class="footerlinks">Contacts</a></li>
            </ul>

         </div>
         <div class="col-md-3 col-sm-6">
          <h5 class="mb-3 text-white">Need Help?</h5>
          <ul class="list-unstyled">
            <li><a href="javscript:void(0);" class="footerlinks">Customer Sercices</a></li>
            <li><a href="javscript:void(0);" class="footerlinks">Online Chat</a></li>
            <li><a href="javscript:void(0);" class="footerlinks">Support</a></li>
            <li><a href="javscript:void(0);" class="footerlinks">info@plannco.com</a></li>
           
          </ul>
         </div>
         <div class="col-md-3 col-sm-6">
          <h5 class="mb-3 text-white">Contact Us</h5>
          <ul class="list-unstyled">
            <li><a href="javscript:void(0);" class="nav-link text-white">Add Address</a></li>
            <li><a href="javscript:void(0);" class="nav-link text-white">Tel: Add telephones</a></li>
           
          </ul>
         </div>
   </div>

   <div class="text-light justify-content-between d-flex border-top pt-4">
    <p>&copy; <span id="getyear"></span>Copyright. Inc,All rights reserved.</p>
    <ul class="list-unstyled d-flex">
      <li><a href="javscript:void(0);" class="nav-link"><i class="fab fa-twitter"></i></a></li>
      <li class="ms-3"><a href="javscript:void(0);" class="nav-link"><i class="fab fa-instagram"></i></a></li>
      <li class="ms-3"><a href="javscript:void(0);" class="nav-link"><i class="fab fa-facebook"></i></a></li>
     
    </ul>
   </div>
  </div>
</footer>

<!-- End Footer section  -->













    
    <!-- jquery js1  -->
   <script src="./assets/libs/jquery/jquery-3.6.2.min.js" type="text/javascript"></script>
     <!-- jquery ui css1 js1  -->
<script src="./assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.js" type="text/javascript"></script>
  <!-- lightbox2 css1 js1   -->
  
  <script src="./assets/libs/lightbox2-dev/dist/js/lightbox.min.js" type="text/javascript"></script>     
<!-- boostrap css1 js1 -->
      <script src="./assets/libs/bootstrap-5.2.3-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- custom js -->
     <script type="text/javascript" src="./js/app.js"></script>
</body>
</html>

 <!-- start header section  -->

 <header id="header">
 
 <!-- Start Nav Bar -->
<nav class="navbar navbar-expand-lg fixed-top ">
<a href="<?php echo URLROOT?>/app/welcomes/index.php" class="navbar-brand text-light mx-3">
 <img src="<?php echo URLROOT;?>/public/assets/img/fav/favicon.png" alt="favicon" width="70"/>
 <span class="text-uppercase h2 fw-bold mx-2">Plancco <span class="h3">Home Decoration</span></span>    
</a>

<button type="button" class="navbar-toggler navbuttons" data-bs-toggle="collapse" data-bs-target="#nav1">
   <div class="bg-light lines1"></div>
   <div class="bg-light lines2"></div>
   <div class="bg-light lines3"></div>
   
</button>
<div id="nav1" class="collapse navbar-collapse justify-content-end text-uppercase fw-bold" >
   <ul class="navbar-nav">
       <li class="nav-item"><a href="<?php echo URLROOT;?>welcomes"; class="nav-link mx-2 menuitems">Home</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>welcomes/about"  class="nav-link  mx-2 menuitems">About Us</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>properties"  class="nav-link  mx-2 menuitems">Properties</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>services"  class="nav-link  mx-2 menuitems">Service</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>customer"  class="nav-link  mx-2 menuitems">Customer</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>furniture" class="nav-link  mx-2 menuitems">Furniture</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>contact"  class="nav-link  mx-2 menuitems">Contact</a></li>
   
     
       <?php if(isset($_SESSION['user_id'])): ?>

         <li class="nav-item dropdown">

            <a href="javascript:void(0);" class="nav-link mx-2 menuitems dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name']?></a>
            <ul class="dropdown-menu">
               <li>
               <a href="<?php echo URLROOT; ?>/articles" class="dropdown-item">Articles</a>
               <a href="<?php echo URLROOT; ?>/categories" class="dropdown-item">Category</a>
               <a href="<?php echo URLROOT; ?>/statuses" class="dropdown-item">Status</a>
               <a href="<?php echo URLROOT; ?>/users/whoisonline" class="dropdown-item">Online User</a>
                  <a href="<?php echo URLROOT; ?>/users/logout" class="dropdown-item">Logout</a>
               </li>

            </ul>
         </li>
       <?php else: ?>
       <li class="nav-item"><a href="<?php echo URLROOT;?>users/login"  class="nav-link  mx-2 menuitems">Login</a></li>
       <li class="nav-item"><a href="<?php echo URLROOT;?>users/register"  class="nav-link  mx-2 menuitems">Register</a></li>
       <?php endif; ?>
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

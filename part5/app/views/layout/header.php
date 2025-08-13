<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APPNAME; ?></title>
    <!-- fav icon --> 
    <link rel="icon" href="<?php echo URLROOT;?>/public/assets/img/fav/favicon.ico" type="image/ico" sizes="32x32">
    <!-- font awesome css 1 -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css"/>
    <!-- boostrap css1 js1 -->
     <link rel="stylesheet" href="<?php echo URLROOT;?>/public/assets/libs/bootstrap-5.2.3-dist/css/bootstrap.min.css" type="text/css"/>
    <!-- jquery ui css1 js1  -->
     <link rel="stylesheet" href="<?php echo URLROOT;?>/public/assets/libs/jquery-ui-1.13.2.custom/jquery-ui.min.css" type="text/css"/>
     <!-- lightbox2 css1 js1   -->
      <link rel="stylesheet" href="<?php echo URLROOT;?>/public/assets/libs/lightbox2-dev/dist/css/lightbox.min.css">
     <!-- custom css  -->
     <link rel="stylesheet" href="<?php echo URLROOT;?>/public/css/style.css" type="text/css"/>
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

<?php  require APPURL.'/views/layout/navbar.php'?>
<?php
include "connction.php";
if(isset($_POST['submit'])){
    $productname=$_POST['p_name'];
    $productprice=$_POST['p_price'];
    $productbrand=$_POST['p_brand'];
    $filename=$_FILES["p_image"]["name"]; 
     $tempname=$_FILES["p_image"]["tmp_name"]; 
     $folder="./image/".$filename; 
     $image=$filename; 
     $uploadOk=1; 
     $imageFileType=strtolower(pathinfo($folder,PATHINFO_EXTENSION)); 
     if($imageFileType!="jpg"&& $imageFileType!="png"&& $imageFileType!="jpg"&&$imageFileType!="gif"){ 
         echo "Sorry image of file type jpg,jepg,pdf and gif are allowed"; 
         $uploadOk=0; 
     } 
     if($uploadOk==0){ 
         echo "sorry"; 
     }else{ 
         move_uploaded_file($tempname,$folder); 
     }
    
    $sql=mysqli_query($conn,"INSERT INTO products (p_name,p_price,p_brand,p_image) VALUES('$productname','$productprice','$productbrand','$image')");
    
    if($sql)
    {
        echo'<script> alert("registered successfully");
        window.location.href="view_product.php";</script>';
    }
    else{
    echo"something went wrong";
    
    }
    
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">Flippycart<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          
         
          
          <li><a class="nav-link scrollto" href="#team">Became a seller</a></li>
          <li class="dropdown"><a href="#"><span>Sign In</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li class="dropdown"><a href="#"><span>Register</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="seller_reg.php">Seller</a></li>
                <li><a href="user_reg.php">User</a></li>
              </ul>
                
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Cart</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
    <div class="col-4">
        <form style="color: white;" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <title>Products Registration</title>
              <label  class="form-label">Product_name</label>
              <input type="text"  name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label  class="form-label">Product_price</label>
              <input type="text" name="p_price" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label  class="form-label">Product_brand</label>
                <input type="text"  name="p_brand"class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label  class="form-label">Product_image</label>
                <input type="file"  name="p_image"class="form-control" id="exampleInputPassword1">
              </div>
            
            <button type="submit"  name="submit"class="btn btn-primary">Submit</button>
          </form>
    </div>



    </div>
  </section><!-- End Hero -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
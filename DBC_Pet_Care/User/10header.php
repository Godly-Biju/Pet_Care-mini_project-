<?php
include_once('../db_connect.php');
$username = $_SESSION['username'];

$q="SELECT * FROM register WHERE email='$username'";
$result = mysql_query($q);
$row = mysql_fetch_assoc($result);
$name = $row['name'];
$_SESSION['User_name'] = $row['name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <!-- <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>Chinnakada, Kollam, kerala</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>petcare@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+91 9345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="13index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Care</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="13index.php" class="nav-item nav-link active">Home</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pet</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Add Pet</a>
                        <a href="#" class="dropdown-item">View All my pet's</a>
                    </div>
                </div> -->
                <a href="20_addpet.php" class="nav-item nav-link">Add Pet</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Online Consultation</a>
                    <div class="dropdown-menu m-0">
                        <a href="40_askq.php" class="dropdown-item">Ask Question</a>
                        <a href="41_response.php" class="dropdown-item">View Response</a>
                        
                    </div>
                </div>
                <!-- <a href="#" class="nav-item nav-link">Online Consultation</a> -->
                <!-- <a href="#" class="nav-item nav-link">Payment</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">My Profile</a>
                    <div class="dropdown-menu m-0">
                        <a href="30_editprofile.php" class="dropdown-item">Edit Profile</a>
                        <a href="31_changepassword.php" class="dropdown-item">Change Password</a>
                        <a href="32_pickuphistory.php" class="dropdown-item">Pickup Booking history</a>
                        <a href="34_breedinghistory.php" class="dropdown-item">Breeding history</a>
                        <a href="33_vaccinehistory.php" class="dropdown-item">Vaccine history</a>
                        
                        <a href="../logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5" data-bs-toggle="dropdown">Services & Payment</a>
                    <div class="dropdown-menu m-0">
                        <a href="50_pickup.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-1">Pickup Service</a>
                        <a href="51_vaccine.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-1">Vaccination</a>
                        <a href="52_breeding.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-1">Breeding</a>
                        <a href="55_MakePayment.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-1">Payment Portal</a>
                        <!-- <a href="#" class="dropdown-item">Blog Grid</a>
                        <a href="#" class="dropdown-item">Blog Detail</a> -->
                    </div>
                </div>
                <!-- <a href="login.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Register/Login <i class="bi bi-arrow-right"></i></a> -->
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

<?php
include('includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <!--bootstrap CSS link --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <!--font aweasome link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!--css file -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
        /* Body styling */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Navbar styling */
        .navbar {
            background-color: #6c757d;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        /* Header styling */
        .bg-light {
            background-color: #f1f1f1;
            padding: 20px;
            margin-bottom: 20px;
        }

        h3, p {
            color: #343a40;
        }

        /* Product card styling */
        .card {
          margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
           margin-bottom: 20px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title, .card-text {
            color: #343a40;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: 1px solid #6c757d;
        }

        .btn-secondary:hover {
            background-color: #495057;
            border: 1px solid #495057;
        }

        /* Sidenav styling */
        .bg-secondary {
            background-color: #343a40;
        }

        .text-light {
            color: #fff !important;
        }

        .text-black {
            color: #000 !important;
        }

        /* Footer styling */
        .bg-secondary p {
            color: #fff;
        }
    </style>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <img src ="./images/Logo.png " alt=" " class ="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
        </ul>
      <form class="d-flex" action= " " method="get">
        <input class="form-control me-2" type="search" placeholder="Search" 
        aria-label="Search" name="search_data">
        
        <input type="submit" value="Search" class="btn btn-dark" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">WELCOME GUEST</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Login </a>
    </li>
    </ul>
</nav>
<!--third child-->
<div class= "bg light">
  <h3 class="text-center">DRIVE AWAY NOW</h3>
  <p class="text-center">Your Journey Starts Here </p>
</div>

<!--Fourth child-->
<div class="row px-1">
            <div class="col-md-10">
                <!-- Product row -->
                <div class="row">
                    <?php
                    //caling function
                    search_product();
                    ?>
                </div>
            </div>
        </div>
  </div>
<!--last child-->
<div class="bg-secondary p-3 text-center">
  <p>All rights are reserved</p>
</div>
    </div>
    <!-- bootstrap jslink -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</body>
</html>
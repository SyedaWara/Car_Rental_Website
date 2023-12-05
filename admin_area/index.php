<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!--font aweasome link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    
    <style>

        .footer {
           position: relative;
            bottom: 0;
        }

        .navbar {
            background-color: #6c757d;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #fff;
        }

        .bg-light {
            background-color: #f8f9fa;
        }

        h3 {
            color: #343a40;
        }

        .row {
            margin: 20px 0;
        }

        .bg-secondary {
            background-color: #343a40;
            color: #fff;
        }

        .admin-image {
            width: 100%;
            max-height: 100%;
            border-radius: 50%;
        }

        
        .button button {
            margin: 10px 0;
        }

        .bg-secondary p {
            color: #fff;
            margin: 0;
        }
        .admin_image{
        width :100px;
        object-fit: contain;
       }

    </style>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
                <img src="../images/Logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                <ul class ="navbar-nav">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Welcome Guest</a>
                  </li>
                </ul>
                </nav>  
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
             <div class="p-2 px-5">
                <a href="#"><img src="../images/car1.jpeg" alt="" class="admin-image"></a>
                <p class="text-light text-center">Admin Name</p>
             </div>
             <div class="button text-center">
                <button><a href="insert_car.php" class="nav-link text-light bg-secondary my-1">Insert Car</a></button>
                <button><a href="" class="nav-link text-light bg-secondary my-1">View Car</a></button>
             <!--   <button><a href="index.php?insert_categories" class="nav-link text-light bg-secondary my-1">Insert Categories</a></button>-->
             <!--   <button><a href="" class="nav-link text-light bg-secondary my-1">View Categories</a></button> -->
             <!--   <button><a href="index.php?insert_type" class="nav-link text-light bg-secondary my-1">Insert Type</a></button>-->
              <!--  <button><a href="" class="nav-link text-light bg-secondary my-1">View Brands</a></button> -->
                <button><a href="" class="nav-link text-light bg-secondary my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-secondary my-1">All Payment</a></button>
                <button><a href="" class="nav-link text-light bg-secondary my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-secondary my-1">Logout</a></button>
             </div>
            </div>
        </div>
       
         <!--last child-->
<div class="bg-secondary p-3 text-center footer ">
  <p>All rights are reserved</p>
</div>
    </div>
     <!--bootstrap js link-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>

</body>
</html>


 
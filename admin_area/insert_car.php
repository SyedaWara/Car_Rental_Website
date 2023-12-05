<?php
include('../includes/connect.php');
if(isset($_POST['insert_car'])){
    $car_title=$_POST['car_title'];
    $car_registration_no =$_POST['car_registration_no'];
    $car_model =$_POST['car_model'];
    $car_status='true';
    
    $rate_per_hour = $_POST['rate_per_hour'];
    //accessing images
    $car_image1 =$_FILES['car_image1']['name'];
    $car_image2 =$_FILES['car_image2']['name'];

    //accesing image temp_name
    $temp_image1 =$_FILES['car_image1']['tmp_name'];
    $temp_image2 =$_FILES['car_image2']['tmp_name'];

    //check empty condition
    if($car_title=='' or $car_registration_no=='' or 
    $temp_image1=='' or $temp_image2 == '' or $car_model == '' or $rate_per_hour== ''){
       echo"<script>alert('Please fill all available fields')</script>";
       exit();
    }
    else{
         move_uploaded_file($temp_image1,"./car_images/$car_image1");
         move_uploaded_file($temp_image2,"./car_images/$car_image2");

         //insert query
         $insert_car="insert into `car` (Car_title,Car_registration_no,
         Car_Model,Car_image1,Car_image2,
         Rateperhour,Date,Status ) values('$car_title','$car_registration_no','$car_model',
         '$car_image1','$car_image2','$rate_per_hour',NOW(),'$car_status')";

         $result_query=mysqli_query($con,$insert_car);
         if($result_query){
            echo"<script>alert('Successfull insertion')</script>";
         }
    }


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert_Car</title>
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
    <link rel="stylesheet" href="../style.css">
    <style>
    body {
        background-color: #f8f9fa; /* Light grey background */
        font-family: 'Arial', sans-serif; /* Use a common font */
    }

    .container {
        background-color: #ffffff; /* White container background */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        padding: 30px;
        margin-top: 50px;
        max-width: 600px; /* Limit container width for better readability */
        margin-left: auto;
        margin-right: auto;
    }

    h1 {
        color: #343a40; /* Dark gray heading */
        text-align: center; /* Center the heading */
    }

    label {
        color: #495057; /* Medium gray label text */
    }

    input.form-control {
        border: 1px solid #ced4da; /* Light gray border */
        border-radius: 5px; /* Add a slight border-radius */
        margin-top: 8px; /* Add space between input fields */
    }

    input.form-control:focus {
        border-color: #4caf50; /* Green border when focused */
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5); /* Light green shadow when focused */
    }

    .btn-light {
        background-color: #4caf50; /* Green button background */
        color: #ffffff; /* White button text */
        width: 100%; /* Make the button full width */
        margin-top: 15px; /* Add space below the button */
        padding: 10px; /* Increase padding for a larger button */
    }

    .footer {
        color: #ffffff; /* White text in footer */
        text-align: center; /* Center the footer text */
        padding: 10px;
        margin-top: 20px;
        background-color: #343a40; /* Dark gray background for the footer */
        border-radius: 5px; /* Rounded corners for the footer */
    }
</style>
   
    
</head>
<body class = "bg-secondary">
    <div class="container mt-3" >
    <h1 class="text-center">Insert Products</h1>
    <!-- form -->
     <form action="" method="post" enctype ="multipart/form-data">
        <!--title
        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="car_id" class="form-label">Car_Id</label>
        <input type="text" name="car_id" id="car_id" class ="form-control" 
        placeholder="Enter Car id" autocomplete="off" required="required">
        </div>-->
        
        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="car_title" class="form-label">Car_Title</label>
        <input type="text" name="car_title" id="car_title" class ="form-control" 
        placeholder="Enter Car title" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="car_registration_no" class="form-label">Car Registration Number</label>
        <input type="text" name="car_registration_no" id="car_registration_no" class ="form-control" 
        placeholder="Enter Car Registration Number" autocomplete="off" required="required">
        </div>
 
        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="car_registration_no" class="form-label">Car Model</label>
        <input type="text" name="car_model" id="car_model" class ="form-control" 
        placeholder="Enter Car Model" autocomplete="off" required="required">
        </div>
        <!--image1-->
        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="car_image1" class="form-label">Car Image 1</label>
        <input type="file" name="car_image1" id="car_image1" class ="form-control" 
        required="required">
        </div>

        <!--image2-->
        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="car_image2" class="form-label">Car Image 2</label>
        <input type="file" name="car_image2" id="car_image2" class ="form-control" 
        required="required">
        </div>
         <!--rateperhour-->
        <div class="form-outline mb-4 w-50 m-auto ">
        <label for="ate_per_hour" class="form-label">Car Rate Per Hour</label>
        <input type="text" name="rate_per_hour" id="ate_per_hour" class ="form-control" 
        placeholder="Enter Car Rate per Hour" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto ">
            <input type="submit" name="insert_car" class = "btn btn-light " value ="Insert Car">
        </div>

     </form>
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
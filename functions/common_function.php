<?php
//including connect file
include('./includes/connect.php');
//getting cars
function getcars(){
    global $con;
    
                    include('./includes/connect.php');
                    $select_query = "Select * from `car` order by rand() limit 0,9";
                    $result_query = mysqli_query($con,$select_query);

                    while($row=mysqli_fetch_assoc($result_query)) {
                        $Car_Id = $row['Car-Id'];
                        $Car_title = $row['Car_title'];
                        $Car_registration_no = $row['Car_registration_no'];
                        $Car_Model = $row['Car_Model'];
                        $Car_image1= $row['Car_image1'];
                        $Car_image2 = $row['Car_image2'];
                        $Rateperhour = $row['Rateperhour'];
                        ?>
                        <!-- Modified card structure -->
                        <div class="col-md-4 mb-2">
                            <div class='card'>
                                <img src='./admin_area/car_images/<?php echo $Car_image1; ?>' class='card-img-top' alt='<?php echo $Car_title; ?>'>
                                <div class='card-body'>
                                    <h5 class='card-title'><?php echo $Car_title; ?></h5>
                                    <p class='card-text'><?php echo $Car_Model; ?></p>
                                    <a href='#' class='btn btn-secondary'>Add To Cart</a>
                                    <a href='#' class='btn btn-secondary'>View More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    
}


//get searching products
function search_product(){
    global $con;
    if(isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data'];
    $search_query = "Select * from `car` where 
    Car_title like '%$search_data_value%' ";
    $result_query = mysqli_query($con,$search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0){
        echo "<h2 class ='text-center text-danger'>NOT AVAILABLE";
    }

    while($row=mysqli_fetch_assoc($result_query)) {
        $Car_Id = $row['Car-Id'];
        $Car_title = $row['Car_title'];
        $Car_registration_no = $row['Car_registration_no'];
        $Car_Model = $row['Car_Model'];
        $Car_image1= $row['Car_image1'];
        $Car_image2 = $row['Car_image2'];
        $Rateperhour = $row['Rateperhour'];
        ?>
        <!-- Modified card structure -->
        <div class="col-md-4 mb-2">
            <div class='card'>
                <img src='./admin_area/car_images/<?php echo $Car_image1; ?>' class='card-img-top' alt='<?php echo $Car_title; ?>'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo $Car_title; ?></h5>
                    <p class='card-text'><?php echo $Car_Model; ?></p>
                    <a href='#' class='btn btn-secondary'>Add To Cart</a>
                    <a href='#' class='btn btn-secondary'>View More</a>
                </div>
            </div>
        </div>
        <?php
    }

}
}
?>
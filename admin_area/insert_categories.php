<?php
include('../includes/connect.php');
if(isset($_POST['insert-Category'])){
  $category_title=$_POST['cat-title'];
  //select data from data base
  $select_query ="Select * from `categories`  where category_title = '$category_title'";
  $result_select = mysqli_query($con, $select_query);
  $number=mysqli_num_rows( $result_select);
  if($number>0){
    echo "<script>alert('category already exist')</script>";
  } else{
  $insert_query= "insert into `categories`  (category_title) values ('$category_title')";
  $result = mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Category has been inserted successfully')</script>";
  }
  }
}
?>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-secondary" id="basic-addon1" ><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat-title"
   placeholder="Insert categories"  aria-label ="Categories"
    aria-describedby= "basic-addon1">
</div> 

<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="form-control bg-secondary" name="insert-Category"
   value="Submit"  aria-label ="Category"
    aria-describedby= "basic-addon1" class="bg-secondary">
   <!--<button class="bg-secondary p-2 my-3 border-0">Insert Category</button>-->

</div> 

</form>
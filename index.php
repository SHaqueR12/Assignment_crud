<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Description=$_POST['Description'];
    $Price=$_POST['Price'];
    $Quantity=$_POST['Quantity'];
    $Expeiry_date=$_POST['Expeiry_date'];

    $sql="insert into product(Name,Description,Price,Quantity,Expeiry_date)
    values('$Name', '$Description', '$Price', '$Quantity', '$Expeiry_date')";
    $result=mysqli_query($con,$sql);
    if($result)
      {
         //echo "Data inserted successfully";
         header('location:display.php');

      }
      else{
        die(mysqli_error($con));
      }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  name="Name" autocomplete="off">
  </div>

 
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control"  name="Description" autocomplete="off">
  </div>

 
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control"  name="Price" autocomplete="off">
  </div>

  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control"  name="Quantity" autocomplete="off">
  </div>


  <div class="form-group">
    <label>Expeiry_date</label>
    <input type="date" class="form-control"  name="Expeiry_date" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



  </div>

    
  </body>
</html>
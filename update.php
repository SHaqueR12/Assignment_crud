<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `product` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['Name'];
$Description=$row['Description'];
$Price=$row['Price'];
$Quantity=$row['Quantity'];
$Ex_date=$row['Ex_date'];

if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Description=$_POST['Description'];
    $Price=$_POST['Price'];
    $Quantity=$_POST['Quantity'];
    $Ex_date=$_POST['Ex_date'];

    $sql="update `product` set id='$id',Name='$Name', Description='$Description', Price='$Price', Quantity='$Quantity', Ex_date='$Ex_date' 
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
         //echo "Updated successfully";
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
    <input type="text" class="form-control" placeholder="Name of the product" name="Name" autocomplete="off" value=<?php echo $Name;?>>
  </div>

 
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" placeholder="description of the product" name="Description" autocomplete="off" value=<?php echo $Description;?>>
  </div>

 
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" placeholder="Price of the product" name="Price" autocomplete="off" value=<?php echo $Price;?>>
  </div>

  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" placeholder="Quantity of the product" name="Quantity" autocomplete="off" value=<?php echo $Quantity;?>>
  </div>


  <div class="form-group">
    <label>Ex_date</label>
    <input type="date" class="form-control" placeholder="Expeiry_date of the product" name="Ex_date" autocomplete="off" value=<?php echo $Ex_date;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>



  </div>

    
  </body>
</html>
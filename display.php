<?php
    include 'connect.php';
    ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Crud Operation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add Item</a></button>
        <table class="table">
            <thead>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Ex_date</th>
                <th scope="col">Operation</th>
            </thead>
            <tbody>
                <?php
                    $sql="select * from product";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id=$row['id'];
                            $Name=$row['Name'];
                            $Description=$row['Description'];
                            $Price=$row['Price'];
                            $Quantity=$row['Quantity'];
                            $Ex_date=$row['Ex_date'];
                           echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$Name.'</td>
                           <td>'.$Description.'</td>
                           <td>'.$Price.'</td>
                           <td>'.$Quantity.'</td>
                           <td>'.$Ex_date.'</td>
                           <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light">Delete</a></button>
                </td>
                           </tr>';
                        }

                    }


                ?>
                
            </tbody>
        </table>
        </div>

    </body>
</html>
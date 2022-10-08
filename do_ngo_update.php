<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
    <title>Crud operation</title>
  </head>
  <body>

  <?php
    include 'medicon.php';
    $id = $_GET['updateid']; 

    $sql = "update ngosignin set Password='Admin2020' where id = $id";

       $result = mysqli_query($con, $sql);

       if($result)
       {
 
           header('location:do_ngo_display.php');
       }
       else{
            die(mysqli_error($con));
       }


      

?>

  </body>
</html>
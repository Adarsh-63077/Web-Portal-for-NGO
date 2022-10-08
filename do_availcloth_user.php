



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
   if(isset($_POST['submit'])){
      
       $ClothType = $_POST['ClothType'];
       $ClothName = $_POST['ClothName'];
       $Size = $_POST['Size'];
       $NgoName = $_POST['NgoName'];
       $NgoLocation = $_POST['NgoLocation'];

       $sql = "INSERT INTO cloth_avail( ClothType, ClothName, Size, AvailableAmount, NgoName,NgoLocation) VALUES ('$ClothType','$ClothName', '$Size','$AvailableAmount', '$NgoName','$NgoLocation)";
       
       $result = mysqli_query($con, $sql);

       if($result)
       {
           header('location:do_availcloth_display.php');
       }
       else{
            echo "Error";
       }

   }

      

?>


    <div class = "container my-5">
        <form method = "post">
        <!-- <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "DonarName">
        </div>
        
        <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "PhoneNumber">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name = "Email">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name = "Address">
        </div> -->

        <div class="form-group">
            <label>Cloth-Type</label>
            <input type="text" class="form-control" placeholder="Enter Cloth Type" name = "ClothType">
        </div>

        <div class="form-group">
            <label>Cloth-Name</label>
            <input type="text" class="form-control" placeholder="Enter Cloth Name" name = "ClothName">
        </div>

        <div class="form-group">
            <label>Size</label>
            <input type="text" class="form-control" placeholder="Size" name = "Size">
        </div>
        <div class="form-group">
            <label>Available-Amount</label>
            <input type="text" class="form-control" placeholder="Available Amount" name = "AvailableAmount">
        </div>

        <div class="form-group">
            <label>Ngo-Name</label>
            <input type="text" class="form-control" placeholder="Enter Ngo Name" name = "NgoName">
        </div>
        <div class="form-group">
            <label>Ngo-Location</label>
            <input type="text" class="form-control" placeholder="Enter Ngo Location" name = "NgoLocation">
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </body>
</html>


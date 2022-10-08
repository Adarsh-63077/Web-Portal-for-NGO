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
   $sql = "select * from `cloth_avail` where id=$id";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   
   $ClothType = $row['ClothType'];
   $ClothName = $row['ClothName'];
   $Size = $row['Size'];
   $AvailableAmount = $row['AvailableAmount'];
   $NgoName = $row['NgoName'];
   $NgoLocation = $row['NgoLocation'];


   if(isset($_POST['submit'])){
      
       $ClothType = $_POST['ClothType'];
       $ClothName = $_POST['ClothName'];
       $Size = $_POST['Size'];
       $AvailableAmount = $_POST['AvailableAmount'];
       $NgoName = $_POST['NgoName'];
       $NgoLocation = $_POST['NgoLocation'];


       $sql = "update `cloth_avail` set id=$id,  ClothType='$ClothType', ClothName='$ClothName', Size='$Size', AvailableAmount = '$AvailableAmount',NgoName='$NgoName',NgoLocation='$NgoLocation' where id = $id";
       $result = mysqli_query($con, $sql);

       if($result)
       {
           
         header('location:do_availcloth_display.php');
       }
       else{
            die(mysqli_error($con));
       }

   }

      

?>


    <div class = "container my-5">
        <form method = "post">
        <!-- <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "DonerName" value = <?php echo $DonerName;?>>
        </div>
        
        <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "PhoneNumber" value = <?php echo $PhoneNumber;?>>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name = "Email" value = <?php echo $Email;?>>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name = "Address" value = <?php echo $Address;?>>
        </div> -->

        <div class="form-group">
            <label>Cloth-Type </label>
            <input type="text" class="form-control" placeholder="Enter Cloth Type" name = "ClothType" value = <?php echo $ClothType;?>>
        </div>

        <div class="form-group">
            <label>Cloth-Name</label>
            <input type="text" class="form-control" placeholder="Enter Cloth Name" name = "ClothName" value = <?php echo $ClothName;?>>
        </div>

        <div class="form-group">
            <label>Size</label>
            <input type="text" class="form-control" placeholder="Size" name = "Size" value = <?php echo $Size;?>>
        </div>

        <div class="form-group">
            <label>Available-Amount</label>
            <input type="text" class="form-control" placeholder="Enter Amount" name = "AvailableAmount" value = <?php echo $AvailableAmount;?>>
        </div>
        <div class="form-group">
            <label>Ngo-Name</label>
            <input type="text" class="form-control" placeholder="Enter Ngo Name" name = "NgoName" value = <?php echo $NgoName;?>>
        </div>
        <div class="form-group">
            <label>Ngo-Location</label>
            <input type="text" class="form-control" placeholder="Enter Ngo Location" name = "NgoLocation" value = <?php echo $NgoLocation;?>>
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Update</button>
        </form>
    </div>

  </body>
</html>


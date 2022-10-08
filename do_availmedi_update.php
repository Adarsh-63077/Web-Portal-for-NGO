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
   $sql = "select * from `medi_avail` where id=$id";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   
   $MedicineName = $row['MedicineName'];
   $AvailableAmount = $row['AvailableAmount'];
   $ExpiryDate = $row['ExpiryDate'];
   $NgoName = $row['NgoName'];
   $NgoLocation = $row['NgoLocation'];


   if(isset($_POST['submit'])){
      
       $MedicineName = $_POST['MedicineName'];
       $AvailableAmount = $_POST['AvailableAmount'];
       $ExpiryDate = $_POST['ExpiryDate'];
       $NgoName = $_POST['NgoName'];
       $NgoLocation = $_POST['NgoLocation'];


       $sql = "update `medi_avail` set id=$id,  MedicineName='$MedicineName', AvailableAmount='$AvailableAmount', ExpiryDate='$ExpiryDate', NgoName = '$NgoName', NgoLocation = '$NgoLocation' where id = $id";
       $result = mysqli_query($con, $sql);

       if($result)
       {
           
         header('location:do_availmedi_display.php');
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
            <label>Medicine-Name </label>
            <input type="text" class="form-control" placeholder="Enter Medicine Name" name = "MedicineName" value = <?php echo $MedicineName;?>>
        </div>

        <div class="form-group">
            <label>Available-Amount</label>
            <input type="text" class="form-control" placeholder="Enter Amount" name = "AvailableAmount" value = <?php echo $AvailableAmount;?>>
        </div>

        <div class="form-group">
            <label>Expiry-Date</label>
            <input type="text" class="form-control" placeholder="ExpiryDate" name = "ExpiryDate" value = <?php echo $ExpiryDate;?>>
        </div>

        <div class="form-group">
            <label>Ngo-Name</label>
            <input type="text" class="form-control" placeholder="Enter NgoName" name = "NgoName" value = <?php echo $NgoName;?>>
        </div>
        <div class="form-group">
            <label>Ngo-Location</label>
            <input type="text" class="form-control" placeholder="Enter NgoLocation" name = "NgoLocation" value = <?php echo $NgoLocation;?>>
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Update</button>
        </form>
    </div>

  </body>
</html>


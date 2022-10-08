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
  <body style="color:#808000">

  <?php
   include 'medicon.php';
   $id = $_GET['updateid']; 
   $sql = "select * from `medicine` where id=$id";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   $Name = $row['Name'];
   $Phone = $row['Phone'];
   $Email = $row['Email'];
   $Address = $row['Address'];
   $MedicineName = $row['MedicineName'];
   $Quantity = $row['Quantity'];
   $DonationDate = $row['DonationDate'];
   $ExpiryDate = $row['ExpiryDate'];


   if(isset($_POST['submit'])){
       $Name = $_POST['Name'];
       $Phone = $_POST['Phone'];
       $Email = $_POST['Email'];
       $Address = $_POST['Address'];
       $MedicineName = $_POST['MedicineName'];
       $Quantity = $_POST['Quantity'];
       $DonationDate = $_POST['DonationDate'];
       $ExpiryDate = $_POST['ExpiryDate'];


       $sql = "update `medicine` set id=$id, Name='$Name', Phone='$Phone', Email='$Email', Address='$Address', MedicineName='$MedicineName', Quantity='$Quantity', DonationDate='$DonationDate', ExpiryDate = '$ExpiryDate' where id = $id";
       $result = mysqli_query($con, $sql);

       if($result)
       {
           
         header('location:do_medicine_display.php');
       }
       else{
            die(mysqli_error($con));
       }

   }

      

?>


    <div class = "container my-5">
        <form method = "post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "Name" value = <?php echo $Name;?>>
        </div>
        
        <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "Phone" value = <?php echo $Phone;?>>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name = "Email" value = <?php echo $Email;?>>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name = "Address" value = <?php echo $Address;?>>
        </div>

        <div class="form-group">
            <label>MedicineName</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "MedicineName" value = <?php echo $MedicineName;?>>
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Quantity" value = <?php echo $Quantity;?>>
        </div>

        <div class="form-group">
            <label>DonationDate</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "DonationDate" value = <?php echo $DonationDate;?>>
        </div>

        <div class="form-group">
            <label>ExpiryDate</label>
            <input type="Date" class="form-control" placeholder="Enter your password" name = "ExpiryDate" value = <?php echo $ExpiryDate;?>>
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Update</button>
        </form>
    </div>

  </body>
</html>


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
   $sql = "select * from `cloth_detail` where id=$id";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   $DonerName = $row['DonerName'];
   $PhoneNumber = $row['PhoneNumber'];
   $Email = $row['Email'];
   $Address = $row['Address'];
   $Cloth = $row['Cloth'];
   $Quantity = $row['Quantity'];
   $BuyDate = $row['BuyDate'];
   $DonationDate = $row['DonationDate'];


   if(isset($_POST['submit'])){
       $DonerName = $_POST['DonerName'];
       $PhoneNumber = $_POST['PhoneNumber'];
       $Email = $_POST['Email'];
       $Address = $_POST['Address'];
       $Cloth = $_POST['Cloth'];
       $Quantity = $_POST['Quantity'];
       $BuyDate = $_POST['BuyDate'];
       $DonationDate = $_POST['DonationDate'];


       $sql = "update `cloth_detail` set id=$id, DonerName='$DonerName', PhoneNumber='$PhoneNumber', Email='$Email', Address='$Address', Cloth='$Cloth', Quantity='$Quantity', BuyDate='$BuyDate', DonationDate = '$DonationDate' where id = $id";
       $result = mysqli_query($con, $sql);

       if($result)
       {
           
         header('location:do_cloth_display.php');
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
        </div>

        <div class="form-group">
            <label>Cloth </label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Cloth" value = <?php echo $Cloth;?>>
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Quantity" value = <?php echo $Quantity;?>>
        </div>

        <div class="form-group">
            <label>BuyDate</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "BuyDate" value = <?php echo $BuyDate;?>>
        </div>

        <div class="form-group">
            <label>DonationDate</label>
            <input type="Date" class="form-control" placeholder="Enter your password" name = "DonationDate" value = <?php echo $DonationDate;?>>
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Update</button>
        </form>
    </div>

  </body>
</html>


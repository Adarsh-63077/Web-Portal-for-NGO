



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
       $Name = $_POST['Name'];
       $Phone = $_POST['Phone'];
       $Email = $_POST['Email'];
       $Address = $_POST['Address'];
       $MedicineName = $_POST['MedicineNam'];
       $Quantity = $_POST['AQuantity'];
       $DonationDat = $_POST['DonationDat'];
       $ExpiryDate = $_POST['ExpiryDate'];

       $sql = "INSERT INTO medicine(Name, Phone, Email, Address, MedicineName, Quantity, DonationDate, ExpiryDate) VALUES ('$Name','$Phone','$Email','$Address','$MedicineName','$Quantity', '$DonationDate', '$ExpiryDate')";
       
       $result = mysqli_query($con, $sql);

       if($result)
       {
           header('location:do_medicine_display.php');
       }
       else{
            echo "Error";
       }

   }

      

?>


    <div class = "container my-5">
        <form method = "post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "Name">
        </div>
        
        <div class="form-group">
            <label>phone</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "Phone">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name = "Email">
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name = "Address">
        </div>

        <div class="form-group">
            <label>MedicineName</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "MedicineName">
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Quantity">
        </div>

        <div class="form-group">
            <label>DonationDate</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "DonationDate">
        </div>

        <div class="form-group">
            <label>ExpiryDate</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "ExpiryDate">
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </body>
</html>


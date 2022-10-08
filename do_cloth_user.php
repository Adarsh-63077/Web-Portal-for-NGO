



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
       $DonarName = $_POST['DonarName'];
       $PhoneNumber = $_POST['Phonenumber'];
       $Email = $_POST['Email'];
       $Address = $_POST['Address'];
       $Cloth = $_POST['Cloth'];
       $Quantity = $_POST['Quantity'];
       $BuyDate = $_POST['BuyDate'];
       $DonationDate = $_POST['DonationDate'];

       $sql = "INSERT INTO cloth_detail(DonarName, PhoneNumber, Email, Address, Cloth, Quantity,BuyDate , DonationDate) VALUES ('$DonarName','$PhoneNumber','$Email','$Address','$Cloth','$Quantity', '$BuyDate', '$DonationDate')";
       
       $result = mysqli_query($con, $sql);

       if($result)
       {
           header('location:do_cloth_display.php');
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
        </div>

        <div class="form-group">
            <label>Cloth</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Cloth">
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Quantity">
        </div>

        <div class="form-group">
            <label>BuyDate</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "BuyDate">
        </div>

        <div class="form-group">
            <label>DonationDate</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "DonationDate">
        </div>
             
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </body>
</html>


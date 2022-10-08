



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
       $BookName = $_POST['BookName'];
       $AuthorName = $_POST['AuthorName'];
       $Quantity = $_POST['Quantity'];
       $DonationDate = $_POST['DonationDate'];

       $sql = "INSERT INTO book_detail(DonarName, PhoneNumber, Email, Address, BookName, AuthorName, Quantity, DonationDate) VALUES ('$DonarName','$PhoneNumber','$Email','$Address','$BookName','$AuthorName', '$Quantity', '$DonationDate')";
       
       $result = mysqli_query($con, $sql);

       if($result)
       {
           header('location:do_display1.php');
       }
       else{
            echo "Error";
       }

   }

      

?>


    <div class = "container my-5">
        <form method = "post">
        <div class="form-group">
            <label>EName</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "DonarName">
        </div>
        
        <div class="form-group">
            <label>Ephone</label>
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
            <label>BookName</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "BookName">
        </div>

        <div class="form-group">
            <label>AuthorName</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "AuthorName">
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Quantity">
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


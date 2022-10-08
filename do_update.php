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
   $sql = "select * from `book_detail` where id=$id";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   $DonarName = $row['DonarName'];
   $PhoneNumber = $row['PhoneNumber'];
   $Email = $row['Email'];
   $Address = $row['Address'];
   $BookName = $row['BookName'];
   $AuthorName = $row['AuthorName'];
   $Quantity = $row['Quantity'];
   $DonationDate = $row['DonationDate'];


   if(isset($_POST['submit'])){
       $DonarName = $_POST['DonarName'];
       $PhoneNumber = $_POST['PhoneNumber'];
       $Email = $_POST['Email'];
       $Address = $_POST['Address'];
       $BookName = $_POST['BookName'];
       $AuthorName = $_POST['AuthorName'];
       $Quantity = $_POST['Quantity'];
       $DonationDate = $_POST['DonationDate'];


       $sql = "update `book_detail` set id=$id, DonarName='$DonarName', PhoneNumber='$PhoneNumber', Email='$Email', Address='$Address', BookName='$BookName', AuthorName='$AuthorName', Quantity='$Quantity', DonationDate = '$DonationDate' where id = $id";
       $result = mysqli_query($con, $sql);

       if($result)
       {
           
         header('location:do_display1.php');
       }
       else{
            die(mysqli_error($con));
       }

   }

      

?>


    <div class = "container my-5">
        <form method = "post">
        <div class="form-group">
            <label>EName</label>
            <input type="text" class="form-control" placeholder="Enter your name" name = "DonarName" value = <?php echo $DonarName;?>>
        </div>
        
        <div class="form-group">
            <label>Ephone</label>
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
            <label>BookName</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "BookName" value = <?php echo $BookName;?>>
        </div>

        <div class="form-group">
            <label>AuthorName</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "AuthorName" value = <?php echo $AuthorName;?>>
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" placeholder="Enter your password" name = "Quantity" value = <?php echo $Quantity;?>>
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


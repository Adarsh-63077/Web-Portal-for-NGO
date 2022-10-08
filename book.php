<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="book.css"/>


    <style>
        a{
            color: grey;
        }
        a:hover
        {
            color: black;
        
        }
    </style>
</head>
<body>
    
<?php

    include 'medicon.php';

    if(isset($_POST['submitid']))
      {
        $DonarName=$_POST['DonarName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        $BookName=$_POST['BookName'];
        $AuthorName=$_POST['AuthorName'];
        $Quantity=$_POST['Quantity'];
        $DonationDate=$_POST['DonationDate'];
        
        $query1="INSERT INTO book_detail(DonarName,PhoneNumber,Email,Address,BookName,AuthorName,Quantity,DonationDate)VALUES('$DonarName','$PhoneNumber','$Email','$Address','$BookName','$AuthorName','$Quantity','$DonationDate')";

        $res1=mysqli_query($con,$query1);

        if($res1){
            echo "Connected";
        }
        else{
            echo "Not Connected";
        }
        
      } 


    ?>
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1 style="color:white">Lets Donate</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="book.php" >
            
        <label for="text" >Donar-Name</label>
            <input type="text" id="DonarName" placeholder="Full name" name="DonarName"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Contact</label>
            <input type="tel" id="PhoneNumber" placeholder="5555555555" name="PhoneNumber"
            required pattern="[0-9]{10}" />
        
            <label for="text" >Email</label>
            <input type="email" id="Email" placeholder="email@address.com" name="Email"
            required/>
        
            <label for="text" >Address</label>
            <textarea type="text" placeholder="enter location" name="Address"></textarea>
            
            <label for="textarea" >Book-Name</label>
            <textarea type="text" placeholder="enter things you want to donate" name="BookName"></textarea>
            <label for="textarea" >Author-Name</label>
            <textarea type="text" placeholder="enter things you want to donate" name="AuthorName"></textarea>
            <label for="textarea" >Quantity</label>
            <textarea type="text" placeholder="enter things you want to donate" name="Quantity"></textarea>
            <label for="text">Donation-Date:</label>
            <input type="date" id="Date" name="DonationDate">
            <button type="submit"   name="submitid">Donate</button>
            <button type="submit"><a role="button"  href="bookdetails.php" style="font-size:20px;text-decoration:none">Other donars</a></button>
            
         
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="bookScript.js"></script>
</body>
</html>
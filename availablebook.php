<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="availablebook.css"/>


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
        $BookName=$_POST['BookName'];
        $AuthorName=$_POST['AuthorName'];
        $Edision=$_POST['Edision'];
        $AvailableAmount=$_POST['AvailableAmount'];
        $NgoName=$_POST['NgoName'];
        $NgoLocation=$_POST['NgoLocation'];
        
        
        $query1="INSERT INTO book_avail(BookName,AuthorName,Edision,AvailableAmount,NgoName,NgoLocation)VALUES('$BookName','$AuthorName','$Edision','$AvailableAmount','NgoName','NgoLocation')";

        $res1=mysqli_query($con,$query1);

        if($res1){
            echo "Data Updated Successfully";
        }
        else{
            echo "Not Connected";
        }
        
      } 


    ?>
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1 style="color:white">Update Available Books Records</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="availablebook.php" >
            
        <!-- <label for="text" >Donar-Name</label>
            <input type="text" id="DonarName" placeholder="Full name" name="DonarName"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Contact</label>
            <input type="tel" id="PhoneNumber" placeholder="5555555555" name="PhoneNumber"
            required pattern="[0-9]{10}" />
        
            <label for="text" >Email</label>
            <input type="email" id="Email" placeholder="email@address.com" name="Email"
            required/> -->
        
            
            <label for="textarea" >Book-Name</label>
            <textarea type="text" placeholder="enter Book Name" name="BookName"></textarea>
            <label for="textarea" >Author-Name</label>
            <textarea type="text" placeholder="enter Author Name" name="AuthorName"></textarea>
            <label for="text" >Edition</label>
            <textarea type="text" placeholder="enter Edision" name="Edision"></textarea>
            
            <label for="textarea" >Available-Amount</label>
            <textarea type="text" placeholder="enter Amount" name="AvailableAmount"></textarea>
            <label for="textarea" >NGO-Name</label>
            <textarea type="text" placeholder="enter Ngo Name" name="NgoName"></textarea>
            <label for="textarea" >NGO-Location</label>
            <textarea type="text" placeholder="enter Ngo Location" name="NgoLocation"></textarea>
            <!-- <label for="text">Donation-Date:</label>
            <input type="date" id="Date" name="DonationDate"> -->
            <button type="submit"   name="submitid">Donate</button>
            <button type="submit"><a role="button"  href="do_availbook_display.php" style="font-size:20px;text-decoration:none">Available</a></button>
            
         
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="bookScript.js"></script>
</body>
</html>
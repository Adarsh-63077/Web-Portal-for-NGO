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
        $MedicineName=$_POST['MedicineName'];
        $AvailableAmount=$_POST['AvailableAmount'];
        $ExpiryDate=$_POST['ExpiryDate'];
        $NgoName=$_POST['NgoName'];
        $NgoLocation=$_POST['NgoLocation'];
        
        
        $query1="INSERT INTO medi_avail(MedicineName,AvailableAmount,ExpiryDate,NgoName,NgoLocation)VALUES('$MedicineName','$AvailableAmount','$ExpiryDate','$NgoName','$NgoLocation')";

        $res1=mysqli_query($con,$query1);

        if($res1){
            echo "Data Updated Successfully";
        }
        else{
            echo "Not Submited";
        }
        
      } 


    ?>
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1 style="color:white">Update Available Medicine Records</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="#" >
            
        <!-- <label for="text" >Donar-Name</label>
            <input type="text" id="DonarName" placeholder="Full name" name="DonarName"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Contact</label>
            <input type="tel" id="PhoneNumber" placeholder="5555555555" name="PhoneNumber"
            required pattern="[0-9]{10}" />
        
            <label for="text" >Email</label>
            <input type="email" id="Email" placeholder="email@address.com" name="Email"
            required/> -->
        
            
            <label for="textarea" >Medicine-Name</label>
            <textarea type="text" placeholder="enter Medicine Name" name="MedicineName"></textarea>
            <label for="textarea" >Available-Amount</label>
            <textarea type="text" placeholder="enter Amount" name="AvailableAmount"></textarea>
            
            <label for="text">Expiry-Date:</label>
            <input type="date" id="Date" name="ExpiryDate"> 
            <label for="textarea" >NGOs-Name</label>
            <textarea type="text" placeholder="enter Ngo Name" name="NgoName"></textarea>
            <label for="textarea" >NGOs-Location</label>
            <textarea type="text" placeholder="enter Ngo Location" name="NgoLocation"></textarea>
            
            
           
            <button type="submit"   name="submitid">Update</button>
            <button type="submit"><a role="button"  href="do_availmedi_display.php" style="font-size:20px;text-decoration:none">Available</a></button>
            
         
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="bookScript.js"></script>
</body>
</html>
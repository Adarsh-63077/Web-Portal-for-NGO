<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="cloth.css"/>


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
        $DonerName=$_POST['DonerName'];
        $PhoneNumber=$_POST['PhoneNumber'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        $Cloth=$_POST['Cloth'];
        $Quantity = $_POST['Quantity'];
        $BuyDate=$_POST['BuyDate'];
        $DonationDate=$_POST['DonationDate'];
        
        $query1="INSERT INTO cloth_detail(DonerName,PhoneNumber,Email,Address,Cloth,Quantity,BuyDate, DonationDate) VALUES('$DonerName','$PhoneNumber','$Email','$Address','$Cloth','$Quantity','$BuyDate','$DonationDate')";
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
        <h1 style="color:green">Lets Donate</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="cloth.php" >
            
        <label for="text" >Name</label>
            <input type="text" Name = "DonerName"  id="DonerName" placeholder="Full name" name="DonerName"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Contact</label>
            <input type="tel" id="PhoneNumber" placeholder="5555555555" name="PhoneNumber"
            required pattern="[0-9]{10}" />
        
            <label for="text" >Email</label>
            <input type="email" id="Email" placeholder="email@address.com" name="Email"
            required/>
        
            <label for="text" >Address</label>
            <textarea type="text" placeholder=" enter location" name="Address"></textarea>
            
            <label for="textarea" >Cloth</label>
            <textarea type="text" placeholder="enter things you want to donate" name="Cloth"></textarea>

            <label for="textarea" >Quantity</label>
            <textarea type="text" placeholder="enter things you want to donate" name="Quantity"></textarea>

            <label for="text">Buy-Date:</label>
            <input type="date" id="BuyDate" name="BuyDate">
            <label for="text">Donation-Date:</label>
            <input type="date" id="DonationDate" name="DonationDate">
            <button type="submit"   name="submitid">Donate</button>
            <button type="submit"><a role="button"  href="clothdetails.php" style="font-size:20px;text-decoration:none">Other donars</a></button>
            
         
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="clothScript.js"></script>
</body>
</html>
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ipfinal";
    $conn = mysqli_connect($host, $user, $pass, $db) or die('Error Connecting');
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="medicine.css"/>


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

if(isset($_POST['submitid']))
    {
        $Name=$_POST['Name'];
        $Phone=$_POST['Phone'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        $MedicineName=$_POST['MedicineName'];
        $Quantity=$_POST['Quantity'];
        $DonationDate=$_POST['DonationDate'];
        $ExpiryDate=$_POST['ExpiryDate'];

        $query1="INSERT INTO medicine(Name,Phone,Email,Address,MedicineName,Quantity,DonationDate,ExpiryDate) VALUES('$Name','$Phone','$Email','$Address','$MedicineName','$Quantity','$DonationDate','$ExpiryDate');";
        $res1=mysqli_query($conn,$query1);
        
      
    } 


    ?>
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1  style="color:white">Lets Donate</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="medicine.php" >
            
        <label for="text" >Name</label>
            <input type="text" id="name" placeholder="Full name" name="Name"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Contact</label>
            <input type="tel" id="phone" placeholder="5555555555" name="Phone"
            required pattern="[0-9]{10}" />
        
            <label for="text" >Email</label>
            <input type="email" id="email" placeholder="email@address.com" name="Email"
            required/>
        
            <label for="text" >Address</label>
            <textarea type="text" placeholder=" enter location" name="Address"></textarea>
<!--             
            <label for="textarea" >Things you want to donate</label>
            <textarea type="text" placeholder="enter things you want to donate" name="Goods"></textarea>
            <label for="text">Date:</label>
            <input type="date" id="Date" name="Date"> -->
            <label for="textarea" >Medicine Name</label>
            <textarea type="text" placeholder="enter things you want to donate" name="MedicineName"></textarea>
            <label for="text" >Quantity</label>
            <input type="int " id="name" placeholder="full name" name="Quantity" not-required>
            <label for="date"> Donation Date:</label>
            <input type="date" id="date" name="DonationDate"/>
            <label for="date"> Expiry Date:</label>
            <input type="date" id="date" name="ExpiryDate"/>
            <button type="submit"   name="submitid">Donate</button>
            <button type="submit"><a role="button"  href="medicinedetails.php" style="font-size:20px;text-decoration:none">Other donars</a></button>
            
         
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="medicineScript.js"></script>
</body>
</html>
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

    <link rel="stylesheet" href="receiver.css"/>


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
      
        $Address=$_POST['Address'];
        $Goods=$_POST['Goods'];
        $Quantity=$_POST['Quantity'];
        $NgoName=$_POST['NgoName'];
        $Date=$_POST['Date'];

        
        $query1="INSERT INTO receiver(Name,Phone,Address,Goods,Quantity,NgoName,Date) VALUES('$Name','$Phone','$Address','$Goods','$Quantity','$NgoName''$Date')";
        $res1=mysqli_query($conn,$query1);
        
        
      
    } 


    ?>
    <div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1 style="color: white">Receiver Form</h1>
        <form id="donate-form" class="donate-form"
        data-aos-easing="ease-in-out" method="post" action="receiver.php" >
            
        <label for="text" >Name</label>
            <input type="text" id="Name" placeholder="Full name" name="Name"
            required minlength="2" maxlength="100"/>
        
            <label for="text" >Contact</label>
            <input type="tel" id="Phone" placeholder="5555555555" name="Phone"
            required pattern="[0-9]{10}" />
        
            <!-- <label for="text" >Email</label>
            <input type="email" id="email" placeholder="email@address.com" name="Email"
           not-required/> -->
        
            <label for="text" >Address</label>
            <textarea type="text" placeholder=" enter location" name="Address"></textarea>
            
            <!-- <label for="text" name="Choose" >Choose</label>
            <textarea type="text" placeholder=" Medicine/Book/Cloth " name="Choose"></textarea> -->
            <!-- <select class="custom-select mr-sm-2" id="donate-form">
               <option selected>Choose</option> 
              <option value="1">Clothes</option>
              <option value="2">Medicine</option>
              <option value="3">Books</option>
            </select> -->
            <label for="textarea" >Name of things you get</label>
            <textarea type="text" placeholder=" Name enter things you want " name="Goods"></textarea>
            <label for="textarea" >Quantity</label>
            <textarea type="text" placeholder=" Quantity" name="Quantity"></textarea>
            <label for="textarea" >Ngo Name</label>
            <textarea type="text" placeholder=" Ngo Name  " name="NgoName"></textarea>
            <label for="text">Date:</label>
            <input type="date" id="Date" name="Date">
            <button type="submit"   name="submitid">Submit</button>
            <button type="submit"><a role="button"  href="receiverdetails.php" style="font-size:20px;text-decoration:none">Other Receiver</a></button>
            
         
    
        </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="receiverScript.js"></script>
</body>
</html>
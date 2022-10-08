<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="adminstyle.css">
    <style>
    .container{
    position: absolute;
    top: 100px;
    background-color: rgb(153, 157, 212);
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 600px;
    height: 500px;
    border: black;
    box-shadow: 0 5px 30px 10px rgba(0,0,0,0.4);
    margin-left:350px;
}
a{
    color: black;
}
a:hover
{
    color: grey;
}
        </style>
</head>
<body>
<div class="container"  data-aos="zoom-in" data-aos-duration="1000">
        <h1>Welcome back Admin!!!</h1>
    <button type="submit"><a  href="donarinfo3.php" style="text-decoration:none">Donors</a></button>
    <button type="submit"><a  href="do_ngo_display.php" style="text-decoration:none">NGOS</a></button>
    <button type="submit"><a  href="availableinfo2.php" style="text-decoration:none">AVAILABLE</a></button>
    <button type="submit"><a  href="userdetailsadmin.php" style="text-decoration:none">Users</a></button>
    <button type="submit"><a  href="receiverdetails.php" style="text-decoration:none">RECEIVER</a></button>
    
    <!-- <button type="submit"><a  href="availableinfo.php" style="text-decoration:none">Available Things</a></button>
     -->
    </div>  
       
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="adminstyle.js"></script>
    
</body>
</html>
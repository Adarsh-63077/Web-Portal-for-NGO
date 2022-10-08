<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="adminstyle1.css">
    <style>
    .container{
    position: absolute;
    top: 100px;
    background-color: rgb(153, 157, 212);
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 600px;
    height: 400px;
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
        <h1>Lets See Available Things !!!</h1>
    <button type="submit"><a  href="availablebookdetails.php" style="text-decoration:none"> Books</a></button>
    <button type="submit"><a  href="availablemedidetails.php" style="text-decoration:none"> Medicines</a></button>
    <button type="submit"><a  href="availableclothdetails.php" style="text-decoration:none"> Clothes</a></button>
    <!-- <button type="submit"><a  href="receiverdetails.php" style="text-decoration:none">RECEIVER</a></button> -->
    <!-- <button type="submit"><a  href="availableinfo.php" style="text-decoration:none">Available Things</a></button>
     -->
    </div>  
       
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="adminstyle2.js"></script>
    
</body>
</html>
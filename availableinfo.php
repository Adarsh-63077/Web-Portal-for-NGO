
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
    background-color: gray;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 1000px;
    height: 400px;
    border: black;
    box-shadow: 0 5px 30px 10px rgba(0,0,0,0.4);
    margin-left:250px;
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
        <h1>Update the Rcords!!!</h1>
    <button type="submit"><a  href="do_display1.php" style="text-decoration:none">BOOKS</a></button>
    <button type="submit"><a  href="do_medicine_display.php" style="text-decoration:none">MEDICINES</a></button>
    <button type="submit"><a  href="do_cloth_display.php" style="text-decoration:none">CLOTHES</a></button>
    
   
           
    
    </div>  
       
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script src="adminstyle.js"></script>
    
</body>
</html>

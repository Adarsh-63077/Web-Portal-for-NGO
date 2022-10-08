<?php
   include 'medicon.php';
   if(isset($_GET['deleteid'])){
       $id = $_GET['deleteid'];

       $sql = "delete from `cloth_detail` where id=$id";
       $result = mysqli_query($con, $sql);

       if($result){
           
           header('location:do_cloth_display.php');
       }
       else{
           echo "Not working";
       }
   }

?>
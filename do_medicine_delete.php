<?php
   include 'medicon.php';
   if(isset($_GET['deleteid'])){
       $id = $_GET['deleteid'];

       $sql = "delete from `medicine` where id=$id";
       $result = mysqli_query($con, $sql);

       if($result){
           
           header('location:do_medicine_display.php');
       }
       else{
           echo "Not working";
       }
   }

?>
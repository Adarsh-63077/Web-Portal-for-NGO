<?php
   include 'medicon.php';
   if(isset($_GET['deleteid'])){
       $id = $_GET['deleteid'];

       $sql = "delete from `ngosignin` where id=$id";
       $result = mysqli_query($con, $sql);

       if($result){
       
          header('location:do_ngo_display.php');
       }
       else{
           echo "Not working";
       }
   }

?>
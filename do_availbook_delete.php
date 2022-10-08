<?php
   include 'medicon.php';
   if(isset($_GET['deleteid'])){
       $id = $_GET['deleteid'];

       $sql = "delete from `book_avail` where id=$id";
       $result = mysqli_query($con, $sql);

       if($result){
           
           header('location:do_availbook_display.php');
       }
       else{
           echo "Not working";
       }
   }

?>
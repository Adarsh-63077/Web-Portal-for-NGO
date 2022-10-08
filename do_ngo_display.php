<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container"> 
   <table width="100%" border="2" class="table table-striped my-5 ">
      <thead  style="color:white;background-color: grey;">
    <tr>
      <th scope="col">id</th>
      <th scope="col">NgoName</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Location</th>
      <!-- <th scope="col">Password</th>
      <th scope="col">ConfirmPassword</th> -->
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

        include 'medicon.php';        

        $sql = "select * from `ngosignin`";
        $result = mysqli_query($con, $sql);
        if($result)
        {
           while($row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               $NgoName = $row['NgoName'];
               $Contact = $row['Contact'];
               $Email = $row['Email'];
               $Location = $row['Location'];
              //  $Password = $row['Password'];
              //  $ConfirmPassword = $row['ConfirmPassword'];

               echo '<tr>
               <th scope="row">'.$id.'</th>
               <td>'.$NgoName.'</td>
               <td>'.$Contact.'</td>
               <td>'.$Email.'</td>
               <td>'.$Location.'</td>
    
               <td>
                    <button class = "btn btn-primary"><a href="do_ngo_update.php?updateid='.$id.'" class = "text-light">Block</a></button>
                    <button class = "btn btn-danger"><a href="do_ngo_delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
               </td>
             </tr>';
           }
        }
    ?>
    

  </tbody>
</table>
    </div>
</body>
</html>
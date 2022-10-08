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
   <table width="100%" border="2" class="table table-striped my-5 " margin-right: 100px;>
      <thead  style="color:white;background-color: #800080 ;">
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">ClothType</th>
      <th scope="col">ClothName</th>
      <th scope="col">Size</th>
      <th scope="col">AvailableAmount</th>
      <th scope="col">NgoName</th>
      <th scope="col">NgoLocation</th>

      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

        include 'medicon.php';        

        $sql = "select * from `cloth_avail`";
        $result = mysqli_query($con, $sql);
        if($result)
        {
           while($row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               
               $ClothType = $row['ClothType'];
               $ClothName = $row['ClothName'];
               $Size = $row['Size'];
               $AvailableAmount = $row['AvailableAmount'];
               $NgoName = $row['NgoName'];
               $NgoLocation = $row['NgoLocation'];

               echo '<tr>
               <th scope="row">'.$id.'</th>
               
               <td>'.$ClothType.'</td>
               <td>'.$ClothName.'</td>
               <td>'.$Size.'</td>
               <td>'.$AvailableAmount.'</td>
               <td>'.$NgoName.'</td>
               <td>'.$NgoLocation.'</td>
               <td>
                    <button class = "btn btn-primary"><a href="do_availcloth_update.php?updateid='.$id.'" class = "text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href="do_availcloth_delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
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
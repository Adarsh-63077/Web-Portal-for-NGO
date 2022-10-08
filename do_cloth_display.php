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
      <th scope="col">DonerName</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Cloth</th>
     
      <th scope="col">Quantity</th>
      <th scope="col">BuyDate</th>
      <th scope="col">DonationDate</th>

      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

        include 'medicon.php';        

        $sql = "select * from `cloth_detail`";
        $result = mysqli_query($con, $sql);
        if($result)
        {
           while($row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               $DonerName = $row['DonerName'];
               $PhoneNumber = $row['PhoneNumber'];
               $Email = $row['Email'];
               $Address = $row['Address'];
               $Cloth = $row['Cloth'];
              
               $Quantity = $row['Quantity'];
               $BuyDate = $row['BuyDate'];
               $DonationDate = $row['DonationDate'];

               echo '<tr>
               <th scope="row">'.$id.'</th>
               <td>'.$DonerName.'</td>
               <td>'.$PhoneNumber.'</td>
               <td>'.$Email.'</td>
               <td>'.$Address.'</td>
               <td>'.$Cloth.'</td>
               
               <td>'.$Quantity.'</td>
               <td>'.$BuyDate.'</td>
               <td>'.$DonationDate.'</td>
               <td>
                    <button class = "btn btn-primary"><a href="do_cloth_update.php?updateid='.$id.'" class = "text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href="do_cloth_delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
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
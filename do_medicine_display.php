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
   <table width="100%" border="2" class="table table-striped my-2 mx-0 " margin-right: 100px;>
      <thead  style="color:white;background-color: #800080 ;">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col" 20%>Address</th>
      <th scope="col">MedicineName</th>
      <th scope="col">Quantity</th>
      <th scope="col">DonationDate</th>
      <th scope="col">ExpiryDate</th>

      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

        include 'medicon.php';        

        $sql = "select * from `medicine`";
        $result = mysqli_query($con, $sql);
        if($result)
        {
           while($row = mysqli_fetch_assoc($result)){
               $id = $row['id'];
               $Name = $row['Name'];
               $Phone = $row['Phone'];
               $Email = $row['Email'];
               $Address = $row['Address'];
               $MedicineName = $row['MedicineName'];
               $Quantity = $row['Quantity'];
               $DonationDate = $row['DonationDate'];
               $ExpiryDate = $row['ExpiryDate'];

               echo '<tr>
               <th scope="row">'.$id.'</th>
               <td>'.$Name.'</td>
               <td>'.$Phone.'</td>
               <td>'.$Email.'</td>
               <td>'.$Address.'</td>
               <td>'.$MedicineName.'</td>
               <td>'.$Quantity.'</td>
               <td>'.$DonationDate.'</td>
               <td>'.$ExpiryDate.'</td>
               <td>
                    <button class = "btn btn-primary"><a href="do_medicine_update.php?updateid='.$id.'" class = "text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href="do_medicine_delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
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
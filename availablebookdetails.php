<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "select * from book_avail WHERE CONCAT(BookName,AuthorName,Edision,AvailableAmount,NgoName,NgoLocation) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
else 
{
    $query = "select * from book_avail";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect =mysqli_connect("localhost", "root", "", "ipfinal");
    $filter_Result = mysqli_query($connect, $query);
    if (!$filter_Result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
    return $filter_Result;
}

?>
<html>
<head>
  <style>
    th ,tr{
       padding: 12px;
       font-size: 16px;
       border:1px solid black;
      }
    td{
      padding: 8px;
      font-size: 15px;
      border:1px solid black;
    
    }
    tr:nth-child(even){
      background-color: #f2f2f2;
    }

    tr:hover{
      background-color: #ddd;
    }
    
  </style>
</head>

  <body>
    <h2>Have a look at Available Books!!!</h2>
  <!--<table width="100%" border="2" class="table table-striped ">
      <thead bgcolor="gray"  style="color:white; font-size: 20px; ">   
          
          <th>Name of Donar</th>
            <th >Phone Number</th>
            <th>Email Id</th>
            <th>Address </th>
            <th>Goods you want to donate</th>
            <th> Date</th>
           
      </thead>
      <form method="POST" action="donatedetails.php">
      <tbody>
      <?php
       // $conn=mysqli_connect("localhost","root","","ipfinal") or die("connection not established");
        
      //  $query=mysqli_query($conn,"select * from donar");
        //while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
              
            <td>// echo $Name=$row['Name']; ?></td>
                    <td><?php //echo $Phone=$row['Phone']; ?></td>
                    <td><?php //echo $Email=$row['Email']; ?></td>
                    <td><?php //echo $Address=$row['Address']; ?></td>
                    <td><?php //echo $Goods=$row['Goods']; ?></td>
                    <td><?php //echo $Date=$row['Date']; ?></td>
            </tr>
          <?php
        
      
      ?>
      </tbody>
</table>
!-->
        <form action="availablebookdetails.php" method="post">
    <center>
          <div class="no-print">
            <input type="text" name="valueToSearch" placeholder=" Search here?">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit"  name="search" value="Search">
             </div></center>
           
  <br><br>
   <div class="container"> 
   <table width="100%" border="2" class="table table-striped ">
      <thead  style="color:white;background-color: grey;">
        
                   
                    <th>BookName</th>
                    <th>AuthorName</th>
                    <th>Edision</th>
                    <th>AvailableAmount</th>
                    <th>NgoName</th>
                    <th>NgoLocation</th>
            



                             </thead>
      <tbody>
                          <?php while($row = mysqli_fetch_array($search_result)):?>
                              
                   <tr>
                              
                              <td><?php echo $BookName=$row['BookName']; ?></td>
                              <td><?php echo $AuthorName=$row['AuthorName']; ?></td>
                              <td><?php echo $Edision=$row['Edision']; ?></td>
                              <td><?php echo $AvailableAmount=$row['AvailableAmount']; ?></td>
                              <td><?php echo $NgoName=$row['NgoName']; ?></td>
                              <td><?php echo $NgoLocation=$row['NgoLocation']; ?></td>
                              
                   </tr>
                 <?php endwhile;?>
           </tbody>
    </table>
        </form>
        </div>

</body>
  
    </html> 
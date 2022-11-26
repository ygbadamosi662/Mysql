<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
   include_once('navi.php');
   include_once('connector.php');
   
   $student_details_sql = "SELECT * FROM under_g";
   $student_details_result = mysqli_query($conn,$student_details_sql);
   
   
   echo '<table>';
      echo '<h2 id="head">Student Information</h2>';
      echo '<th>id</th>';
      echo '<th>First Name</th>';
      echo '<th>Last Name</th>';
      echo '<th>Reg no.</th>';
      echo '<th>dob</th>';
      echo '<th>Reg date</th>';
      echo '<th>Last update</th>';
      echo '<th>Status</th>';
      echo '<th>Phone no.</th>';
      echo '<th>Email</th>';
      echo '<th>Tools</th>';
   while($row = mysqli_fetch_assoc($student_details_result)){
       echo '<tr>';
     
       echo '<td>'.$row['id'].'</td>';
       echo '<td>'.$row['Fname'].'</td>';
       echo '<td>'.$row['Lname'].'</td>';
       echo '<td>'.$row['regNum'].'</td>';
       echo '<td>'.$row['dob'].'</td>';
       echo '<td>'.$row['created_date'].'</td>';
       echo '<td>'.$row['update_date'].'</td>';
       echo '<td>'.$row['student_status'].'</td>';
       echo '<td>'.$row['pNum'].'</td>';
       echo '<td>'.$row['email'].'</td>';
       echo '<td>'.'<a href="update.php?id='.$row['id'].'">Edit</a>'." ".'<a href="delete.php?id='.$row['id'].'">DELETE</a>'.'</td>';
     
       echo '</tr>';
           
     
   }
   echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table{
         border:2px solid green;
         align-self: center;
         /* padding-left: 2rem; */
         /* display: flex; */
         /* background-color:blue; */
         justify-content: center;
         text-align: center;
         
      }
      th{
         padding: 1rem;
         background-color: #f7b09b ;
         border:2px solid green;
         /* color: white; */
         

      }
      #head{
         margin-left: 40%;
      }  
      td{
         padding: 0.5rem;
         background-color:yellow;
         border:2px solid green; 
      }
      td a{
         text-decoration: none;
      }
      
   </style>
</head>
<body>
   
</body>
</html>
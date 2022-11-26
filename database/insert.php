<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
    
     include_once('connector.php');

     $students = "INSERT INTO `students_info`(`Fname`, `Lname`, `regNum`, `dob`, `email`, `student_status`, `pNum`) VALUES ('saidat','gbadamosi','2022/8989/tyui','1997-11-11','ygbadamosi662@gmail','active','08165935483')";

     $student_result = mysqli_query($conn,$students);
   //   var_dump($student_result);
     if($conn->query($students) == TRUE){
        echo "student data inserted succesfully";
      // die("not inserted:".mysqli_connect_error());
     }else{
         echo "Error: " . $students . "<br>" . $conn->error;
     }
   //   echo "here";
        
     
?>
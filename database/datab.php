<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
// to generate registration number
    function regComplete($a){
        $yr = date("Y");
        $format;
        $len = strlen($a);
        $count = array();
        
        if($len == 4){
            $count[0] = a;
        }else{
            $j;
            for($j = 0; $j < (4 - $len); $j++){
                $count[$j] = "0";
                if (($j + 1) == (4 - $len)){
                    $count[$j+1] = $a;
                }
            }
        }
        $format = $yr."/".implode("",$count);

        $upD = "UPDATE `under_g` SET `regNum` = '$format', `student_status` = 'active' WHERE id = '".$a."'";
        
        $upD_result = mysqli_query($GLOBALS['conn'],$upD);
        
        if ($upD_result){
            echo "Registration number and status assigned appropriately,registration successful";
        }
        
    }
    include_once('navi.php');
    include_once('connector.php');

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];

        $student = "INSERT INTO `under_g`(`Fname`, `Lname`, `dob`, `email`, `pNum`) VALUES ('".$fname."','".$lname."','".$dob."','".$email."','".$phone."')";

        $student_result = mysqli_query($conn,$student);

        if($student_result){
            echo "registration succesful";
        }

        // if($conn->query($student) == TRUE){
        // echo "student data inserted succesfully";
        // }else{
        //     echo "Error: " . $student . "<br>" . $conn->error;
        // }
        $student = "SELECT * FROM `under_g`";
        $student_result = mysqli_query($conn,$student);
        $row = mysqli_fetch_assoc($student_result);
        // var_dump($student_result);
        
        regComplete($row['id']);


    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin-top: 1rem;
            margin-left: 35%;
            display: flex;
            flex-direction: column;
            width: 35%;
            background-color: #e8cab9 ;
            align-items: center;
            /* color: #00abbb ; */
        }
        #on{
            width: 15rem;
            height: 2rem;
            margin-bottom: 0.5rem;
        }
        #btn{
            width: 10rem;
            height: 2.5rem;
            background-color: #8c2473;
            color: white;
            margin-bottom: 0.5rem;
        }
        #btn:hover{
            background-color: #e8cab9;
            color: #8c2473;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>REGISTER A STUDENT</h2>
        <label for="">First Name</label> 
        <input type="text" name="fname" value="<?php echo isset($_POST['fname'])?$_POST['fname']: ""; ?>" id="on"> 

        <label for="">Last Name</label>
        <input type="text" name="lname" value="<?php echo isset($_POST['lname'])?$_POST['lname']: ""; ?>" id="on">
         
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']: ""; ?>" id="on"> 

        <label for="">Phone</label>
        <input type="text" name="phone" value="<?php echo isset($_POST['phone'])?$_POST['phone']: ""; ?>" id="on"> 
        
        <label for="">Date Of Birth</label>
        <input type="date" name="dob" value="<?php echo isset($_POST['dob'])?$_POST['dob']: "" ; ?>" id= "on"> <br> <br>

        <input type="submit" id="btn" name="submit">
    </form>
</body>
</html>


     
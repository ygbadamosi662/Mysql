<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
    include_once('navi.php');
    include_once('connector.php');
   
    if(isset($_GET['id'])){
    
        $you = $_GET['id'];

        $student = "DELETE FROM `under_g` WHERE id = '".$you."'";

        $student_result = mysqli_query($conn,$student);

        if($student_result){
            echo "its gone";
        }

    }
    if(isset($_POST['DEL'])){
        if((strlen($_POST['pit']) == 9) && (strrpos($_POST['pit'],'/') == 4)){
            $you = $_POST['pit'];
            $student = "DELETE FROM `under_g` WHERE regNum = '".$you."'";

            $student_result = mysqli_query($conn,$student);

            if($student_result){
                echo "its gone";
            }
            else{
                echo "registration number does not exist!";
            }
        }
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
        
        #divi{
            display: flex;
            gap: 3rem;
            background-color: #e8cab9;
            height: 10rem;
            justify-content: center;
            align-items: center;
        }
        #divi input{
            height: 2rem;
            width: 15rem;
        }
        #divi #btn{
            width: 7rem;
        }
        #divi #btn:hover{
            background-color: #8c2473;
            color: white;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h3>DELETE A STUDENT'S RECORD</h3>
        <div id="divi">
            <label for="">Enter the student's Reg no.</label>
            <input type="text" name="pit" id="on">
            <input type="submit" name="DEL" id="btn">
        </div>
        
    </form>
</body>
</html>
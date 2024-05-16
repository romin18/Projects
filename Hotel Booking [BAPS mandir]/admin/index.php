<?php
    require('Inc/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('Include/links.php')?>

    <style>
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;   
        }
    </style>
</head>
<body class="bg-div">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="post">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" placeholder="Admin Name" class="form-control shadow-none text-center">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" placeholder="password" class="form-control shadow-none text-center">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none"  >LOGIN</button>
            </div>
        </form>
    </div>
    
    <?php 

        // $hname = 'localhost';
        // $uname = 'root';
        // $pass = '';
        // $db = 'nilkanth';

        // $conn = mysqli_connect($hname,$uname,$pass,$db);

        // if(!$conn){
        //     die("cannot connect".mysqli_connect_error());
        // }


        // $admin_name = $_POST["admin_name"];
        // $admin_pass = $_POST["admin_pass"];
        
        // $conn = new mysqli("localhost","root","","nilkanth");
        
        // if($conn->connect_error){
        //     die("Cannot Connect to Database".$conn->connect_error);
        // }
        
        // else{
        //     $stmt = $conn->prepare("insert into admin_cred(admin_name,admin_pass) value(?,?)");
        //     $stmt->bind_param("ss",$admin_name,$admin_pass);
        //     $stmt->execute();
        //     echo "submit successfully...";
        //     $stmt->close();
        //     $conn->close();
        // }
        //     echo "connection successfull";
        
        // function filteration($data){
        //     foreach($data as $key => $value){
        //         $data[$key] = trim($value);
        //         $data[$key] = stripslashes($value);
        //         $data[$key] = htmlspecialchars($value);
        //         $data[$key] = strip_tags($value);
        //     }
        //     return $data;
        // }

        // function select($sql,$value,$datatypes){
        //     $con = $GLOBALS('conn'); //con is inside the function so we used GLOBALS
        //     if($stmt = mysqli_prepare($con,$sql))
        //     {
        //         mysqli_stmt_bind_param($stmt,$datatypes,...$value);//... is splat operator used to pass multiple values
        //         if(mysqli_stmt_execute($stmt))
        //         {
        //             $res = mysqli_stmt_get_result($stmt);
        //             mysqli_stmt_close($stmt);
        //             return $res;
        //         }
        //         else{
        //             mysqli_stmt_close($stmt);
        //             die("query not executed - select");
        //         }
        //     }
        //     else
        //     {
        //         die("query not prepared - select");
        //     }
        // }


        // if(isset($_POST['login']))
        // {
        //     $frm_data = filteration($_POST);
            
        //     $query = "SELECT * from `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?"; //? is used for prepared statement
        //     $value = [$frm_data['admin_name'],$frm_data['admin_pass']];

        //     $res = select($query,$value,"ss");//s means string datatype
        //     print_r($res);
        // }
    ?> 




    <?php require('Include/scripts.php')?>
</body>
</html>
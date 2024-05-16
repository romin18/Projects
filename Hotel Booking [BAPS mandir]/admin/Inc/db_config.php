<?php 
    // $hname = 'localhost';
    // $uname = 'root';
    // $pass = '';
    // $db = 'nilkanth';

    // $conn = mysqli_connect($hname,$uname,$pass,$db);

    // if(!$conn){
    //     die("cannot connect".mysqli_connect_error());
    // }
    $admin_name = $_POST["admin_name"];
    $admin_pass = $_POST["admin_pass"];
    
    $conn = new mysqli("localhost","root","","nilkanth");
    
    if($conn->connect_error){
        die("Cannot Connect to Database".$conn->connect_error);
    }
    
    else{
        $stmt = $conn->prepare("insert into admin_cred(admin_name,admin_pass) value(?,?)");
        $stmt->bind_param("ss",$admin_name,$admin_pass);
        $stmt->execute();
        echo "submit successfully...";
        $stmt->close();
        $conn->close();
    }
        echo "connection successfull";
        
    //echo "I am Romin";
?>
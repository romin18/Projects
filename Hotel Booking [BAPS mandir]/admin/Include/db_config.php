<?php 

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

    // function filteration($data){
    //     foreach($data as $key => $value){
    //         $data[$key] = trim($value);
    //         $data[$key] = stripslashes($value);
    //         $data[$key] = htmlspecialchars($value);
    //         $data[$key] = strip_tags($value);
    //     }
    //     return $data;
    // }

    // if(isset($_POST['login']))
    //     {
    //         $frm_data = filteration($_POST);
    //         echo"<h1>$frm_data[admin_name]</h1>";
    //         echo"<h1>$frm_data[admin_pass]</h1>";
    //         print_r($frm_data);
    //     }
?>

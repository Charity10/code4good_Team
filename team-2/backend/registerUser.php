<?php

include('connect.php');

if (isset($_POST['submit'])){
    $name = $_POST['first_name']." ".$_POST['last_name'] ;
    $email = $_POST['email'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $blood_group = $_POST['blood_group'];
    $gender = $_POST['gender'];
    $phoneNo = $_POST['phone'];

    $date1 = strtr($_REQUEST['birthday'], '/', '-');
    $date_of_birth = date('Y-m-d', strtotime($date1));

    $sql = "INSERT INTO donors(fullName, blood_group, email, gender, date_of_birth, phoneNo) 
    VALUES('$name', '$blood_group','$email','$gender', '$date_of_birth','$phoneNo')";

    if($connection->query($sql))
    {
        echo "<script>window.location.href='../login.php';alert('Registration successful.'); </script>";
    }
    else{
        header("location: ../frontend/colorlib-regform-4/index.html");
    }
    
}

?>
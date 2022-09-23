<?php

include('connect.php');

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO volunteers(`name`, email, `message`) VALUES('$name','$email','$message')";

    if($connection->query($sql))
    {
        echo "<script>window.location.href='../login.php';alert('Registration successful. Thank you for volunteering!'); </script>";
    }
    else{
        header("location: ../frontend/colorlib-regform-4/index.html");
    }
    
}

?>
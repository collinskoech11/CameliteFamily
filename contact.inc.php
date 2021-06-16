<?php

include_once "connect.php";

//CONVERTING HTML TO PHP
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

//ensuring that data is valid....error handling logic gate
if(empty($name)){
    echo '<script>alert("A Name is required")</script>';
}
else if(empty($email)){
    echo '<script>alert("Email is required")</script>';
}
else if(empty($message)){
    echo '<script>alert("Message is required")</script>';
}

//If data is clean then we feed it to the DB
else{
    $sql = "INSERT INTO user(name, email, message) VALUES('$name','$email','$message')";
}


 //Feedback if data has been inserted
if(isset($_POST['submit'])){
    if(mysqli_query($connection, $sql)){
        echo '<script>alert("Your message has been submitted successfully.You will get a reply shortly")</script>';
    }
    else{
        echo '<script>alert("Error: Information was not captured well. Try again!!")</script>';
    }
}
?>



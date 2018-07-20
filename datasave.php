<?php
    require 'connect.php';
   
    $name = $_POST['name'];
    $city= $_POST['city'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    
    $sql="INSERT INTO `data`(`name`, `city`, `address`,`email`) VALUES ('$name','$city','$address','$email')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:index.html");
    }
?>
<?php
   $slide1 = $_POST['slide1'];  
   $slide2 = $_POST['slide2'];  
   $slide3 = $_POST['slide3'];  
   $slide4 = $_POST['slide4'];  
   $slide5 = $_POST['slide5'];  
   $slide6 = $_POST['slide6'];  
   
   $conn = new mysqli('localhost','root','','robotarm');
   if($conn->connect_error){
      die('connection failed :'.$conn -> connect_error);
   }else{
      $data = $conn->prepare("INSERT INTO control(motor1,motor2,motor3,motor4,motor5,motor6) values(?,?,?,?,?,?) ");
      $data->bind_param("iiiiii",$slide1,$slide2 ,$slide3,$slide4,$slide5,$slide6);
      $data->execute();
      echo "motor moved successfully..";
      $data->close();
      $conn->close();
   }
?>
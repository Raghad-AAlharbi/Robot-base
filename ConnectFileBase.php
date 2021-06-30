<?php
   $Right = $_POST['Right'];  
   $Left = $_POST['Left'];  
   $Forward = $_POST['Forward'];  
   $Backward = $_POST['Backward'];  
   $Stop = $_POST['Stop'];  
   
   $conn = new mysqli('localhost','root','','robotarm');
   if($conn->connect_error){
      die('connection failed :'.$conn -> connect_error);
   }else{
      $data = $conn->prepare("INSERT INTO robotBase(Right,left,forward,backward,stop) values(?,?,?,?,?,?)");
      $data->bind_param("iiiiii",$Right,$Left ,$Forward,$Backward,$Stop);
      $data->execute();
      echo "motor moved successfully..";
      $data->close();
      $conn->close();
   }
?>
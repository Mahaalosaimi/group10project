<?php
 
 $name=$_POST['name']; 
 $visitor_message =$_POST['visitor_message']; 
 $email =$_POST['email'];

 $conn =new mysqli('localhost', 'root', '', 'contact'); 
 if($conn->connect_error){ 
     die('Connection Failed: '.$conn->connect_error);
  }else{
     $stmt =$conn->prepare("insert into registration(name, visitor_message, email) 
        values(?, ?, ?)");
        $stmt->bind_param("sss", $name, $visitor_message, $email);
        $stmt->execute(); 
        echo "registration SUccessfully...";
        $stmt->close();
        $conn->close(); 
    }
 
?>

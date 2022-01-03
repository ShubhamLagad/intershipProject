<?php
include "connect.php";
$data =  file_get_contents("php://input");
$mydata = json_decode($data,true); 
// print_r($mydata);
// accept data from js file


  $name = $mydata['name'];
  $phone = $mydata['phone'];
  $password = $mydata['password'];
  $subscription = $mydata['subscription'];
  $remark = $mydata['remark'];

    
  $query = "INSERT INTO `user` (`name`, `phone`, `password`, `subscription`, `remark`, `srno`) VALUES ('$name', '$phone', '$password', '$subscription', '$remark', NULL)";

  $result = mysqli_query($con,$query);

    if($result){
      echo "true";
      }else{
      echo "false";
      }

            
?>
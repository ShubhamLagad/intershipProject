<?php
include "./connect.php";
$data =  file_get_contents("php://input");
$mydata = json_decode($data,true); 
// print_r($mydata);
// accept data from js file
$userId= $mydata['userId'];
$pass= $mydata['password'];
session_start();
$flag=1;
    
            $_SESSION['userId'] = $userId;
            $_SESSION['password'] = $pass;

            $query = "select * from admin";

            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($result))
                {
                    if($userId==$row['userId'] && $password==$row['password'])
                    {
                         $flag=0;
                        echo "true";
                    }
                }
            if($flag==1)
            {
                unset($_SESSION['userId']);
                unset($_SESSION['password']);
                // session_destroy();
                echo "false";
            }
?>
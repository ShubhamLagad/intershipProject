<?php
   session_start();
   if(!isset($_SESSION['userId'])){
     header("location:index.html");
   }
?>
<?php
    include("database/connect.php");

    $srno = $_GET['id'];
    $query = "DELETE FROM user WHERE srno = '$srno'";
    $result = mysqli_query($con,$query);
    if($result){
        ?>
<script>
alert("User deleted successfully");
window.location.href = "myUsers.php";
</script>
<?php
    }
?>
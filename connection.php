<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$db="wallpaper";
$con=mysqli_connect($servername,$username,$password,$db);

// if($con){
//    echo "<script> alert('connection succesfull'); </script>";
// }
// else{
//     echo "<script> alert('connection unsuccesfull'); </script>"; 
// }
?>
<?php
$hostname="localhost";
$user="root";
$pass="";
$db="front_backform";

$conn=new mysqli( $hostname , $user , $pass , $db );
if($conn->connect_error){
    echo $conn->connect_error;
}  
 $name=$_GET['fname']; 
 $cont=$_GET['fcont'];
 $email=$_GET['femail'];
 $pass=$_GET['fpass'];

 $q="insert into formtable(name,contact,email,pass) values('$name','$cont','$email','$pass')";
 if($conn->query($q)===true){
    echo "data insertion succcessful";
 }else{
    echo "data insertion failed ";
 }
 $conn->close();
 ?>
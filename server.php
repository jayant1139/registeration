<?php
session_start();

// initialising variables
$name='';
$dropper='';
$emailaddress='';
$username='';
$password='';
$enrollment_number='';
$mobile_number='';

// making connectionn to the database

$db=mysqli_connect('localhost','root','','registeration') or die("couln't connect to database ");

if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($db,$_POST['name']);
    $dropper=mysqli_real_escape_string($db,$_POST['radioname']);
    $emailaddress=mysqli_real_escape_string($db,$_POST['emailaddress']);
    $enrollment_number=mysqli_real_escape_string($db,$_POST['enrollment_number']);
    $mobile_number=mysqli_real_escape_string($db,$_POST['mobile_number']);
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $insertquery="INSERT INTO `user`(`Full Name`, `dropper`, `Email`, `Enrollment Number`, `Mobile number`, `UserName`, `Password`)
     VALUES ('[$name]','[$dropper]','[$emailaddress]','[$enrollment_number]','[$mobile_number]','[$username]','[$password]')";

     $res=mysqli_query($db,$insertquery);
}
// registering users

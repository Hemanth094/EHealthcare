<?php
$con = mysqli_connect("sql12.freesqldatabase.com", "sql12764220", "NVTsQ8KCRE", "sql12764220");
error_reporting(0);
$email=$_GET['email'];
$query= "DELETE FROM doctor WHERE email='$email'";

$data=mysqli_query($con, $query);
if($data){
    echo" <script>alert('Doctor Deleted Successfully');window.location.href = 'admin-panel.php#list-settings1';</script>";
}
else{
    echo"<script> alert('Unable to delete doctor');window.location.href = 'admin-panel.php#list-settings1';</script>";
}
?>
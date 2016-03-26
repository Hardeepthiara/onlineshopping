<?php
include_once("datacon.php");

$m=$_GET['id'];
$s=mysqli_query($con,"delete from product where id='$m'");
if($s)
{
header('location:delete.php');

}
else{
echo"not";
}




?>
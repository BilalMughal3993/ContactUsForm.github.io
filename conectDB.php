<?php
$servername="localhost";
$username="root";
$passward="";
$con=mysqli_connect($servername,$username,$passward);
if(!$con)
{
    die("Error! ".mysqli_connect());

}
else{
    echo"Successfully .";
}
$sql="CREATE DATABASE dbBilal1";
$result=mysqli_query($con,$sql);
if($result)
{
    echo"Successfully Created : <br> ";
 
}
else{
    echo"Not Created : ".mysqli_error($con,$sql);
}

?>

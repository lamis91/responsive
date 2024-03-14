<?php
$con=mysqli_connect("localhost","root","","customers");
if(!$con){
    die("con faild");
}
if($_SERVER("REQUEST_METHOD")=="POST"){
    
}
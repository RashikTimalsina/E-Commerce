<?php

$conn = mysqli_connect('localhost','root','','ecommerceproject');
if(!$conn){
    die('Connection failed: ');
}else {
    echo "Connection successful";
}

?>
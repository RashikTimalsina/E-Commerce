<?php

require_once 'connection.php';

$id = $_GET['pid'];

if(!empty($id)){
    $sql = "DELETE FROM product WHERE pid = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo("Product deleted successfully");
    }else{
        echo "Error in deleting product".mysqli_error($conn);
    }

}else{
    echo "Invalid product id";

}

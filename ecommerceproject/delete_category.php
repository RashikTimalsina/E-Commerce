<?php 

require_once "connection.php";

$cid = $_GET['cid'];

if(!empty($cid)){
    $product = "SELECT * FROM product WHERE category_id = $cid";
    $product_result = mysqli_query($conn, $product);
    $total_product = mysqli_num_rows($product_result);
    if($total_product <1){
        $delete = "DELETE FROM category WHERE cid = $cid";
        if(mysqli_query($conn, $delete)){
            header("Location: index.php");
        }else{
            echo "Error";
        }
    }else{
        echo "This category has products. You can't delete this category";
    }
}else{
    header("Location: index.php");
}
<?php 
require_once 'connection.php';
require_once 'header.php';
$sql="SELECT * FROM product";
$product=mysqli_query($conn,$sql);
?>
<h1>Index page</h1>
<hr>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Product name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($product as $pro): ?>
        <tr>
            <td><?= $pro['pid']; ?></td>
            <td><?= $pro['name']; ?></td>
            <td><?= $pro['quantity']; ?></td>
            <td><?= $pro['price']; ?></td>
            <td><?= $pro['quantity']*$pro['price']; ?></td>
            <td>
                <a href="">Edit</a>
                <a href="delete_product.php?pid=<?=$pro['pid']?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>




<?php 
 require_once 'footer.php';
?>

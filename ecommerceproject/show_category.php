<?php 
require_once 'connection.php';
 require_once 'header.php';

 $sql="SELECT * FROM category";
 $result =mysqli_query($conn,$sql);
?>

<h1>Show Category page</h1>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index=1;
        while($category = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $index; ?></td>
            <td><?php echo $category['category_name']; ?></td>
            <td>
                <a href="">Edit</a>
                <a href="delete_category.php?cid=<?=$category['cid']?>">Delete</a>
            </td>
        </tr>
        <?php $index++; } ?>
    </tbody>
</table>
<?php 
 require_once 'footer.php';
?>

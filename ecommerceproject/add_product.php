<?php
require_once 'connection.php';
require_once 'header.php';
$sql = "SELECT * FROM category";
$category = mysqli_query($conn, $sql);

if (!empty($_POST)) {
    $categoryId = $_POST['category_id'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $sql = "INSERT INTO product(category_id,name,quantity,price)VALUES('$categoryId','$name',' $quantity',' $price')";
    if (mysqli_query($conn, $sql)) {
        echo "Prouct added successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<h1>Add Product page</h1>
<form action="" method="post">
    <label for="category_id">Category:</label> <br>
    <select name="category_id" required id="" category_id>
        <option value="">---Select Category---</option>
        <?php foreach ($category as $cat) : ?>
            <option value="<?= $cat['cid'] ?>"><?= $cat['category_name']; ?></option>
        <?php endforeach; ?>
    </select><br><br>
    <label for="name">Product Name:</label><br>
    <input type="text" name="name" id="name"><br><br>
    <label for="quantity">Quantity:</label><br>
    <input type="number" name="quantity" id="quantity"><br><br>
    <label for="price">Price:</label><br>
    <input type="text" name="price" id="price"><br><br>

    <button type="submit">Add Product</button>
</form>
<?php
require_once 'footer.php';
?>
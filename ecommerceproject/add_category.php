<?php
require_once 'connection.php';
 require_once 'header.php';


if(!empty($_POST)){
    $category_name = $_POST['category_name'];

    $sql = "INSERT INTO category (category_name) VALUES ('$category_name')";

        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Category added successfully";
        }else{
            echo "Error adding category: ".mysqli_error($conn);
        }
    } 
?>

<h1>Add_Category page</h1>

<form action="" method="post">
    <label for="category_name">Category name</label>
    <input type="text" name="category_name" required>

    <br><br>

    <button>Add Category</button>
</form>


<?php
 require_once 'footer.php';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "dbconfig.php";
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $sql = "insert into product(name, price, description, category) values('$name', '$price', '$description', '$category')";
    $pdo->query($sql);
    header("location: index.php?msg=Product added successfully");
}
?>
<html>
    <head>
        <title>Add Product</title>
    </head>
    <body>
        <?php
        if (isset($_REQUEST['msg'])) {
            ?>
            <h4><?php echo $_REQUEST['msg']; ?></h4>
            <?php
        }
        ?>
        <form action="add_product.php" method="post">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name">
            <label for="price">Product Price</label>
            <input type="text" name="price" id="price">
            <label for="description">Product Description</label>
            <input type="text" name="description" id="description">
            <label for="category">Product Category</label>
            <input type="text" name="category" id="category">
            <input type="submit" value="Add Product"/>
        </form>
    </body>
</html>

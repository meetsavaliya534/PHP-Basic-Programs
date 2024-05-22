<!-- Create API’s to perform product management using PHP. -->
<html>
    <head>
        <title>Product Management</title>
    </head>
    <body>
        <h1>Product Management</h1>
        <button>
            <a href="add_product.php">Add Product</a>
        </button>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Description</th>
                    <th>Product Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "dbconfig.php";
                // sql statement to retrieve data from db table
                $sql = "select * from product";
                // execute the sql statement using query() function
                $res = $pdo->query($sql);
                // check if the query() function returns any data
                if($res->rowCount() > 0){
                    // if yes, then fetch the data
                    while($row = $res->fetch()){
                        ?>
                        <tr>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_price']; ?></td>
                            <td><?php echo $row['product_description']; ?></td>
                            <td><img src="<?php echo $row['product_image']; ?>" width="100px" height="100px"/></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </body>
</html>

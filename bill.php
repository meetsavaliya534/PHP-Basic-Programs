<!-- Crete a Web application to bill management. -->

<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    include 'dbconfig.php';
    $sql = "SELECT * FROM bill";
    $result = $pdo->query($sql);
    $rows = $result->fetchAll();
    // print_r($rows);
    // die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bill Management</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Bill Management</h1>
    <a href="logout.php">Logout</a>
    <table>
        <thead>
            <tr>
                <th>Bill No</th>
                <th>Bill Date</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Phone</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $row){ ?>
            <tr>
                <td><?php echo $row['bill_no']; ?></td>
                <td><?php echo $row['bill_date']; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['customer_address']; ?></td>
                <td><?php echo $row['customer_phone']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_price']; ?></td>
                <td><?php echo $row['product_quantity']; ?></td>
                <td><?php echo $row['total_amount']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

<!-- edit.php -->
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    include 'dbconfig.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM bill WHERE id = $id";
    $result = $pdo->query($sql);
    $row = $result->fetch();
    // print_r($row);
    // die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bill Management</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Bill Management</h1>
    <a href="logout.php">Logout</a>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <table>
            <tr>
                <td>Bill No</td>
                <td><input type="text" name="bill_no" value="<?php echo $row['bill_no']; ?>"></td>
            </tr>
            <tr>
                <td>Bill Date</td>
                <td><input type="date" name="bill_date" value="<?php echo $row['bill_date']; ?>"></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customer_name" value="<?php echo $row['customer_name']; ?>"></td>
            </tr>
            <tr>
                <td>Customer Address</td>
                <td><input type="text" name="customer_address" value="<?php echo $row['customer_address']; ?>"></td>
            </tr>
            <tr>
                <td>Customer Phone</td>
                <td><input type="text" name="customer_phone" value="<?php echo $row['customer_phone']; ?>"></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name" value="<?php echo $row['product_name']; ?>"></td>
            </tr>
            <tr>
                <td>Product Price</td>
                <td><input type="text" name="product_price" value="<?php echo $row['product_price']; ?>"></td>
            </tr>
            <tr>
                <td>Product Quantity</td>
                <td><input type="text" name="product_quantity" value="<?php echo $row['product_quantity']; ?>"></td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td><input type="text" name="total_amount" value="<?php echo $row['total_amount']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<!-- update.php -->
<?php
    include 'dbconfig.php';
    $id = $_POST['id'];
    $bill_no = $_POST['bill_no'];
    $bill_date = $_POST['bill_date'];
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_phone = $_POST['customer_phone'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $total_amount = $_POST['total_amount'];
    $sql = "UPDATE bill SET bill_no = '$bill_no', bill_date = '$bill_date', customer_name = '$customer_name', customer_address = '$customer_address', customer_phone = '$customer_phone', product_name = '$product_name', product_price = '$product_price', product_quantity = '$product_quantity', total_amount = '$total_amount' WHERE id = $id";
    $pdo->exec($sql);
    header('location:bill.php');
?>

<!-- delete.php -->
<?php
    include 'dbconfig.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM bill WHERE id = $id";
    $pdo->exec($sql);
    header('location:bill.php');
?>

<!-- login.php -->
<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:bill.php');
    }
    include 'dbconfig.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $pdo->query($sql);
        $row = $result->fetch();
        if($row){
            $_SESSION['username'] = $username;
            header('location:bill.php');
        }else{
            echo "Invalid Username or Password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bill Management</title>
</head>
<body>
    <h1>Bill Management</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<!-- logout.php -->
<?php
    session_start();
    session_destroy();
    header('location:login.php');
?>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once "dbconfig.php";
}
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php
        if(isset($_REQUEST['msg'])){
            ?>
            <h4><?php echo $_REQUEST['msg'];?></h4>
            <?php
        }
        ?>
        <button><a href="login.php">login</a></button>
        </button>
        <form action="login.php" method="post">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname">
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>
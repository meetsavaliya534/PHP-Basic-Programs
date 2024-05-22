<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once "dbconfig.php";
}
?>
<html>
    <head>
        <title>Add Student</title>
    </head>
    <body>
        <?php
        if(isset($_REQUEST['msg'])){
            ?>
            <h4><?php echo $_REQUEST['msg'];?></h4>
            <?php
        }
        ?>
        <button><a href="add_student.php">Add Student</a></button>
        </button>
        <form action="add_student.php" method="post">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname">
            <input type="submit" value="Add Student"/>
        </form>
    </body>
</html>
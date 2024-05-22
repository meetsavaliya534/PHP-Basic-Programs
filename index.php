<html>
    <head>
        <title>List Records</title>
    </head>
    <body>
        <button>
            <a href="add_student.php">Add Student</a>
        </button>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "dbconfig.php";
                // sql statement to retrieve data from db table
                $sql = "select * from student";
                // execute the sql statement using query() function
                $pdo->query($sql);
                // check if the query() function returns any data
                if($res->rowCount() > 0){
                    // if yes, then fetch the data
                    while($row = $res->fetch()){
                        ?>
                        <tr>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
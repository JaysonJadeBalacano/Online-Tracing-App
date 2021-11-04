<?php
require('./database.php');

if (isset($_POST['delete'])) {
        $deleteID = $_POST['deleteID'];
        
        $querydelete = "DELETE FROM students WHERE id = $deleteID";
        $sqldelete = mysqli_query($con, $querydelete);

        echo '<script>alert("Successfully Deleted!")</script>';
        echo '<script>window.location.href = "/cts_qr/php-crud/index.php"</script>';
        } else{
            echo '<script>window.location.href = "/cts_qr/php-crud/index.php"</script>';
        }
        ?>
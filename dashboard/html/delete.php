<?php
include_once 'connection.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    echo $id;
    $sql = "DELETE FROM `signup` WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    
    if ($result) {
        echo "Record deleted successfully";
        echo '<script>location.href="user.php";</script>';
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}
?>

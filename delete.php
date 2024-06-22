<?php
require "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM stdtable WHERE id=$id";
    $result = mysqli_query($connection, $query);
    print_r(($result));
    if ($result == true) {
        echo "<script>alert('Data deleted Successfully')</script>";
        header("location:create.php");
    } else {
        echo "<script>alert('Deletion Failed')</script>";
    }
} else {
    echo " <script>alert('User Not found')</script>";
}
?>
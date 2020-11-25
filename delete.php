<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "project-food");

    $sql = "DELETE FROM user WHERE ID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: view.php');
        exit;
    } else {
        echo "Error deleting record: ". mysqli_error($link) ; 
    }
?>
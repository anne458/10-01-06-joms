<?php
    session_start();
    include "../../config/database.php";
    //only admin can acccess this page
    if(!isset($_SESSION["role"]) || $_SESSION ["role"] != "admin") {
        header("Location: ../../index.php");
        exit();
}

$id = isset($_GET["id"]) ? intval($_GET ["id"]) : 0;
//delete  SQL Command
mysqli_query($conn, "DELETE FROM users
WHERE id=$id and role='student'");

header("Location: index.php");
exit
?>
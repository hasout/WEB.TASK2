<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $result = $conn->query("SELECT status FROM users WHERE id = $id");
    $row = $result->fetch_assoc();

    $newStatus = $row['status'] == 1 ? 0 : 1;

    $conn->query("UPDATE users SET status = $newStatus WHERE id = $id");

    echo $newStatus;
}
?>

<?php
include 'db.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $db->prepare("UPDATE tasks SET completed = 1 WHERE id = :id");
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>

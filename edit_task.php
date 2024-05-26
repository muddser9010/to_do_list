<?php
include 'db.php';

if (isset($_POST['id']) && isset($_POST['task'])) {
    $id = $_POST['id'];
    $task = $_POST['task'];
    $stmt = $db->prepare("UPDATE tasks SET task = :task WHERE id = :id");
    $stmt->bindValue(':task', $task, SQLITE3_TEXT);
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>

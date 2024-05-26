<?php
include 'db.php';

if (isset($_POST['task'])) {
    $task = $_POST['task'];
    $stmt = $db->prepare("INSERT INTO tasks (task) VALUES (:task)");
    $stmt->bindValue(':task', $task, SQLITE3_TEXT);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>

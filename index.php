<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="post" class="task-form">
            <input type="text" name="task" placeholder="New task" required>
            <button type="submit">Add Task</button>
        </form>
        <ul class="task-list">
            <?php
            include 'db.php';
            $result = $db->query("SELECT * FROM tasks ORDER BY id DESC");
            while ($row = $result->fetchArray()) {
                $completed = $row['completed'] ? 'completed' : '';
                echo "<li class='{$completed}'>
                        <form action='complete_task.php' method='post' class='inline'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <button type='submit' class='complete-btn'>Complete</button>
                        </form>
                        <span>{$row['task']}</span>
                        <form action='edit_task.php' method='post' class='inline'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <input type='text' name='task' value='{$row['task']}' required>
                            <button type='submit' class='edit-btn'>Edit</button>
                        </form>
                        <form action='delete_task.php' method='post' class='inline'>
                            <input type='hidden' name='id' value='{$row['id']}'>
                            <button type='submit' class='delete-btn'>Delete</button>
                        </form>
                      </li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>

# to_do_list
To-Do List
A simple and functional to-do list application to help users organize and manage their daily tasks. Built with HTML, CSS, PHP, and SQLite. That will be helpful for the user who wants to organize different tasks that are performed on different [digital](https://enrichvoyage.com/) learnings.

**Features**

Add Task: Add new tasks to your to-do list.
Mark as Complete: Mark tasks as completed.
Edit Task: Edit the content of existing tasks.
Delete Task: Remove tasks from the list.

**Tech Stack**

Frontend: HTML, CSS
Backend: PHP
Database: SQLite

**Getting Started**

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

**Prerequisites**
PHP 7.4 or higher
SQLite3
A web server (e.g., Apache, Nginx)

**Installation**

Clone the repository:
git clone https://github.com/muddser9010/to-do-list.git
cd to-do-list

**Set up the database**

Ensure your PHP environment has write permissions to create the SQLite database file (tasks.db).

**Run the application**

If you are using a local server, place the project folder in your server's root directory (e.g., htdocs for XAMPP, www for WAMP).
Open your web browser and navigate to http://localhost/to-do-list/index.php.

**Instructions to Run**
Create a new directory and name it to-do-list.
Save each of the above files in the to-do-list directory.
Ensure your PHP environment is set up and has write permissions to create the SQLite database file (tasks.db).
Open your web browser and navigate to the location where index.php is hosted.
This simple to-do list application allows you to add, edit, delete, and mark tasks as complete. It uses SQLite for data storage and PHP for backend logic, with a basic HTML and CSS frontend. Feel free to customize and enhance it according to your needs.

**File Descriptions**
index.php: The main page that displays the to-do list and the form to add new tasks.
style.css: The CSS file for styling the application.
db.php: The database connection and setup file.
add_task.php: The backend script to add a new task.
edit_task.php: The backend script to edit an existing task.
delete_task.php: The backend script to delete a task.
complete_task.php: The backend script to mark a task as complete.

**Usage**
Add Task: Enter a task in the input field and click "Add Task".
Mark as Complete: Click the "Complete" button next to a task to mark it as complete.
Edit Task: Click the "Edit" button, update the task text, and click "Edit" again to save changes.
Delete Task: Click the "Delete" button to remove a task from the list.

**Acknowledgments**
Inspiration: Basic to-do list applications
Tools: PHP, SQLite

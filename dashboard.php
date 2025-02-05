<?php
// dashboard.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    h1 {
        color: #333;
    }
    a {
        display: inline-block;
        margin: 10px 0;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    a:hover {
        background-color: #0056b3;
    }
</style>

<h1>Welcome to the Dashboard</h1>
<a href="students.php">Manage Students</a>
<a href="logout.php">Logout</a>

<?php
// add_student.php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];
    $age = $_POST['age'];
    $status = $_POST['status'];

    $stmt = $pdo->prepare("INSERT INTO students (name, image, age, status) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $image, $age, $status]);

    header("Location: students.php");
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="image" placeholder="Image URL" required>
    <input type="number" name="age" placeholder="Age" required>
    <select name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
    <button type="submit">Add Student</button>
</form>
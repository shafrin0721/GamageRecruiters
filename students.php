<?php
// students.php
session_start();
include 'connection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch students
$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll();
?>

<h1>Student Management</h1>
<a href="add_student.php">Add Student</a>
<table>
    <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['name']; ?></td>
        <td><img src="<?php echo $student['image']; ?>" alt="Student Image" width="50"></td>
        <td><?php echo $student['age']; ?></td>
        <td><?php echo $student['status']; ?></td>
        <td>
            <a href="edit_student.php?id=<?php echo $student['id']; ?>">Edit</a>
            <a href="delete_student.php?id=<?php echo $student['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
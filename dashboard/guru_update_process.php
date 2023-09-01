<?php
include '../connection.php';

if (isset($_POST['update_teacher'])) {
    $teacherId = $_POST['teacher_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $idClass = $_POST['class'];
    $password = $_POST['password'];

    // Check if the password is provided
    if (!empty($password)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update the teacher record with the new password
        $query = "UPDATE guru SET nama='$name', gender='$gender', jabatan='$jabatan', email='$email', id_kelas='$idClass', password='$hashedPassword' WHERE id_guru='$teacherId'";
    } else {
        // Update the teacher record without changing the password
        $query = "UPDATE guru SET nama='$name', gender='$gender', jabatan='$jabatan', email='$email', id_kelas='$idClass' WHERE id_guru='$teacherId'";
    }

    // Execute the update query
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: guru.php");
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);

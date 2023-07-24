<?php
include '../connection.php';

if (isset($_POST['update_teacher'])) {
    $teacherId = $_POST['teacher_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birth_date'];
    $nip = $_POST['nip'];
    $email = $_POST['email'];
    $idClass = $_POST['class'];
    $password = $_POST['password'];

    // Check if the password is provided
    if (!empty($password)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update the teacher record with the hashed password
        $query = "UPDATE teachers SET name='$name', gender='$gender', birth_date='$birthDate', nip='$nip', email='$email', password='$hashedPassword', id_class='$idClass' WHERE id_teacher='$teacherId'";
    } else {
        // Update the teacher record without changing the password
        $query = "UPDATE teachers SET name='$name', gender='$gender', birth_date='$birthDate', nip='$nip', email='$email', id_class='$idClass' WHERE id_teacher='$teacherId'";
    }

    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to the teachers page with a success message
        header("Location: guru.php");
        exit();
    } else {
        echo "error";
        // Redirect back to the teachers page with an error message
        header("Location: guru.php");
        exit();
    }
}

// Close the database connection
mysqli_close($connection);

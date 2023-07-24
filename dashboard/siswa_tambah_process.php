<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birth_date'];
    $nis = $_POST['nis'];
    $email = $_POST['email'];
    $idClass = $_POST['id_class'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Perform the insert operation to add a new student
    $query = "INSERT INTO students (name, gender, birth_date, nis, email, password, id_class) VALUES ('$name', '$gender', '$birthDate', '$nis', '$email', '$hashedPassword', '$idClass')";
    $result = mysqli_query($connection, $query);

    // Close the database connection
    mysqli_close($connection);

    // Redirect back to the students page with the toast notification parameters in the URL
    header("Location: siswa.php");
    exit();
}

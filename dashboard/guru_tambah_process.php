<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['jabatan'];
    // $nip = $_POST['nip'];
    $email = $_POST['email'];
    $idClass = $_POST['id_class'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Perform the insert operation to add a new teacher
    // $query = "INSERT INTO teachers (name, gender, birth_date, nip, email, password, id_class) VALUES ('$name', '$gender', '$birthDate', '$nip', '$email', '$hashedPassword', '$idClass')";

    $query = "INSERT INTO guru (nama, gender, jabatan, id_kelas, email, password) VALUES ('$name', '$gender', '$birthDate', '$idClass', '$email', '$hashedPassword')";
    $result = mysqli_query($connection, $query);

    // Close the database connection
    mysqli_close($connection);

    // Redirect back to the teachers page with the toast notification parameters in the URL
    header("Location: guru.php");
    exit();
}

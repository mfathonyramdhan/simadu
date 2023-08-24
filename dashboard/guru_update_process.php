<?php
include '../connection.php';

if (isset($_POST['update_teacher'])) {
    $teacherId = $_POST['teacher_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $jabatan = $_POST['jabatan'];
    // $nip = $_POST['nip'];
    $email = $_POST['email'];
    $idClass = $_POST['class'];
    $password = $_POST['password'];

    // Check if the password is provided
    if (!empty($password)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $query = "UPDATE guru SET nama='$name', gender='$gender', jabatan='$jabatan', email='$email', id_kelas='$idClass', password='$hashedPassword', WHERE id_guru='$teacherId'";
    } else {
        // Update the teacher record without changing the password

        $query = "UPDATE guru SET nama='$name', gender='$gender', jabatan='$jabatan', email='$email', id_kelas='$idClass' WHERE id_guru='$teacherId'";
    }

    $query = "UPDATE guru SET nama='$name', gender='$gender', jabatan='$jabatan', id_kelas='$idClass' WHERE id_guru='$teacherId'";

    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    header("Location: guru.php");
}

// Close the database connection
mysqli_close($connection);

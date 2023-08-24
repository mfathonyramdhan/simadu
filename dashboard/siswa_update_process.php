<?php
include '../connection.php';

if (isset($_POST['update_student'])) {
    $studentId = $_POST['student_id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birth_date'];
    $nis = $_POST['nis'];
    $email = $_POST['email'];
    $idClass = $_POST['class'];
    $password = $_POST['password'];

    // Check if the password is provided
    if (!empty($password)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update the student record with the hashed password
        $query = "UPDATE siswa SET nama='$name', gender='$gender', tanggal_lahir='$birthDate', nis='$nis', email='$email', password='$hashedPassword', id_kelas='$idClass' WHERE id_siswa='$studentId'";
    } else {
        // Update the student record without changing the password
        $query = "UPDATE siswa SET nama='$name', gender='$gender', tanggal_lahir='$birthDate', nis='$nis', email='$email', id_kelas='$idClass' WHERE id_siswa='$studentId'";
    }

    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to the students page with a success message
        header("Location: siswa.php");
        exit();
    } else {
        echo "error";
        // Redirect back to the students page with an error message
        header("Location: siswa.php");
        exit();
    }
}

// Close the database connection
mysqli_close($connection);

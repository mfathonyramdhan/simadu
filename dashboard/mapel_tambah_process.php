<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];

    // Insert the new class into the database
    $insertQuery = "INSERT INTO mapel (nama) VALUES ('$nama')";
    mysqli_query($connection, $insertQuery);

    // Close the database connection
    mysqli_close($connection);

    // Redirect back to the page where the form was submitted from
    header("Location: matapelajaran.php");
    exit();
}

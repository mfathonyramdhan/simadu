<?php


include 'checkExpiredUserSession.php';

if (isset($_SESSION['user_email'])) {
    $userEmail = $_SESSION['user_email'];
    $userId = $_SESSION['user_id'];


    // Assuming you have established a database connection
    include '../connection.php';

    // Retrieve the user's name from the database based on user_id
    $query = "SELECT email FROM admin WHERE email = '$userEmail'";
    $result = mysqli_query($connection, $query);

    $query2 = "SELECT email FROM siswa WHERE email = '$userEmail'";
    $result2 = mysqli_query($connection, $query2);

    $query3 = "SELECT email FROM guru WHERE email = '$userEmail'";
    $result3 = mysqli_query($connection, $query3);
    // role admin = 1
    // role siswa = 2
    // role guru = 3
    if (mysqli_num_rows($result) === 1) {
        $role = 1;
    } else if (mysqli_num_rows($result2) === 1) {
        $role = 2;
    } else if (mysqli_num_rows($result3) === 1) {
        $role = 3;
    }


    // kondisi cek walikelas
    $cekguru = "SELECT * FROM guru WHERE id_guru = $userId AND id_kelas IN (1, 2, 3);";
    $resultcekguru = mysqli_query($connection, $cekguru);
    $iswalikelas = 0;
    if (mysqli_num_rows($resultcekguru) > 0) {
        $iswalikelas = 1;
    }
    // kondisi cek walikelas


    // kondisi cek guru mapel tsb
    $cekgurupengampu = "SELECT * FROM mapel WHERE id_guru = $userId";
    $resultcekgurupengampu = mysqli_query($connection, $cekgurupengampu);

    if (mysqli_num_rows($resultcekgurupengampu) > 0) {
        $hasilcekgurupengampu = mysqli_fetch_assoc($resultcekgurupengampu);
        $isgurupengampu = $hasilcekgurupengampu['nama'];
    }
    // kondisi cek guru mapel tsb

}
?>

<p> Status wali kelas : <?= $iswalikelas; ?> </p>
<p> Status Guru Pengampu : <?= $isgurupengampu; ?> </p>
<p> User Id guru : <?= $userId; ?> </p>
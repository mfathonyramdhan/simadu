<?php
$pageTitle = "Sekolah";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';
?>

<div class="content-body">
    <div class="container-fluid">

        <?php
        // Assuming you have established a database connection

        // Retrieve the school data
        $query = "SELECT * FROM school";
        $result = mysqli_query($connection, $query);

        // Check if any rows are found
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        ?>

            <div class="container">
                <h2> <?php echo $pageTitle; ?></h2>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Accreditation</th>
                        <th>NPSN</th>
                    </tr>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['accreditation']; ?></td>
                        <td><?php echo $row['npsn']; ?></td>
                    </tr>
                </table>
                <a href="sekolah_update.php" class="btn btn-primary">Update Data</a>
            </div>

        <?php
        } else {
            echo '<p>No school data found.</p>';
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </div>
</div>

<?php
include 'template/footer.php';
?>
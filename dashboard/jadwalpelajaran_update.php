<?php
$pageTitle = "Update Jadwal Pelajaran";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';

// Get the course ID from the URL parameter
$courseId = $_GET['id'];

// Retrieve the course data based on the ID
$query = "SELECT * FROM course WHERE id_course = $courseId";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

// Check if the update course button is clicked
if (isset($_POST['update_course'])) {
    $name = $_POST['name'];
    $day = $_POST['day'];
    $startHours = $_POST['start_hours'];
    $endHours = $_POST['end_hours'];

    // Update the course in the database
    $updateQuery = "UPDATE course SET name = '$name', day = '$day', start_hours = '$startHours', end_hours = '$endHours' WHERE id_course = $courseId";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        // Course updated successfully
        echo "<script>alert('Course updated successfully');</script>";
        echo "<script>window.location.href = 'jadwalpelajaran.php';</script>";
    } else {
        // Failed to update course
        echo "<script>alert('Failed to update course');</script>";
    }
}

// Close the database connection
mysqli_close($connection);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Jadwal Pelajaran</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Course Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="day" class="form-label">Day</label>
                                <select class="form-control" id="day" name="day">
                                    <option value="Senin" <?php if ($row['day'] == 'Senin') echo 'selected'; ?>>Senin</option>
                                    <option value="Selasa" <?php if ($row['day'] == 'Selasa') echo 'selected'; ?>>Selasa</option>
                                    <option value="Rabu" <?php if ($row['day'] == 'Rabu') echo 'selected'; ?>>Rabu</option>
                                    <option value="Kamis" <?php if ($row['day'] == 'Kamis') echo 'selected'; ?>>Kamis</option>
                                    <option value="Jumat" <?php if ($row['day'] == 'Jumat') echo 'selected'; ?>>Jum'at</option>
                                    <option value="Sabtu" <?php if ($row['day'] == 'Sabtu') echo 'selected'; ?>>Sabtu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="start_hours" class="form-label">Start Hours</label>
                                <input type="time" class="form-control" id="start_hours" name="start_hours" value="<?php echo $row['start_hours']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="end_hours" class="form-label">End Hours</label>
                                <input type="time" class="form-control" id="end_hours" name="end_hours" value="<?php echo $row['end_hours']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="update_course">Update Jadwal Pelajaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>
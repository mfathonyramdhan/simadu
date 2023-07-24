<?php
$pageTitle = "Edit Siswa";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';


// Check if the student ID is provided in the URL
if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    // Retrieve the student data from the database
    $query = "SELECT * FROM students WHERE id_student = $studentId";
    $result = mysqli_query($connection, $query);

    // Check if the student exists
    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);


?>

        <!-- Add your HTML form for editing student information -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2> <?php echo $pageTitle; ?></h2>
                            </div>
                            <div class="card-body">
                                <form method="post" action="siswa_update_process.php">
                                    <input type="hidden" name="student_id" value="<?php echo $student['id_student']; ?>">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $student['name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value="Male" <?php if ($student['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                                            <option value="Female" <?php if ($student['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Birth Date</label>
                                        <input type="date" class="form-control" name="birth_date" value="<?php echo $student['birth_date']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">NIS</label>
                                        <input type="text" class="form-control" name="nis" value="<?php echo $student['nis']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $student['email']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Class</label>

                                        <select class="form-select" name="class">
                                            <option value="4" <?php if ($student['id_class'] == '4') echo 'selected'; ?>>No Class</option>

                                            <option value="1" <?php if ($student['id_class'] == '1') echo 'selected'; ?>>Kelas 1</option>
                                            <option value="2" <?php if ($student['id_class'] == '2') echo 'selected'; ?>>Kelas 2</option>
                                            <option value="3" <?php if ($student['id_class'] == '3') echo 'selected'; ?>>Kelas 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">Update</button>
                                        <a href="siswa.php" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    } else {
        echo "Student not found.";
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    echo "Invalid student ID.";
}

include 'template/footer.php';
?>
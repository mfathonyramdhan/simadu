<?php
$pageTitle = "Edit guru";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';


// Check if the teacher ID is provided in the URL
if (isset($_GET['id'])) {
    $teacherId = $_GET['id'];

    // Retrieve the teacher data from the database
    $query = "SELECT * FROM teachers WHERE id_teacher = $teacherId";
    $result = mysqli_query($connection, $query);

    // Check if the teacher exists
    if (mysqli_num_rows($result) > 0) {
        $teacher = mysqli_fetch_assoc($result);


?>

        <!-- Add your HTML form for editing teacher information -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2> <?php echo $pageTitle; ?></h2>
                            </div>
                            <div class="card-body">
                                <form method="post" action="guru_update_process.php">
                                    <input type="hidden" name="teacher_id" value="<?php echo $teacher['id_teacher']; ?>">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $teacher['name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value="Male" <?php if ($teacher['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                                            <option value="Female" <?php if ($teacher['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Birth Date</label>
                                        <input type="date" class="form-control" name="birth_date" value="<?php echo $teacher['birth_date']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">nip</label>
                                        <input type="text" class="form-control" name="nip" value="<?php echo $teacher['nip']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $teacher['email']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Class</label>

                                        <select class="form-select" name="class">
                                            <option value="4" <?php if ($teacher['id_class'] == '4') echo 'selected'; ?>>No Class</option>

                                            <option value="1" <?php if ($teacher['id_class'] == '1') echo 'selected'; ?>>Kelas 1</option>
                                            <option value="2" <?php if ($teacher['id_class'] == '2') echo 'selected'; ?>>Kelas 2</option>
                                            <option value="3" <?php if ($teacher['id_class'] == '3') echo 'selected'; ?>>Kelas 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_teacher" class="btn btn-primary">Update</button>
                                        <a href="guru.php" class="btn btn-secondary">Cancel</a>
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
        echo "teacher not found.";
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    echo "Invalid teacher ID.";
}

include 'template/footer.php';
?>
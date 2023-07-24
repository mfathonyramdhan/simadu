<?php
$pageTitle = "Tambah Data Pelanggaran";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $violationId = $_POST['violation_id'];
    $studentId = $_POST['student_id'];

    // Insert the violation detail into the database
    $insertViolationDetailQuery = "INSERT INTO violation_detail (id_violation, id_student)
                                   VALUES ('$violationId', '$studentId')";

    if (mysqli_query($connection, $insertViolationDetailQuery)) {
        echo "<script>alert('Violation detail added successfully.');</script>";
        echo "<script>window.location.href = 'pelanggaran_detail.php';</script>";
    } else {
        echo "<script>alert('Error adding violation detail: " . mysqli_error($connection) . "');</script>";
    }
}

// Retrieve the data from the violation table
$query = "SELECT * FROM violation";
$violationResult = mysqli_query($connection, $query);

// Retrieve the data from the student table
$query = "SELECT * FROM students";
$studentResult = mysqli_query($connection, $query);
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2><?php echo $pageTitle; ?></h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="violation_id" class="form-label">Pelanggaran</label>
                                <select name="violation_id" id="violation_id" class="form-select" required>
                                    <option value="" selected disabled>Pilih Pelanggaran</option>
                                    <?php
                                    // Display violation options
                                    while ($row = mysqli_fetch_assoc($violationResult)) {
                                        echo "<option value='" . $row['id_violation'] . "'>" . $row['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="student_id" class="form-label">Siswa</label>
                                <select name="student_id" id="student_id" class="form-select" required>
                                    <option value="" selected disabled>Pilih Siswa</option>
                                    <?php
                                    // Display student options
                                    while ($row = mysqli_fetch_assoc($studentResult)) {
                                        echo "<option value='" . $row['id_student'] . "'>" . $row['name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
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
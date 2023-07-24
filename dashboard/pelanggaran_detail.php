<?php
$pageTitle = "Data Pelanggaran";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';

// Function to delete the violation
function deleteViolationDetail($violationDetailId, $connection)
{
    // Delete violation detail
    $deleteViolationDetailQuery = "DELETE FROM violation_detail WHERE id_student = $violationDetailId";
    mysqli_query($connection, $deleteViolationDetailQuery);
}

// Check if the delete button is clicked
if (isset($_POST['delete_violation'])) {
    $violationDetailId = $_POST['violation_id'];

    // Validate violation detail ID
    if (!empty($violationDetailId)) {
        // Delete the violation detail
        deleteViolationDetail($violationDetailId, $connection);
    } else {
        echo "<script>alert('Invalid violation detail ID');</script>";
    }
}

?>

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2><?php echo $pageTitle; ?></h2>
                        <a type="button" href="pelanggaran_detail_tambah.php" class="btn btn-rounded btn-primary">+ Tambah <?php echo $pageTitle; ?></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Total Skor</th>
                                        <th>Nama Siswa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Retrieve the data from the violation table and student table, sorted by id_student
                                    $query = "SELECT violation_detail.id_violation_detail, GROUP_CONCAT(violation.name SEPARATOR ', ') AS violation_names, SUM(violation.score) AS total_score, students.name AS student_name, students.id_student AS student_id
                                              FROM violation_detail
                                              JOIN violation ON violation_detail.id_violation = violation.id_violation
                                              JOIN students ON violation_detail.id_student = students.id_student
                                              GROUP BY violation_detail.id_student
                                              ORDER BY students.id_student";

                                    $result = mysqli_query($connection, $query);

                                    // Check if any rows are found
                                    if (mysqli_num_rows($result) > 0) {
                                        // Counter variable for numbering the rows
                                        $counter = 1;

                                        // Fetch each row and display the data 
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Determine badge class and note based on total score
                                            $badgeClass = '';
                                            $note = '';

                                            if ($row['total_score'] >= 90) {
                                                $badgeClass = 'badge-danger';
                                                $note = '- Surat Peringatan 3/3';
                                            } elseif ($row['total_score'] >= 60) {
                                                $badgeClass = 'badge-danger';
                                                $note = '- Surat Peringatan 2/3';
                                            } elseif ($row['total_score'] >= 30) {
                                                $badgeClass = 'badge-danger';
                                                $note = '- Surat Peringatan 1/3';
                                            } else {
                                                $badgeClass = 'badge-success';
                                                $note = '- Aman';
                                            }
                                    ?>
                                            <tr>
                                                <td><?php echo $counter++; ?></td>
                                                <td><?php echo $row['violation_names']; ?></td>
                                                <td><span class="badge <?php echo $badgeClass; ?>"><?php echo $row['total_score']; ?> <?php echo $note; ?></span></td>
                                                <td><?php echo $row['student_name']; ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <!-- <a href="pelanggaran_detail_update.php?id=<?php echo $row['id_violation_detail']; ?>" class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a> -->
                                                        <form method="post" action="">
                                                            <input type="hidden" name="violation_id" value="<?php echo $row['student_id']; ?>">
                                                            <button type="submit" name="delete_violation" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are you sure you want to delete all violation details for this student?');">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        // No data found
                                        ?>
                                        <tr>
                                            <td colspan="6">No data found.</td>
                                        </tr>
                                    <?php
                                    }

                                    // Close the database connection
                                    mysqli_close($connection);
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Total Skor</th>
                                        <th>Nama Siswa</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'template/footer.php';
?>
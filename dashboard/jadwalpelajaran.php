<?php
$pageTitle = "Jadwal Pelajaran";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';

// Function to delete the course and course
function deletecourse($courseId, $connection)
{
    // Delete course
    $deletecourseQuery = "DELETE FROM course WHERE id_course = $courseId";
    mysqli_query($connection, $deletecourseQuery);
}

// Check if the delete button is clicked
if (isset($_POST['delete_course'])) {
    $courseId = $_POST['course_id'];

    // Validate course ID
    if (!empty($courseId)) {
        // Delete the course and course
        deletecourse($courseId, $connection);
    } else {
        echo "<script>alert('Invalid course ID');</script>";
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
                        <a type="button" href="jadwalpelajaran_tambah.php" class="btn btn-rounded btn-primary">+ Tambah Jadwal Pelajaran</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>day</th>
                                        <th>start hours</th>
                                        <th>end hours</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Retrieve the data from the course table
                                    $query = "SELECT *
                                              FROM course";

                                    $result = mysqli_query($connection, $query);

                                    // Check if any rows are found
                                    if (mysqli_num_rows($result) > 0) {
                                        // Counter variable for numbering the rows
                                        $counter = 1;

                                        // Fetch each row and display the data 
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $counter++; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['day']; ?></td>
                                                <td><?php echo $row['start_hours']; ?></td>
                                                <td><?php echo $row['end_hours']; ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="jadwalpelajaran_update.php?id=<?php echo $row['id_course']; ?>" class="btn btn-primary shadow btn-xs sharp me-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form method="post" action="">
                                                            <input type="hidden" name="course_id" value="<?php echo $row['id_course']; ?>">
                                                            <button type="submit" name="delete_course" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are you sure you want to delete this course?');">
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
                                        <th>Name</th>
                                        <th>day</th>
                                        <th>start hours</th>
                                        <th>end hours</th>

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
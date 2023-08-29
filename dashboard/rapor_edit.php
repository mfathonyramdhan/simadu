﻿<?php
$pageTitle = "Edit Rapor";
include 'template/header.php';
include 'template/sidebar.php';
include '../connection.php';


// Check if the student ID is provided in the URL
if (isset($_GET['id'])) {
    $raportId = $_GET['id'];

    // Retrieve the student data from the database 
    $query = "SELECT * FROM rapor r JOIN siswa s  ON s.id_siswa = r.id_siswa WHERE r.id_rapor = $raportId";
    $result = mysqli_query($connection, $query);

    var_dump($result);
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
                                <form method="POST" action="rapor_edit_process.php">
                                    <input type="hidden" name="id_rapor" value="<?php echo $student['id_rapor']; ?>">

                                    <input type="hidden" name="id_siswa" value="<?php echo $student['id_siswa']; ?>">

                                    <div class="row">
                                        <div class="row" style="margin-bottom : 20px;">
                                            <div class="col">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $student['nama']; ?>" disabled>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Semester</label>
                                                <select class="form-select" name="semester">
                                                    <option value="1" <?php if ($student['semester'] == 1) echo "selected"; ?>>1</option>
                                                    <option value="2" <?php if ($student['semester'] == 2) echo "selected"; ?>>2</option>

                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="form-label">Tahun Pelajaran</label>
                                                <select class="form-select" name="tapel">
                                                    <option value="20232024" <?php if ($student['tapel'] == "20232024") echo "selected"; ?>>2023/2024</option>
                                                    <option value="20242025" <?php if ($student['tapel'] == "20242025") echo "selected"; ?>>2024/2025</option>
                                                    <option value="20252026" <?php if ($student['tapel'] == "20252026") echo "selected"; ?>>2025/2026</option>


                                                </select>
                                            </div>

                                        </div>




                                        <div class="row" style="margin-bottom : 20px;">
                                            <hr>
                                            </hr>
                                            <h4> A. Sikap</h4>
                                            <h6>1. Sikap Spiritual</h6>

                                            <div class="col">
                                                <label class="form-label">Predikat</label>
                                                <select class="form-select" name="spir_predikat">
                                                    <option value="Kurang" <?php if ($student['spir_predikat'] === 'Kurang') echo 'selected'; ?>>Kurang</option>
                                                    <option value="Cukup" <?php if ($student['spir_predikat'] === 'Cukup') echo 'selected'; ?>>Cukup</option>
                                                    <option value="Baik" <?php if ($student['spir_predikat'] === 'Baik') echo 'selected'; ?>>Baik</option>

                                                </select>
                                            </div>

                                            <div class="col">
                                                <label class="form-label">Deskripsi</label>
                                                <input type="text" class="form-control" name="spir_desk" value="<?php echo $student['spir_desk']; ?>">
                                            </div>

                                        </div>

                                        <div class="row" style="margin-bottom: 20px;">
                                            <h6>2. Sikap Sosial</h6>

                                            <div class="col">
                                                <label class="form-label">Predikat</label>
                                                <select class="form-select" name="sos_predikat">
                                                    <option value="Kurang" <?php if ($student['sos_predikat'] === 'Kurang') echo 'selected'; ?>>Kurang</option>
                                                    <option value="Cukup" <?php if ($student['sos_predikat'] === 'Cukup') echo 'selected'; ?>>Cukup</option>
                                                    <option value="Baik" <?php if ($student['sos_predikat'] === 'Baik') echo 'selected'; ?>>Baik</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label class="form-label">Deskripsi</label>
                                                <input type="text" class="form-control" name="sos_desk" value="<?php echo $student['sos_desk']; ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                            </hr>
                                            <h4>B. Pengetahuan dan Keterampilan</h4>
                                            <h6>&nbsp;&nbsp;1. Pendidikan Agama Islam</h6>
                                            <div class="row">
                                                <h6>&nbsp;&nbsp;&nbsp; A. Al-Qur'an Hadits</h6>
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_qurdis_nilai" value="<?php echo $student['p_qurdis_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_qurdis_desk" value="<?php echo $student['p_qurdis_desk']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h6>&nbsp;&nbsp;&nbsp; B. Akidah Akhlaq</h6>
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_aa_nilai" value="<?php echo $student['p_aa_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_aa_desk" value="<?php echo $student['p_aa_desk']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h6>&nbsp;&nbsp;&nbsp; C. Fikih</h6>
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_fikih_nilai" value="<?php echo $student['p_fikih_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_fikih_desk" value="<?php echo $student['p_fikih_desk']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h6>&nbsp;&nbsp;&nbsp; D. Sejarah Kebudayaan Islam</h6>
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_ski_nilai" value="<?php echo $student['p_ski_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_ski_desk" value="<?php echo $student['p_ski_desk']; ?>">
                                                </div>
                                            </div>


                                            <h6>&nbsp;&nbsp;2. Pendidikan Pancasila dan Kewarganegaraan</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_pp_nilai" value="<?php echo $student['p_pp_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_pp_desk" value="<?php echo $student['p_pp_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;3. Bahasa Indonesia</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_bi_nilai" value="<?php echo $student['p_bi_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_bi_desk" value="<?php echo $student['p_bi_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;4. Matematika</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_mtk_nilai" value="<?php echo $student['p_mtk_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_mtk_desk" value="<?php echo $student['p_mtk_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;5. Bahasa Arab</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_ba_nilai" value="<?php echo $student['p_ba_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_ba_desk" value="<?php echo $student['p_ba_desk']; ?>">
                                                </div>
                                            </div>


                                            <h6>&nbsp;&nbsp;6. Sejarah Indonesia</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_si_nilai" value="<?php echo $student['p_si_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_si_desk" value="<?php echo $student['p_si_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;7. Bahasa Inggris</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_big_nilai" value="<?php echo $student['p_big_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_big_desk" value="<?php echo $student['p_big_desk']; ?>">
                                                </div>
                                            </div>

                                            <h4>&nbsp;&nbsp;Kelompok B</h4>

                                            <h6>&nbsp;&nbsp;1. Seni Budaya</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_sb_nilai" value="<?php echo $student['p_sb_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_sb_desk" value="<?php echo $student['p_sb_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;2. Pendidikan Jasmani, Olahraga dan Kesehatan</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_pjok_nilai" value="<?php echo $student['p_pjok_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_pjok_desk" value="<?php echo $student['p_pjok_desk']; ?>">
                                                </div>
                                            </div>


                                            <h6>&nbsp;&nbsp;3. Prakarya dan Kewirausahaan</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_pk_nilai" value="<?php echo $student['p_pk_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_pk_desk" value="<?php echo $student['p_pk_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;4. Muatan Lokal</h6>
                                            <h6>&nbsp;&nbsp;&nbsp; A. Aswaja</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_aswaja_nilai" value="<?php echo $student['p_aswaja_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_aswaja_desk" value="<?php echo $student['p_aswaja_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;&nbsp; B. Informatika</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_inf_nilai" value="<?php echo $student['p_inf_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_inf_desk" value="<?php echo $student['p_inf_desk']; ?>">
                                                </div>
                                            </div>

                                            <h4>Kelompok C</h4>

                                            <h6>&nbsp;&nbsp;1. Geografi</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_geo_nilai" value="<?php echo $student['p_geo_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_geo_desk" value="<?php echo $student['p_geo_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;2. Sejarah</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_sj_nilai" value="<?php echo $student['p_sj_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_sj_desk" value="<?php echo $student['p_sj_desk']; ?>">
                                                </div>
                                            </div>


                                            <h6>&nbsp;&nbsp;3. Sosiologi</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_sos_nilai" value="<?php echo $student['p_sos_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_sos_desk" value="<?php echo $student['p_sos_desk']; ?>">
                                                </div>
                                            </div>

                                            <h6>&nbsp;&nbsp;4. Ekonomi</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="p_eko_nilai" value="<?php echo $student['p_eko_nilai']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Deskripsi</label>
                                                    <input type="text" class="form-control" name="p_eko_desk" value="<?php echo $student['p_eko_desk']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                            </hr>
                                            <h4> C. Ekstrakurikuler</h4>
                                            <div class="row">
                                                <h6>&nbsp;&nbsp;Ekstrakurikuler 1</h6>
                                                <div class="col">
                                                    <label class="form-label">Nama Ekstrakurikuler</label>
                                                    <input type="text" class="form-control" name="eks1_nama" value="<?php echo $student['eks1_nama']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="eks1_nilai" value="<?php echo $student['eks1_nilai']; ?>">
                                                </div>

                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="eks1_ket" value="<?php echo $student['eks1_ket']; ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <h6>&nbsp;&nbsp;Ekstrakurikuler 2</h6>
                                                <div class="col">
                                                    <label class="form-label">Nama Ekstrakurikuler</label>
                                                    <input type="text" class="form-control" name="eks2_nama" value="<?php echo $student['eks2_nama']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Nilai</label>
                                                    <input type="number" class="form-control" name="eks2_nilai" value="<?php echo $student['eks2_nilai']; ?>">
                                                </div>

                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="eks2_ket" value="<?php echo $student['eks2_ket']; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <hr>
                                            </hr>
                                            <h4>D. Prestasi</h4>
                                            <div class="row">
                                                <h6>&nbsp;&nbsp;Prestasi 1</h6>
                                                <div class="col">
                                                    <label class="form-label">Jenis Prestasi</label>
                                                    <input type="text" class="form-control" name="pres1_jenis" value="<?php echo $student['pres1_jenis']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="pres1_ket" value="<?php echo $student['pres1_ket']; ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <h6>&nbsp;&nbsp;Prestasi 2</h6>
                                                <div class="col">
                                                    <label class="form-label">Jenis Prestasi</label>
                                                    <input type="text" class="form-control" name="pres2_jenis" value="<?php echo $student['pres2_jenis']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="pres2_ket" value="<?php echo $student['pres2_ket']; ?>">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <h6>&nbsp;&nbsp;Prestasi 3</h6>
                                                <div class="col">
                                                    <label class="form-label">Jenis Prestasi</label>
                                                    <input type="text" class="form-control" name="pres3_jenis" value="<?php echo $student['pres3_jenis']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" name="pres3_ket" value="<?php echo $student['pres3_ket']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                            </hr>
                                            <h4>E. Ketidak Hadiran</h4>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Sakit</label>
                                                    <input type="number" class="form-control" name="sakit" value="<?php echo $student['sakit']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Ijin</label>
                                                    <input type="number" class="form-control" name="ijin" value="<?php echo $student['ijin']; ?>">
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Alpa</label>
                                                    <input type="number" class="form-control" name="alpa" value="<?php echo $student['alpa']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                            </hr>
                                            <h4>F. Catatan Wali Kelas</h4>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Catatan wali kelas</label>
                                                    <textarea class="form-control" name="cat_guru"><?php echo $student['cat_guru']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                            </hr>
                                            <h4>Keterangan Naik Kelas</h4>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-label">Predikat</label>
                                                    <select class="form-select" name="ket_naik_kelas">
                                                        <option value="naik" <?php if ($student['ket_naik_kelas'] === 'naik') echo 'selected'; ?>>Naik Kelas</option>
                                                        <option value="tetap" <?php if ($student['ket_naik_kelas'] === 'tetap') echo 'selected'; ?>>Tetap Di Kelas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>










                                    </div>

                                    <!-- ... -->
                                    <!-- ... -->
                                    <!-- ... -->


                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Update Rapor</button>
                                        <a href="rapor_print.php?id=<?php echo $student['id_siswa']; ?>" class="btn btn-secondary">Cancel</a>
                                    </div>
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
        echo "Siswa tidak ditemukan.";
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    echo "Invalid student ID.";
}

include 'template/footer.php';
?>
<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $idSiswa = $_POST['id_siswa'];
  $semester = $_POST['semester'];
  $tapel = $_POST['tapel'];
  $spirPredikat = $_POST['spir_predikat'];
  $spirDeskripsi = $_POST['spir_desk'];
  $sosPredikat = $_POST['sos_predikat'];
  $sosDeskripsi = $_POST['sos_desk'];
  $pQurdisNilai = $_POST['p_qurdis_nilai'];
  $pQurdisDesk = $_POST['p_qurdis_desk'];
  $pAaNilai = $_POST['p_aa_nilai'];
  $pAaDesk = $_POST['p_aa_desk'];
  $pFikihNilai = $_POST['p_fikih_nilai'];
  $pFikihDesk = $_POST['p_fikih_desk'];
  $pSkiNilai = $_POST['p_ski_nilai'];
  $pSkiDesk = $_POST['p_ski_desk'];

  $pSbNilai = $_POST['p_sb_nilai'];
  $pSbDesk = $_POST['p_sb_desk'];
  $pPjokNilai = $_POST['p_pjok_nilai'];
  $pPjokDesk = $_POST['p_pjok_desk'];
  $pPkNilai = $_POST['p_pk_nilai'];
  $pPkDesk = $_POST['p_pk_desk'];
  $pAswajaNilai = $_POST['p_aswaja_nilai'];
  $pAswajaDesk = $_POST['p_aswaja_desk'];
  $pInfNilai = $_POST['p_inf_nilai'];
  $pInfDesk = $_POST['p_inf_desk'];

  $pGeoNilai = $_POST['p_geo_nilai'];
  $pGeoDesk = $_POST['p_geo_desk'];
  $pSjNilai = $_POST['p_sj_nilai'];
  $pSjDesk = $_POST['p_sj_desk'];
  $pSosNilai = $_POST['p_sos_nilai'];
  $pSosDesk = $_POST['p_sos_desk'];
  $pEkoNilai = $_POST['p_eko_nilai'];
  $pEkoDesk = $_POST['p_eko_desk'];

  $eks1Nama = $_POST['eks1_nama'];
  $eks1Nilai = $_POST['eks1_nilai'];
  $eks1Ket = $_POST['eks1_ket'];

  $eks2Nama = $_POST['eks2_nama'];
  $eks2Nilai = $_POST['eks2_nilai'];
  $eks2Ket = $_POST['eks2_ket'];

  $pres1Jenis = $_POST['pres1_jenis'];
  $pres1Ket = $_POST['pres1_ket'];

  $pres2Jenis = $_POST['pres2_jenis'];
  $pres2Ket = $_POST['pres2_ket'];

  $pres3Jenis = $_POST['pres3_jenis'];
  $pres3Ket = $_POST['pres3_ket'];

  $sakit = $_POST['sakit'];
  $ijin = $_POST['ijin'];
  $alpa = $_POST['alpa'];

  $catGuru = $_POST['cat_guru'];

  $ketNaikKelas = $_POST['ket_naik_kelas'];

  // Perform the insert operation to add a new record to the rapor table
  $query = "INSERT INTO rapor (
        id_siswa, semester, tapel, 
        spir_predikat, spir_desk,
        sos_predikat, sos_desk,
        p_qurdis_nilai, p_qurdis_desk,
        p_aa_nilai, p_aa_desk,
        p_fikih_nilai, p_fikih_desk,
        p_ski_nilai, p_ski_desk,
        p_sb_nilai, p_sb_desk,
        p_pjok_nilai, p_pjok_desk,
        p_pk_nilai, p_pk_desk,
        p_aswaja_nilai, p_aswaja_desk,
        p_inf_nilai, p_inf_desk,
        p_geo_nilai, p_geo_desk,
        p_sj_nilai, p_sj_desk,
        p_sos_nilai, p_sos_desk,
        p_eko_nilai, p_eko_desk,
        eks1_nama, eks1_nilai, eks1_ket,
        eks2_nama, eks2_nilai, eks2_ket,
        pres1_jenis, pres1_ket,
        pres2_jenis, pres2_ket,
        pres3_jenis, pres3_ket,
        sakit, ijin, alpa,
        cat_guru, ket_naik_kelas
      )
      VALUES (
        '$idSiswa', '$semester', '$tapel',
        '$spirPredikat', '$spirDeskripsi',
        '$sosPredikat', '$sosDeskripsi',
        '$pQurdisNilai', '$pQurdisDesk',
        '$pAaNilai', '$pAaDesk',
        '$pFikihNilai', '$pFikihDesk',
        '$pSkiNilai', '$pSkiDesk',
        '$pSbNilai', '$pSbDesk',
        '$pPjokNilai', '$pPjokDesk',
        '$pPkNilai', '$pPkDesk',
        '$pAswajaNilai', '$pAswajaDesk',
        '$pInfNilai', '$pInfDesk',
        '$pGeoNilai', '$pGeoDesk',
        '$pSjNilai', '$pSjDesk',
        '$pSosNilai', '$pSosDesk',
        '$pEkoNilai', '$pEkoDesk',
        '$eks1Nama', '$eks1Nilai', '$eks1Ket',
        '$eks2Nama', '$eks2Nilai', '$eks2Ket',
        '$pres1Jenis', '$pres1Ket',
        '$pres2Jenis', '$pres2Ket',
        '$pres3Jenis', '$pres3Ket',
        '$sakit', '$ijin', '$alpa',
        '$catGuru', '$ketNaikKelas'
      )";

  $result = mysqli_query($connection, $query);
  // if (!$result) {
  //   die("Insertion error: " . mysqli_error($connection));
  // }
  // Close the database connection
  mysqli_close($connection);

  // Redirect back to the page where the form was submitted from
  header("Location: rapor_k1.php ");
  exit();
}

<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $idRapor = $_POST['id_rapor'];

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

  // Process Pendidikan Pancasila dan Kewarganegaraan fields
  $pPpNilai = $_POST['p_pp_nilai'];
  $pPpDesk = $_POST['p_pp_desk'];

  // Process Bahasa Indonesia fields
  $pBiNilai = $_POST['p_bi_nilai'];
  $pBiDesk = $_POST['p_bi_desk'];

  // Process Matematika fields
  $pMtkNilai = $_POST['p_mtk_nilai'];
  $pMtkDesk = $_POST['p_mtk_desk'];

  // Process Bahasa Arab fields
  $pBaNilai = $_POST['p_ba_nilai'];
  $pBaDesk = $_POST['p_ba_desk'];

  // Process Sejarah Indonesia fields
  $pSiNilai = $_POST['p_si_nilai'];
  $pSiDesk = $_POST['p_si_desk'];

  // Process Bahasa Inggris fields
  $pBigNilai = $_POST['p_big_nilai'];
  $pBigDesk = $_POST['p_big_desk'];


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
  $query = "UPDATE rapor SET
    id_siswa = '$idSiswa', semester = '$semester', tapel = '$tapel',
    spir_predikat = '$spirPredikat', spir_desk = '$spirDeskripsi',
    sos_predikat = '$sosPredikat', sos_desk = '$sosDeskripsi',
    p_qurdis_nilai = '$pQurdisNilai', p_qurdis_desk = '$pQurdisDesk',
    p_aa_nilai = '$pAaNilai', p_aa_desk = '$pAaDesk',
    p_fikih_nilai = '$pFikihNilai', p_fikih_desk = '$pFikihDesk',
    p_ski_nilai = '$pSkiNilai', p_ski_desk = '$pSkiDesk',
    p_pp_nilai = '$pPpNilai', p_pp_desk = '$pPpDesk',
    p_bi_nilai = '$pBiNilai', p_bi_desk = '$pBiDesk',
    p_mtk_nilai = '$pMtkNilai', p_mtk_desk = '$pMtkDesk',
    p_ba_nilai = '$pBaNilai', p_ba_desk = '$pBaDesk',
    p_si_nilai = '$pSiNilai', p_si_desk = '$pSiDesk',
    p_big_nilai = '$pBigNilai', p_big_desk = '$pBigDesk',
    p_sb_nilai = '$pSbNilai', p_sb_desk = '$pSbDesk',
    p_pjok_nilai = '$pPjokNilai', p_pjok_desk = '$pPjokDesk',
    p_pk_nilai = '$pPkNilai', p_pk_desk = '$pPkDesk',
    p_aswaja_nilai = '$pAswajaNilai', p_aswaja_desk = '$pAswajaDesk',
    p_inf_nilai = '$pInfNilai', p_inf_desk = '$pInfDesk',
    p_geo_nilai = '$pGeoNilai', p_geo_desk = '$pGeoDesk',
    p_sj_nilai = '$pSjNilai', p_sj_desk = '$pSjDesk',
    p_sos_nilai = '$pSosNilai', p_sos_desk = '$pSosDesk',
    p_eko_nilai = '$pEkoNilai', p_eko_desk = '$pEkoDesk',
    eks1_nama = '$eks1Nama', eks1_nilai = '$eks1Nilai', eks1_ket = '$eks1Ket',
    eks2_nama = '$eks2Nama', eks2_nilai = '$eks2Nilai', eks2_ket = '$eks2Ket',
    pres1_jenis = '$pres1Jenis', pres1_ket = '$pres1Ket',
    pres2_jenis = '$pres2Jenis', pres2_ket = '$pres2Ket',
    pres3_jenis = '$pres3Jenis', pres3_ket = '$pres3Ket',
    sakit = '$sakit', ijin = '$ijin', alpa = '$alpa',
    cat_guru = '$catGuru', ket_naik_kelas = '$ketNaikKelas'
WHERE id_rapor = '$idRapor'";


  $result = mysqli_query($connection, $query);
  // if (!$result) {
  //   die("Insertion error: " . mysqli_error($connection));
  // }
  // Close the database connection
  mysqli_close($connection);

  // Redirect back to the page where the form was submitted from
  header("Location: rapor_print.php?id=$idSiswa");
  exit();
}

<?php
$pageTitle = "Print Rapor Siswa";
include '../connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idRapor = $_GET['id'];

    // Fetch student's data from the database based on id_siswa
    $query = "SELECT r.*, s.nama AS siswa_nama, s.id_kelas AS siswa_kelas FROM rapor r
    JOIN siswa s ON r.id_siswa = s.id_siswa
    WHERE r.id_rapor = $idRapor";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $raporData = mysqli_fetch_assoc($result);
?>


        <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="keywords" content="">
            <meta name="author" content="">
            <meta name="robots" content="">
            <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Microsoft Excel 15">
            <!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
            <style id="dimadu_template_raport_21966_Styles">
                <!--table
                {
                    mso-displayed-decimal-separator: "\,";
                    mso-displayed-thousand-separator: "\.";
                }

                .font521966 {
                    color: windowtext;
                    font-size: 10.5pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                }

                .font621966 {
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                }

                .font721966 {
                    color: windowtext;
                    font-size: 9.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                }

                .font821966 {
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                }

                .xl1521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl6521966 {
                    color: windowtext;
                    font-size: 10.5pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                    padding-left: 9px;
                    mso-char-indent-count: 1;
                }

                .xl6621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl6721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl6821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl6921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl7221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7621966 {
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: right;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                    padding-right: 9px;
                    mso-char-indent-count: 1;
                }

                .xl7721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 9.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 9.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl7921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 9.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: none;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl8221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT";
                    mso-generic-font-family: auto;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT";
                    mso-generic-font-family: auto;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT";
                    mso-generic-font-family: auto;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: bottom;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border-top: none;
                    border-right: .5pt solid black;
                    border-bottom: none;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl8721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl8821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT";
                    mso-generic-font-family: auto;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl8921966 {
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: right;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                    padding-right: 18px;
                    mso-char-indent-count: 2;
                }

                .xl9021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border-top: none;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl9121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl9221966 {
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: right;
                    vertical-align: top;
                    border: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                    padding-right: 9px;
                    mso-char-indent-count: 1;
                }

                .xl9321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl9421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl9521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 8.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl9621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: .5pt solid black;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl9721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: "Arial MT", sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: 0;
                    text-align: center;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: .5pt solid black;
                    border-bottom: .5pt solid black;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                    mso-text-control: shrinktofit;
                }

                .xl9821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl9921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 10.0pt;
                    font-weight: 400;
                    font-style: italic;
                    text-decoration: none;
                    font-family: "Times New Roman", serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 10.0pt;
                    font-weight: 400;
                    font-style: italic;
                    text-decoration: none;
                    font-family: "Times New Roman", serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    border-top: none;
                    border-right: none;
                    border-bottom: 1.0pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    border-top: none;
                    border-right: none;
                    border-bottom: 1.0pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: bottom;
                    border: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl10821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 10.5pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: top;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl10921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: windowtext;
                    font-size: 10.5pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl11021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl11121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: top;
                    border-top: .5pt solid black;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl11221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: top;
                    border-top: none;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid black;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl11321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: top;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl11421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl11521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl11621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl11721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl11821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl11921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: .5pt solid windowtext;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: none;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl12921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl13021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl13121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl13221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl13321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl13421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 9.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl13521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 9.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl13621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 9.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl13721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl13821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl13921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 700;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl14021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: center;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: none;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl14121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 9.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl14221966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 9.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl14321966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 9.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl14421966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl14521966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl14621966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 8.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border-top: .5pt solid windowtext;
                    border-right: .5pt solid windowtext;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl14721966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    border-top: .5pt solid windowtext;
                    border-right: none;
                    border-bottom: none;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl14821966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    border: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl14921966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: top;
                    border: .5pt solid windowtext;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: normal;
                }

                .xl15021966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: left;
                    vertical-align: middle;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }

                .xl15121966 {
                    padding: 0px;
                    mso-ignore: padding;
                    color: black;
                    font-size: 11.0pt;
                    font-weight: 400;
                    font-style: normal;
                    text-decoration: none;
                    font-family: Calibri, sans-serif;
                    mso-font-charset: 0;
                    mso-number-format: General;
                    text-align: general;
                    vertical-align: bottom;
                    border-top: none;
                    border-right: none;
                    border-bottom: .5pt solid windowtext;
                    border-left: none;
                    mso-background-source: auto;
                    mso-pattern: auto;
                    white-space: nowrap;
                }
                -->
            </style>

            <title>SIMADU - Print Rapor</title>
            <link rel="shortcut icon" type="image/png" href="images/favicon.png">

        </head>

        <body>
            <!--[if !excel]>&nbsp;&nbsp;<![endif]-->
            <!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
            <!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
            <!----------------------------->
            <!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
            <!----------------------------->

            <div id="dimadu_template_raport_21966" align=center x:publishsource="Excel">



                <table border=0 cellpadding=0 cellspacing=0 width=679 style='border-collapse:
 collapse;table-layout:fixed;width:510pt'>
                    <col width=64 style='width:48pt'>
                    <col width=21 style='mso-width-source:userset;mso-width-alt:768;width:16pt'>
                    <col width=64 span=4 style='width:48pt'>
                    <col width=18 style='mso-width-source:userset;mso-width-alt:658;width:14pt'>
                    <col width=64 span=4 style='width:48pt'>
                    <col width=64 style='width:48pt'>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 width=615 style='height:15.0pt;width:462pt' align=left valign=top><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
   coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
   filled="f" stroked="f">
   <v:stroke joinstyle="miter"/>
   <v:formulas>
    <v:f eqn="if lineDrawn pixelLineWidth 0"/>
    <v:f eqn="sum @0 1 0"/>
    <v:f eqn="sum 0 0 @1"/>
    <v:f eqn="prod @2 1 2"/>
    <v:f eqn="prod @3 21600 pixelWidth"/>
    <v:f eqn="prod @3 21600 pixelHeight"/>
    <v:f eqn="sum @0 0 1"/>
    <v:f eqn="prod @6 1 2"/>
    <v:f eqn="prod @7 21600 pixelWidth"/>
    <v:f eqn="sum @8 21600 0"/>
    <v:f eqn="prod @7 21600 pixelHeight"/>
    <v:f eqn="sum @10 21600 0"/>
   </v:formulas>
   <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
   <o:lock v:ext="edit" aspectratio="t"/>
  </v:shapetype><v:shape id="image1.jpeg" o:spid="_x0000_s1025" type="#_x0000_t75"
   style='position:absolute;margin-left:0;margin-top:0;width:62.25pt;height:56.25pt;
   z-index:1;visibility:visible' o:gfxdata="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
c1BLBQYAAAAABgAGAIUBAAD8UwAAAAA=
">
   <v:imagedata src="simadu_template_raport_files/dimadu_template_raport_21966_image001.png"
    o:title=""/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:CF>Bitmap</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><v:shape id="image2.jpeg" o:spid="_x0000_s1026" type="#_x0000_t75"
   style='position:absolute;margin-left:395.25pt;margin-top:0;width:56.25pt;
   height:56.25pt;z-index:2;visibility:visible' o:gfxdata="UEsDBBQABgAIAAAAIQD0vmNdDgEAABoCAAATAAAAW0NvbnRlbnRfVHlwZXNdLnhtbJSRQU7DMBBF
90jcwfIWJQ4sEEJJuiCwhAqVA1j2JDHEY8vjhvb2OEkrQVWQWNoz7//npFzt7MBGCGQcVvw6LzgD
VE4b7Cr+tnnK7jijKFHLwSFUfA/EV/XlRbnZeyCWaKSK9zH6eyFI9WAl5c4DpknrgpUxHUMnvFQf
sgNxUxS3QjmMgDGLUwavywZauR0ie9yl68Xk3UPH2cOyOHVV3NgpYB6Is0yAgU4Y6f1glIzpdWJE
fWKWHazyRM471BtPV0mdn2+YJj+lvhccuJf0OYPRwNYyxGdpk7rQgYQ3Km4DpK3875xJ1FLm2tYo
yJtA64U8iv1WoN0nBhj/m94k7BXGY7qY/2z9BQAA//8DAFBLAwQUAAYACAAAACEACMMYpNQAAACT
AQAACwAAAF9yZWxzLy5yZWxzpJDBasMwDIbvg76D0X1x2sMYo05vg15LC7saW0nMYstIbtq+/UzZ
YBm97ahf6PvEv91d46RmZAmUDKybFhQmRz6kwcDp+P78CkqKTd5OlNDADQV23eppe8DJlnokY8ii
KiWJgbGU/Ka1uBGjlYYyprrpiaMtdeRBZ+s+7YB607Yvmn8zoFsw1d4b4L3fgDrecjX/YcfgmIT6
0jiKmvo+uEdU7emSDjhXiuUBiwHPcg8Z56Y+B/qxd/1Pbw6unBk/qmGh/s6r+ceuF1V2XwAAAP//
AwBQSwMEFAAGAAgAAAAhALzFCDKuAgAAWAYAABIAAABkcnMvcGljdHVyZXhtbC54bWysVdFumzAU
fZ+0f0B+JxhCIEElFQlhqlRt0bR9gGtM4g0wst00VbV/37UdGm1R1WrdE5drfO/xOeeaq+tj13oH
JhUXfY7CCUYe66moeb/L0fdvlT9HntKkr0krepajR6bQ9fLjh6tjLTPS072QHpToVQaJHO21HrIg
UHTPOqImYmA9rDZCdkTDq9wFtSQPULxrgwjjJFCDZKRWe8Z06VbQ0taGbmvWtoVt4VKNFJ2LqGiX
i6vAYDCh3QDBl6ZZxmGchOnzmknZZSkeltilTTjmzPo5bb+2Zc+92FF79JijNIyn6Qx59PE5DlyZ
gVMX9Ictp1vpXujnw1Z6vM5RgryedEAe78iORZMfA9vBKUkGpW+VPvFH/oG9jvB+rOTdS56jp6qK
VrNNFfsVRH6MV7G/2sQLv4qm802UVutomvwye8Iko8C9BuFv6hFDmFyg6DiVQolGT6joAtE0nLJR
RdAwjAOLwp70qZyGOCpL7BdRnED3tPSLNCx8HCczvCrmq1UE3YG3wJ5+fAILEFo5DWtnAh2dJAOK
bwX9qUacFyhfd5pD2Yv1nvQ7VqiBUQ2Ot2DGzq6dBfKHlnctHyregtNIZuJ3w3Aj86aBcYyXgt53
rNduaiRrrXBqzweFPJmx7o6B0+RNHYJDYWA12G2QvNejPSzFlvSTUaJ5gfEiWvnrGV4bqTZ+sYhT
P8WbNMbxPFyHa2eUOLtXDOgnbTnw8ehhfKHBa07BJ6ccSJsj/JILHMOGaaUl03Q/drzo90bNTakG
xPsKgjvnnQqfLHcW19hADcZ/JDs2svsfnUE+D26PGZ6H8yRFHtwe9uhOipcvFhgQA8FAGaTSn5h4
NxzPFAKTAA/WFeQApnCMjC1OlDgS7Bw8X2605eC/kmhithiq/rqibc79Epa/AQAA//8DAFBLAwQK
AAAAAAAAACEAvOKSuNhCAADYQgAAFQAAAGRycy9tZWRpYS9pbWFnZTEuanBlZ//Y/+AAEEpGSUYA
AQEBANwA3AAA/9sAQwACAQEBAQECAQEBAgICAgIEAwICAgIFBAQDBAYFBgYGBQYGBgcJCAYHCQcG
BggLCAkKCgoKCgYICwwLCgwJCgoK/9sAQwECAgICAgIFAwMFCgcGBwoKCgoKCgoKCgoKCgoKCgoK
CgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoK/8AAEQgArACsAwEiAAIRAQMRAf/EAB8A
AAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUS
ITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElK
U1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4
ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEA
AAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKB
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
hQEAAFxKAAAAAA==
">
   <v:imagedata src="simadu_template_raport_files/dimadu_template_raport_21966_image002.png"
    o:title=""/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:CF>Bitmap</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><![endif]-->
                            <![if !vml]><span style='mso-ignore:vglayout;
  position:absolute;z-index:1;margin-left:0px;margin-top:0px;width:602px;
  height:75px'>
                                <table cellpadding=0 cellspacing=0>
                                    <tr>
                                        <td width=0 height=0></td>
                                        <td width=83></td>
                                        <td width=444></td>
                                        <td width=75></td>
                                    </tr>
                                    <tr>
                                        <td height=75></td>
                                        <td align=left valign=top><img width=75 height=75 src="simadu_template_raport_files/dimadu_template_raport_21966_image004.png" v:shapes="image2.jpeg"></td>

                                    </tr>
                                </table>
                            </span>
                            <![endif]><span style='mso-ignore:vglayout2'>
                                <table cellpadding=0 cellspacing=0>

                                </table>
                            </span>
                        </td>
                        <td class=xl1521966 width=64 style='width:48pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl9821966 style='height:15.0pt'>MAS DARUL ULUM</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl9921966 style='height:15.0pt'>JL. Cermee No
                            12</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=21 style='height:15.75pt'>
                        <td colspan=11 height=21 class=xl10021966 style='height:15.75pt'>Kecamatan
                            Kapongan, Kabupaten Situbondo - Jawa Timur</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'>Nama</td>
                        <td class=xl1521966 colspan=2>: <?php echo $raporData['siswa_nama']; ?>
                        </td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2>Madrasah</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2>: MA Darul Ulum</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'>NIS</td>
                        <td class=xl1521966 colspan=2>: NIS</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=3>Kelas/Semester</td>
                        <td class="xl1521966">:
                            <?php
                            if ($raporData['siswa_kelas'] == 1) {
                                echo 'X';
                            } elseif ($raporData['siswa_kelas'] == 2) {
                                echo 'XI';
                            } elseif ($raporData['siswa_kelas'] == 3) {
                                echo 'XII';
                            }
                            echo ' / ' . $raporData['semester'];
                            ?>
                        </td>

                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=21 style='height:15.75pt'>
                        <td height=21 class=xl10121966 style='height:15.75pt'>NISN</td>
                        <td class=xl10121966 colspan=2>: NISN</td>
                        <td class=xl10121966>&nbsp;</td>
                        <td class=xl10121966>&nbsp;</td>
                        <td class=xl10121966 colspan=3>Tahun Pelajaran</td>
                        <td class=xl10121966 colspan=2>: <?php echo $raporData['tapel']; ?>
                        </td>
                        <td class=xl10121966>&nbsp;</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl10221966 style='height:15.0pt'>CAPAIAN HASIL
                            BELAJAR</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl10321966 style='height:15.0pt'>A. SIKAP</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl10321966 colspan=3 style='height:15.0pt'><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>1. SIKAP SPIRITUAL</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=3 height=20 class=xl10421966 style='border-right:.5pt solid black;
  height:15.0pt'>Predikat</td>
                        <td colspan=8 class=xl10721966 style='border-left:none'>Deskripsi</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=3 rowspan=4 height=80 class=xl11421966 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:60.0pt'><?php echo $raporData['spir_predikat']; ?>
                        </td>
                        <td colspan=8 rowspan=4 class=xl12421966><?php echo $raporData['spir_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl10321966 colspan=3 style='height:15.0pt'><span style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp; </span>2. SIKAP SOSIAL</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=3 height=20 class=xl10421966 style='border-right:.5pt solid black;
  height:15.0pt'>Predikat</td>
                        <td colspan=8 class=xl10721966 style='border-left:none'>Deskripsi</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=3 rowspan=4 height=80 class=xl11421966 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:60.0pt'><?php echo $raporData['sos_predikat']; ?>
                        </td>
                        <td colspan=8 rowspan=4 class=xl12421966><?php echo $raporData['sos_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl10921966 width=615 style='height:15.0pt;
  width:462pt'>
                            <font class="font521966">B. PENGETAHUAN DAN KETERAMPILAN</font>
                        </td>
                        <td class=xl10821966 width=64 style='width:48pt'></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=12 height=20 class=xl6521966 width=679 style='height:15.0pt;
  width:510pt'>
                            <font class="font521966">Kriteria Ketuntasan Minimal = 69 (x)</font>
                        </td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=7 rowspan=2 height=40 class=xl6621966 width=359 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;height:30.0pt;width:270pt'>
                            <font class="font621966">Mata Pelajaran</font>
                        </td>
                        <td colspan=2 class=xl6921966 width=128 style='border-right:.5pt solid black;
  border-left:none;width:96pt'>
                            <font class="font621966">Pengetahuan (KI 3)</font>
                        </td>
                        <td colspan=2 class=xl6921966 width=128 style='border-right:.5pt solid black;
  border-left:none;width:96pt'>
                            <font class="font621966">Keterampilan (KI 4)</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl7521966 width=64 style='height:15.0pt;border-top:none;
  border-left:none;width:48pt'>
                            <font class="font621966">Nilai</font>
                        </td>
                        <td class=xl7521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font621966">Predikat</font>
                        </td>
                        <td class=xl7621966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font621966">Nilai</font>
                        </td>
                        <td class=xl7521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font621966">Predikat</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=7 height=20 class=xl7721966 width=359 style='border-right:.5pt solid black;
  height:15.0pt;width:270pt'>
                            <font class="font721966">Kelompok A</font>
                        </td>
                        <td class=xl8021966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8021966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8021966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8021966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td rowspan=5 height=100 class=xl8121966 style='border-bottom:.5pt solid black;
  height:75.0pt;border-top:none'>1</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Pendidikan Agama Islam</font>
                        </td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=6 height=20 class=xl8221966 width=295 style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:222pt'>
                            <font class="font821966">A. Al
                                Qur`an Hadis</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_qurdis_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_qurdis_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=6 height=20 class=xl8221966 width=295 style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:222pt'>
                            <font class="font821966">B.
                                Akidah Akhlak</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_aa_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_aa_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=6 height=20 class=xl8221966 width=295 style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:222pt'>
                            <font class="font821966">C. Fikih</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_fikih_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_fikih_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=6 height=20 class=xl8221966 width=295 style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:222pt'>
                            <font class="font821966">D.
                                Sejarah Kebudayaan Islam</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_ski_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_ski_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>2</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Pendidikan Pancasila
                                dan Kewarganegaraan</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_pp_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_pp_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>3</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Bahasa Indonesia</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_bi_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_bi_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>4</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Matematika</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_mtk_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_mtk_nilai']; ?>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>5</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Bahasa Arab</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_ba_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_ba_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>6</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Sejarah Indonesia</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_si_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_si_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>7</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Bahasa Inggris</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_big_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_big_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=11 height=20 class=xl7721966 width=615 style='border-right:.5pt solid black;
  height:15.0pt;width:462pt'>
                            <font class="font721966">Kelompok B</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>1</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Seni Budaya</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_sb_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_sb_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>2</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Pendidikan Jasmani,
                                Olahraga dan Kesehatan</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_pjok_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_pjok_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>3</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Prakarya dan
                                Kewirausahaan</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_pk_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_pk_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td rowspan=3 height=60 class=xl8121966 style='border-bottom:.5pt solid black;
  height:45.0pt;border-top:none'>4</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Muatan Lokal</font>
                        </td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl8521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='page-break-before:always;mso-height-source:userset;
  height:15.0pt'>
                        <td colspan=6 height=20 class=xl8221966 width=295 style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:222pt'>
                            <font class="font821966">A.
                                ASWAJA</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_aswaja_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_aswaja_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=6 height=20 class=xl8221966 width=295 style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:222pt'>
                            <font class="font821966">B.
                                INFORMATIKA</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_inf_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_inf_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=11 height=20 class=xl7721966 width=615 style='border-right:.5pt solid black;
  height:15.0pt;width:462pt'>
                            <font class="font721966">Kelompok C</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>1</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Geografi</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_geo_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_geo_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>2</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Sejarah</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_sj_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_sj_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>3</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Sosiologi</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_sos_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_sos_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl8721966 style='height:15.0pt;border-top:none'>4</td>
                        <td colspan=6 class=xl8221966 width=295 style='border-right:.5pt solid black;
  border-left:none;width:222pt'>
                            <font class="font821966">Ekonomi</font>
                        </td>
                        <td class=xl8721966 style='border-top:none;border-left:none'><?php echo $raporData['p_eko_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl8921966 style='border-top:none;border-left:none'><?php echo $raporData['p_eko_nilai']; ?></td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">&nbsp;</font>
                        </td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=7 height=20 class=xl7721966 width=359 style='border-right:.5pt solid black;
  height:15.0pt;width:270pt'>
                            <font class="font721966">Jumlah</font>
                        </td>
                        <td class=xl9121966 style='border-top:none;border-left:none'>&nbsp;</td>
                        <td class=xl8021966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl9221966 style='border-top:none;border-left:none'>&nbsp;</td>
                        <td class=xl8021966 width=64 style='border-top:none;border-left:none;
  width:48pt'>&nbsp;</td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=2 rowspan=2 height=40 class=xl6621966 width=85 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;height:30.0pt;width:64pt'>
                            <font class="font621966">KKM</font>
                        </td>
                        <td colspan=4 class=xl9321966 width=256 style='border-right:.5pt solid black;
  border-left:none;width:192pt'>
                            <font class="font621966">Predikat</font>
                        </td>
                        <td class=xl11021966 width=18 style='border-top:none;border-left:none;
  width:14pt'>&nbsp;</td>
                        <td class=xl11121966 width=64 style='border-top:none;width:48pt'>&nbsp;</td>
                        <td class=xl11121966 width=64 style='border-top:none;width:48pt'>&nbsp;</td>
                        <td class=xl11121966 width=64 style='border-top:none;width:48pt'>&nbsp;</td>
                        <td class=xl11121966 width=64 style='border-top:none;width:48pt'>&nbsp;</td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td height=20 class=xl7521966 width=64 style='height:15.0pt;border-top:none;
  border-left:none;width:48pt'>
                            <font class="font621966">D</font>
                        </td>
                        <td class=xl7521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font621966">C</font>
                        </td>
                        <td class=xl7521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font621966">B</font>
                        </td>
                        <td class=xl7521966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font621966">A</font>
                        </td>
                        <td class=xl11221966 width=18 style='border-left:none;width:14pt'>&nbsp;</td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=2 height=20 class=xl9621966 style='border-right:.5pt solid black;
  height:15.0pt'>69</td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">0 - 68</font>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">69 - 78</font>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">79 - 89</font>
                        </td>
                        <td class=xl8821966 width=64 style='border-top:none;border-left:none;
  width:48pt'>
                            <font class="font821966">90 - 100</font>
                        </td>
                        <td class=xl11221966 width=18 style='border-left:none;width:14pt'>&nbsp;</td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl11321966 width=64 style='width:48pt'></td>
                        <td class=xl7121966></td>
                    </tr>
                    <tr height=58 style='mso-height-source:userset;height:43.5pt'>
                        <td height=58 class=xl1521966 style='height:43.5pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=11 height=20 class=xl10921966 width=615 style='height:15.0pt;
  width:462pt'>DESKRIPSI PENGETAHUAN DAN KETERAMPILAN</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='mso-height-source:userset;height:15.0pt'>
                        <td colspan=4 height=20 class=xl12521966 style='border-right:.5pt solid black;
  height:15.0pt'>Mata Pelajaran</td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Pengetahuan (KI 3)</td>
                        <td colspan=3 class=xl12521966 style='border-right:.5pt solid black;
  border-left:none'>Keterampilan (KI 4)</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl12821966 style='border-right:.5pt solid black;
  height:15.0pt'>Kelompok A</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt;border-top:none'>1</td>
                        <td colspan=10 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>Pendidikan Agama Islam</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=46 style='mso-height-source:userset;height:35.1pt'>
                        <td height=46 class=xl12321966 style='height:35.1pt;border-top:none'>&nbsp;</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>A. Al Qur`an Hadis</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_qurdis_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_qurdis_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>&nbsp;</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>B. Akidah Akhlak</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_aa_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_aa_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>&nbsp;</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>C. Fikih</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_fikih_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_fikih_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>&nbsp;</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>D. Sejarah Kebudayaan <br> Islam</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_ski_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_ski_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>2</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Pendidikan Pancasila dan Kewarganegaraan</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_pp_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_pp_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>3</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>Bahasa Indonesia</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_bi_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_bi_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>4</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>Matematika</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_mtk_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_mtk_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>5</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>Bahasa Arab</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_ba_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_ba_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>6</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>Sejarah Indonesia</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_si_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_si_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>7</td>
                        <td colspan=3 class=xl12821966 style='border-right:.5pt solid black;
  border-left:none'>Bahasa Inggris</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_big_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_big_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl12821966 style='border-right:.5pt solid black;
  height:15.0pt'>Kelompok B</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>1</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Seni Budaya</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_sb_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_sb_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>2</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Pendidikan Jasmani, Olahraga dan Kesehatan</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_pjok_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_pjok_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>3</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Prakarya dan Kewirausahaan</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_pk_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_pk_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=16 style='mso-height-source:userset;height:12.0pt'>
                        <td height=16 class=xl12321966 style='height:12.0pt;border-top:none'>4</td>
                        <td colspan=10 class=xl13721966 style='border-right:.5pt solid black;
  border-left:none'>Muatan Lokal</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='page-break-before:always;mso-height-source:userset;
  height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>&nbsp;</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>A. ASWAJA</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_aswaja_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_aswaja_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>&nbsp;</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>B. INFORMATIKA</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_inf_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_inf_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl12821966 style='border-right:.5pt solid black;
  height:15.0pt'>Kelompok C</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>1</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Geografi</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_geo_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_geo_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>2</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Sejarah</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_sj_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_sj_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl12321966 style='height:30.0pt;border-top:none'>3</td>
                        <td colspan=3 class=xl13421966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Sosiologi</td>
                        <td colspan=4 class=xl13121966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_sos_desk']; ?>
                        </td>
                        <td colspan=3 class=xl13121966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_sos_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                        <td height=40 class=xl14021966 style='height:30.0pt;border-top:none'>4</td>
                        <td colspan=3 class=xl14121966 width=149 style='border-right:.5pt solid black;
  border-left:none;width:112pt'>Ekonomi</td>
                        <td colspan=4 class=xl14421966 width=210 style='border-right:.5pt solid black;
  border-left:none;width:158pt'><?php echo $raporData['p_eko_desk']; ?>
                        </td>
                        <td colspan=3 class=xl14421966 width=192 style='border-right:.5pt solid black;
  border-left:none;width:144pt'><?php echo $raporData['p_eko_desk']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=71 style='mso-height-source:userset;height:53.25pt'>
                        <td height=71 class=xl14721966 style='height:53.25pt'>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl14721966>&nbsp;</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl10321966 colspan=3 style='height:15.0pt'>C.
                            Ekstrakurikuler</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt'>No.</td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Kegiatan
                            Ekstrakurikuler</td>
                        <td colspan=2 class=xl12321966 style='border-left:none'>Nilai</td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Keterangan</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt;border-top:none'>1</td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['eks1_nama']; ?>
                        </td>
                        <td colspan=2 class=xl12321966 style='border-left:none'><?php echo $raporData['eks1_nilai']; ?>
                        </td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['eks1_ket']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt;border-top:none'>2</td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['eks2_nama']; ?>
                        </td>
                        <td colspan=2 class=xl12321966 style='border-left:none'><?php echo $raporData['eks2_nilai']; ?>
                        </td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['eks2_ket']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl10321966 colspan=2 style='height:15.0pt'>D. Prestasi</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt'>No.</td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Jenis Prestasi</td>
                        <td colspan=6 class=xl12321966 style='border-left:none'>Keterangan</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt;border-top:none'>1</td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['pres1_jenis']; ?>
                        </td>
                        <td colspan=6 class=xl14821966 style='border-left:none'><?php echo $raporData['pres1_ket']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt;border-top:none'>2</td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['pres2_jenis']; ?>
                        </td>
                        <td colspan=6 class=xl14821966 style='border-left:none'><?php echo $raporData['pres2_ket']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl12321966 style='height:15.0pt;border-top:none'>3</td>
                        <td colspan=4 class=xl14821966 style='border-left:none'><?php echo $raporData['pres3_jenis']; ?>
                        </td>
                        <td colspan=6 class=xl14821966 style='border-left:none'><?php echo $raporData['pres3_ket']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 colspan=3 style='height:15.0pt'>E.
                            Ketidakhadiran</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=5 height=20 class=xl12821966 style='border-right:.5pt solid black;
  height:15.0pt'>Sakit</td>
                        <td colspan=2 class=xl12321966 style='border-left:none'><?php echo $raporData['sakit']; ?>
                        </td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Hari</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=5 height=20 class=xl12821966 style='border-right:.5pt solid black;
  height:15.0pt'>Ijin</td>
                        <td colspan=2 class=xl12321966 style='border-left:none'><?php echo $raporData['ijin']; ?>
                        </td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Hari</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=5 height=20 class=xl12821966 style='border-right:.5pt solid black;
  height:15.0pt'>Alpa</td>
                        <td colspan=2 class=xl12321966 style='border-left:none'><?php echo $raporData['alpa']; ?>
                        </td>
                        <td colspan=4 class=xl12321966 style='border-left:none'>Hari</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 colspan=3 style='height:15.0pt'>F. Catatan Wali
                            Kelas</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=66 style='mso-height-source:userset;height:49.5pt'>
                        <td colspan=11 height=66 class=xl14921966 width=615 style='height:49.5pt;
  width:462pt'><?php echo $raporData['cat_guru']; ?>
                        </td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 colspan=4 style='height:15.0pt'>G. Tanggapan
                            Orang Tua/Wali</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=67 style='mso-height-source:userset;height:50.25pt'>
                        <td colspan=11 height=67 class=xl14921966 width=615 style='height:50.25pt;
  width:462pt'>&nbsp;</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td colspan=11 height=20 class=xl15021966 style='height:15.0pt'>Keterangan
                            Kenaikan Kelas : <?php echo $raporData['ket_naik_kelas']; ?> ke kelas XI</td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='page-break-before:always;height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 colspan=3 style='height:15.0pt'>Orang Tua/Wali</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=4>Situbondo, 30 September 2023</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2>Wali Kelas</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl15121966 style='height:15.0pt'>&nbsp;</td>
                        <td class=xl15121966>&nbsp;</td>
                        <td class=xl15121966>&nbsp;</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=3><?php
                                                        $query = "SELECT g.nama FROM guru g WHERE g.id_kelas = {$raporData['siswa_kelas']}";
                                                        $result = mysqli_query($connection, $query);

                                                        if ($result) {
                                                            // Fetch data from the result set, if needed
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo $guruNama = $row['nama'];
                                                                // Process $guruNama as needed
                                                            }

                                                            // Free the result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            // Handle query error
                                                            echo "Error: " . mysqli_error($connection);
                                                        }

                                                        // Close the database connection
                                                        ?> </td>
                        <td class="xl1521966">



                        </td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2>NIP.</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2>Mengetahui,</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 style='height:15.0pt' align=left valign=top><!--[if gte vml 1]><v:shape
   id="image3.png" o:spid="_x0000_s1027" type="#_x0000_t75" style='position:absolute;
   margin-left:3pt;margin-top:3.75pt;width:71.25pt;height:1in;z-index:3;
   visibility:visible' o:gfxdata="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
TTo2BzjpCBpN4MUIGhLemu2OLa7tbCub/novU4Lx8Zzb79x7Op11qmZ7tK4yWsBwEABDnZm80jsB
ry+PVxNgzkudy9poFPCJDmbp+dlUJrlp9Qr3a79jFKJdIgWU3jcJ5y4rUUk3MA1qmhXGKulJ2h3P
rWwpXNU8DIIRV7LStKGUDd6XmL2tP5SAjR8vn+8azLZ+2yw2o4d2825bIS4vuvktMI+dPz3+pRe5
gDEcqlANSOm+rp7rrDSWFSt01Rcd/+MX1ihmTUs6DIFlphZAtcl5KgqHXsD1eBTG/eToRJNhEAA/
xHpzhGldD1PIH/gm/scOoyiKe5ifjkqnJE4/mH4DAAD//wMAUEsDBBQABgAIAAAAIQCqJg6+vAAA
ACEBAAAdAAAAZHJzL19yZWxzL3BpY3R1cmV4bWwueG1sLnJlbHOEj0FqwzAQRfeF3EHMPpadRSjF
sjeh4G1IDjBIY1nEGglJLfXtI8gmgUCX8z//PaYf//wqfillF1hB17QgiHUwjq2C6+V7/wkiF2SD
a2BSsFGGcdh99GdasdRRXlzMolI4K1hKiV9SZr2Qx9yESFybOSSPpZ7Jyoj6hpbkoW2PMj0zYHhh
iskoSJPpQFy2WM3/s8M8O02noH88cXmjkM5XdwVislQUeDIOH2HXRLYgh16+PDbcAQAA//8DAFBL
AQItABQABgAIAAAAIQBamK3CDAEAABgCAAATAAAAAAAAAAAAAAAAAAAAAABbQ29udGVudF9UeXBl
c10ueG1sUEsBAi0AFAAGAAgAAAAhAAjDGKTUAAAAkwEAAAsAAAAAAAAAAAAAAAAAPQEAAF9yZWxz
Ly5yZWxzUEsBAi0AFAAGAAgAAAAhAL7CPve2AgAAYQYAABIAAAAAAAAAAAAAAAAAOgIAAGRycy9w
aWN0dXJleG1sLnhtbFBLAQItAAoAAAAAAAAAIQDQg+QOQkUAAEJFAAAUAAAAAAAAAAAAAAAAACAF
AABkcnMvbWVkaWEvaW1hZ2UxLnBuZ1BLAQItABQABgAIAAAAIQAXxT1VFwEAAIkBAAAPAAAAAAAA
AAAAAAAAAJRKAABkcnMvZG93bnJldi54bWxQSwECLQAUAAYACAAAACEAqiYOvrwAAAAhAQAAHQAA
AAAAAAAAAAAAAADYSwAAZHJzL19yZWxzL3BpY3R1cmV4bWwueG1sLnJlbHNQSwUGAAAAAAYABgCE
AQAAz0wAAAAA
">
   <v:imagedata src="simadu_template_raport_files/dimadu_template_raport_21966_image005.png"
    o:title=""/>
   <x:ClientData ObjectType="Pict">
    <x:SizeWithCells/>
    <x:CF>Bitmap</x:CF>
    <x:AutoPict/>
   </x:ClientData>
  </v:shape><![endif]-->
                            <![if !vml]>
                            <![endif]><span style='mso-ignore:vglayout2'>
                                <table cellpadding=0 cellspacing=0>
                                    <tr>
                                        <td height=20 class=xl1521966 width=64 style='height:15.0pt;width:48pt'></td>
                                    </tr>
                                </table>
                            </span>
                        </td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2>Kepala Madrasah</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966 colspan=2><?php
                                                        $query = "SELECT g.nama FROM guru g WHERE g.jabatan = 'Kepala Sekolah'";
                                                        $result = mysqli_query($connection, $query);

                                                        if ($result) {
                                                            // Fetch data from the result set, if needed
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo $guruNama = $row['nama'];
                                                                // Process $guruNama as needed
                                                            }

                                                            // Free the result set
                                                            mysqli_free_result($result);
                                                        } else {
                                                            // Handle query error
                                                            echo "Error: " . mysqli_error($connection);
                                                        }

                                                        // Close the database connection
                                                        ?></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <tr height=20 style='height:15.0pt'>
                        <td height=20 class=xl1521966 style='height:15.0pt'></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966>NIP.</td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                        <td class=xl1521966></td>
                    </tr>
                    <![if supportMisalignedColumns]>
                    <tr height=0 style='display:none'>
                        <td width=64 style='width:48pt'></td>
                        <td width=21 style='width:16pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=18 style='width:14pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                        <td width=64 style='width:48pt'></td>
                    </tr>
                    <![endif]>
                </table>

            </div>


            <!----------------------------->
            <!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
            <!----------------------------->
        </body>

        </html>

        <script>
            window.print();
        </script>
<?php
    } else {
        echo "Data rapor tidak ditemukan.";
    }
} else {
    echo '<p>Tidak ditemukan data rapor.</p>';
}

// Close the database connection
mysqli_close($connection);
?>
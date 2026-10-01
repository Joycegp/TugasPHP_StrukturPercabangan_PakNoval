<?php
    $nama = "Joyce";
    $kelas  = "XII PPLG" 1;
    $nilai_tugas = 90;
    $nilai_uts = 85;
    $nilai_uas = 88;
    $nilai_akhir = ($nilai_tugas*30/100) + ($nilai_tugas*30/100) + ($nilai_tugas*30/100)


if ($nilai_Akhir >= 90){
    $Grade = "Grade A";
} elseif ($nilai_Akhir >= 80){
    $Grade = "Grade B";
} elseif ($nilai_Akhir >= 75){
    $Grade = "Grade C";
} else {
    $Grade = "Grade D";
}

if ($nilai_Akhir >= 75){
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir Siswa</title>
</head>
<body>
    
<h2>Nilai Akhir Siswa</h2>

   <?php
    echo "Nama: " . $nama . "<br>";
    echo "Kelas: " . $kelas . "<br>";
    echo "Nilai Tugas: " . $nilai_tugas . "<br>";
    echo "Nilai UTS: " . $nilai_uts . "<br>";
    echo "Nilai UAS: " . $nilai_uas . "<br>";
    echo "Nilai Akhir: " . $nilai_akhir . "<br>";
    echo "Predikat: " . $predikat . "<br>";
    echo "Status: " . $status;
    ?>
</body>
</html>
<?php 

$total_nilai = 50;
$status;

if ($total_nilai > 60) {
    $status = "Lulus";
}  else{
    $status = "Tidak Lulus";
}

echo $status;

echo "<br>";

// Buat elseif
$grade;

if ($total_nilai > 85) {
    $grade = "A";
} 
if ($total_nilai > 70) {
    $grade = "B";
}
elseif ($total_nilai > 50) {
    $grade = "C";
}
elseif ($total_nilai > 30) {
    $grade = "D";
}
 else {
    $grade = "E";
}

echo $grade;

?>
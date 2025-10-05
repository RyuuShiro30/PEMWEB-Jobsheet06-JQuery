<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Array Terindeks</h2>
<?php
$Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

echo $Listdosen[2] . "<br>";
echo $Listdosen[0] . "<br>";
echo $Listdosen[1] . "<br>";

$Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
$jumlah_dosen = count($Listdosen); // Menghitung total elemen (3)

echo "<h3>Menggunakan Loop 'for':</h3>";

for ($i = 0; $i < $jumlah_dosen; $i++) {
    // Mencetak elemen array pada indeks $i
    echo $Listdosen[$i] . "<br>";
}
?>

</body>
</html>
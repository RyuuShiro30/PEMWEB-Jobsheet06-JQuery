<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid blueviolet;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: darkblue;
            color: white;
        }
    </style>
</head>
<body>

<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];
?>

<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $Dosen['nama']; ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?php echo $Dosen['domisili']; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>
</table>

</body>
</html>

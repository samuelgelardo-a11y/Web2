<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
    <style>
        body { font-family: Arial; }
        table { border-collapse: collapse; width: 300px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #ddd; }
    </style>
</head>
<body>

<h3>Hasil Warna Bola</h3>

<?php
$ball = "purple"; // coba ganti: red, yellow, blue, green, purple

$redbox = "-";
$yellowbox = "-";
$bluebox = "-";
$greenbox = "-";
$purplebox = "-";
$colorlessbox = "-";

if ($ball == "red") {
    $redbox = $ball;
} elseif ($ball == "yellow") {
    $yellowbox = $ball;
} elseif ($ball == "blue") {
    $bluebox = $ball;
} elseif ($ball == "green") {
    $greenbox = $ball;
} elseif ($ball == "purple") {
    $purplebox = $ball;
} else {
    $colorlessbox = $ball;
}
?>

<table>
<tr>
    <th>Box</th>
    <th>Isi</th>
</tr>
<tr>
    <td>Red Box</td>
    <td><?php echo $redbox; ?></td>
</tr>
<tr>
    <td>Yellow Box</td>
    <td><?php echo $yellowbox; ?></td>
</tr>
<tr>
    <td>Blue Box</td>
    <td><?php echo $bluebox; ?></td>
</tr>
<tr>
    <td>Green Box</td>
    <td><?php echo $greenbox; ?></td>
</tr>
<tr>
    <td>Purple Box</td>
    <td><?php echo $purplebox; ?></td>
</tr>
<tr>
    <td>Colorless Box</td>
    <td><?php echo $colorlessbox; ?></td>
</tr>
</table>

</body>
</html>

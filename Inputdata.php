<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Initialize variables
$matakuliah_PemrogramanWeb = 0;
$matakuliah_StrukturData = 0;
$matakuliah_BasisaData = 0;
$rata_rata = 0;
$status_kelulusan = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get input values
  $matakuliah1 = $_POST["matakuliah1"];
  $matakuliah2 = $_POST["matakuliah2"];
  $matakuliah3 = $_POST["matakuliah3"];

  // Calculate average score
  $rata_rata = ($matakuliah1 + $matakuliah2 + $matakuliah3) / 3;

  // Determine pass/fail status
  if ($rata_rata >= 60) {
    $status_kelulusan = "Lulus";
  } else {
    $status_kelulusan = "Tidak Lulus";
  }
}
?>

<!-- HTML and CSS -->
<style>
  table {
    border-collapse: collapse;
    width: 50%;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }
  th {
    background-color: rgb(57,185,158);
  }
</style>

<form method="post">
  <table>
    <tr>
      <th>Mata Kuliah PemrogramanWeb</th>
      <td><input type="number" name="matakuliah1" value="<?php echo $matakuliah1; ?>"></td>
    </tr>
    <tr>
      <th>Mata Kuliah StrukturData</th>
      <td><input type="number" name="matakuliah2" value="<?php echo $matakuliah2; ?>"></td>
    </tr>
    <tr>
      <th>Mata Kuliah BasisaData</th>
      <td><input type="number" name="matakuliah3" value="<?php echo $matakuliah3; ?>"></td>
    </tr>
    <tr>
      <th>Rata-Rata</th>
      <td><?php echo $rata_rata; ?></td>
    </tr>
    <tr>
      <th>Status Kelulusan</th>
      <td><?php echo $status_kelulusan; ?></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Submit"></td>
    </tr>
  </table>
</form> 
</body>
</html>
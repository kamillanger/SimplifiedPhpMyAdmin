<h1>PhpMyLanger®</h1>
<form method='POST' action='Start2.php'>
  <input type='submit' value='Powrót do Menu'>
</form>
<?php
session_start();
$kappa = $_SESSION['nazwa_bazy'];
$servername = "localhost";
$login = "root";
$pass = "";
$conn = new mysqli ($servername, $login, $pass, $_SESSION['nazwa_bazy']);
$usun_rekord_nazwa = $_POST['usun_rekord_nazwa'];
$_SESSION['usun_rekord_nazwa'] = $_POST['usun_rekord_nazwa'];
$sql = "SHOW COLUMNS FROM $usun_rekord_nazwa";
$result = $conn->query($sql);
echo "<table border='1'>";
echo "<tr>";
while ($row = $result->fetch_assoc()) {
    echo "<th>".$row['Field']."</th>";
}
echo "<th> Które usunąć? </th>";
echo "</tr>";
if ($result = $conn->query("SELECT * FROM $usun_rekord_nazwa")) {
    $field_cnt = $result->field_count;
    $result->close();
}

$sql2 = "SELECT * FROM $usun_rekord_nazwa";
$result = $conn -> query($sql2);


if ($result->num_rows > 0) {
  echo "<form method='POST' action='UsunRek3.php'>";
    while($row = $result->fetch_row()) {
          echo "<tr>";
          for ($x = 0; $x < $field_cnt;$x++) {
              echo "<td>".$row[$x]."</td>";
            }

            echo "<td><input type='radio' name='wiersz' value='$row[0]'></td>";
          echo "</tr>";
    }
  }
  echo "</table>";
  echo "<input type='submit' value='Potwierdź'>";
  echo "</form>";


?>

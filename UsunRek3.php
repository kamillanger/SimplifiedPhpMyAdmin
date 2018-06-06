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
$sql = "SHOW TABLES";
$usun_nazwa = $_SESSION['usun_rekord_nazwa'];
if ($result = $conn->query("SELECT * FROM $usun_nazwa")) {
    $liczba = $result->field_count;
    $result->close();
}

$kappa = $_POST['wiersz'];


$sql = "DELETE FROM $usun_nazwa WHERE id='$kappa'";
if ($result = $conn->query($sql)) {
  echo "Pomyślnie usunięto wiersz";
} else {
  echo "Wystąpił błąd podczas usuwania wiersza";
}
?>

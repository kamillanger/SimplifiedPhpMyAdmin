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

$nazwa_tabeli = $_SESSION['dodaj_rekord_nazwa'];
$liczba = $_SESSION['ilosc'];

$sql = "INSERT INTO $nazwa_tabeli VALUES ( '',";

  for ($x = 0 , $y = 1; $x < $liczba; $x++, $y++) {
  if ($x+1 == $liczba) {
  $nazwa = $_POST["wiersz$y"];
  $sql = $sql."'".$nazwa."') ";
  } else {
    $nazwa = $_POST["wiersz$y"];
    $sql = $sql."'".$nazwa."', ";
  }
  }
if ($result = $conn->query($sql)) {
  echo "Pomyślnie dodano rekord";
} else {
  echo "Wystąpił błąd podczas dodawania rekordu: ".$conn->error;
}

?>

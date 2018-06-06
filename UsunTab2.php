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
$usun_tabela_nazwa = $_POST['usun_tabela_nazwa'];

$sql = "DROP TABLE $usun_tabela_nazwa";
if ($result = $conn->query($sql)) {
  echo "Pomyślnie usunięto tabelę";
} else {
  echo "Wystąpił błąd podczas usuwania tabeli".$conn->error;
}
?>

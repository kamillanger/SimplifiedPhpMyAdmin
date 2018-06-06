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
$y = $_SESSION['ilosc_kolumn'];
$nazwa_tab = $_SESSION['nazwa_tabeli'];
$sql = "CREATE TABLE $nazwa_tab (ID int NOT NULL AUTO_INCREMENT,";
for ($x = 1; $x < $y ; $x++) {
    if ($x+1 != $y) {
      $kolumna = $_POST["kolumna$x"];
      $typ = $_POST["typ$x"];
      $sql = $sql . " ".$kolumna." ".$typ.", ";
    } else {
      $kolumna = $_POST["kolumna$x"];
      $typ = $_POST["typ$x"];
      $sql = $sql . " ".$kolumna." ".$typ.", primary key (id))";
    }

}
if ($conn->query($sql) === TRUE) {
    echo "Tabela została otworzona pomyślnie";
} else {
    echo "Błąd podczas tworzenia tabeli: " . $conn->error;
}
?>

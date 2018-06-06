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

echo "<form action='DodajTab2.php' method='POST'>";
echo "Nazwa Tabeli: <input type='text' name='nazwa_tabeli'><br>";
echo "Ilość Kolumn: <input type='number' name='ilosc_kolumn' style='width:40px'><br>";
echo "*Kolumna ID zostanie dodana automatycznie*<br>";
echo "<input type='submit' value='Zatwierdź'></form>";


?>

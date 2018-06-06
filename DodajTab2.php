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

$k = $_POST['ilosc_kolumn'];
$nazwa = $_POST['nazwa_tabeli'];
echo "<form action='DodajTab3.php' method='post'>";
echo "<table>";
echo "<tr><th>Nazwa Kolumny</th><th>Typ Danych</th></tr>";
for ($x = 1; $x <= $k ; $x++) {
    echo "<tr><td><input type='text' name='kolumna$x'></td><td>
    <select name='typ$x'>
    <option value='int'>INT</option>
    <option value='text'>TEXT</option>
    <option value='date'>DATE</option>
    </select></td></tr>";
}
echo "</table>";
$_SESSION['nazwa_tabeli'] = $nazwa;
$_SESSION['ilosc_kolumn'] = $x;
echo "<input type='submit' value='Zatwierdź'></form>";

?>

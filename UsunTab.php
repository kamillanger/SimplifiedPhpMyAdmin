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
echo "<form action='UsunTab2.php' method='POST'>";
echo "<select name='usun_tabela_nazwa'>";
if ($result = $conn->query($sql)) {

    while ($row = $result->fetch_row()) {
        echo "<option value='$row[0]'>".$row[0]."</option>";
    }

}
echo "</select>";
echo "<input type='submit' name='wyslij' value='Usuń'>";

?>

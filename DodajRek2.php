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
$_SESSION['dodaj_rekord_nazwa'] = $_POST['dodaj_rekord_nazwa'];
$nazwa_tabeli = $_POST['dodaj_rekord_nazwa'];

if ($result = $conn->query("SELECT * FROM $nazwa_tabeli")) {
    $liczba = $result->field_count;
    $result->close();
}


$sql = "SELECT COLUMN_NAME, DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$nazwa_tabeli'";

$result = $conn->query($sql);


$x = -1;
if ($result->num_rows > 0) {
  echo "<form method='POST' action='DodajRek3.php'>";
    while($row = $result->fetch_row()) {
      $x++;
            if ($row[0] == "ID") {

            } else {

              if ($row[1] == "int") {
                echo "<b>".$row[0].": </b><input type='number' name='wiersz$x'></input><br>";
              } else if ($row[1] == "text") {
              echo "<b>".$row[0].": </b><input type='text' name='wiersz$x'></input><br>";
            } else if ($row[1] == "date") {
              echo "<b>".$row[0].": </b><input type='date' name='wiersz$x'></input><br>";
            }

          }
    }
    $_SESSION['ilosc'] = $x;
    echo "<input type='submit' value='Dodaj'>";
    echo "</form>";
  }

?>

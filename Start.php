<h1>PhpMyLanger®</h1>
<?php
$servername = "localhost";
$login = "root";
$pass = "";
$conn = new mysqli ($servername, $login, $pass);

if ($conn -> connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
echo "<h1> Wybierz bazę którą chcesz zarządzać </h1>";
$sql = "SHOW DATABASES";
echo "<form action='start2.php' method='POST'>";
echo "<select name='baza'>";
if ($result = $conn->query($sql)) {

    while ($row = $result->fetch_row()) {
        echo "<option value='$row[0]'>".$row[0]."</option>";
    }

}
echo "</select>";
echo "<input type='submit' name='wyslij' value='wybierz'>";

?>

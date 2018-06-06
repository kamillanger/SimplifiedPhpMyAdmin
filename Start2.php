
<head>
  <style>
    #buton {
      font-size: 20px;
    }
    img {
      width: 300px;
      height: 220px;
    }
    div {
      text-align: center;
      float: left;
    }
    a {
      color: black;
    }
    a:visited {
      color: black;
    }
    #clear {
      clear: both;
    }
  </style>

</head>
<h1>PhpMyLanger®</h1>
<form method='POST' action='Start.php'>
  <input type='submit' value='Powrót do Menu Głównego' id='buton'>
</form><br>
<a href="PrzeszukajTab.php">
<div class='obraz'>
  <h2> Przeszukaj Tebele </h2>
  <img src="./images/PrzeszukajTab.png" alt="Przeszukaj Tabele">
</div>
</a>
<a href="DodajTab.php">
<div class='obraz'>
  <h2> Dodaj Tebele </h2>
  <img src="./images/DodajTab.png" alt="Dodaj Tabele">
</div>
</a>
<a href="UsunTab.php">
<div class='obraz'>
  <h2> Usun Tebele </h2>
  <img src="./images/UsunTab.png" alt="Usun Tabele">
</div>
</a>
<a href="DodajRek.php">
<div class='obraz'>
  <h2> Dodaj Rekord </h2>
  <img src="./images/DodajRek.png" alt="Dodaj Rekord">
</div>
</a>
<a href="UsunRek.php">
<div class='obraz'>
  <h2> Usun Rekord </h2>
  <img src="./images/UsunRek.png" alt="Usun Rekord">
</div>
</a>

<?php
session_start();
if (ISSET($_POST['wyslij'])) {

$_SESSION['nazwa_bazy']= $_POST['baza'];
}
$servername = "localhost";
$login = "root";
$pass = "";
$conn = new mysqli ($servername, $login, $pass, $_SESSION['nazwa_bazy']);

if ($conn -> connect_error) {
  die("Connection failed: ".$conn->connect_error);
}


?>

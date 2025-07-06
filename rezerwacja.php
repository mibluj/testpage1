<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $imie = htmlspecialchars($_POST['imie']);
  $email = htmlspecialchars($_POST['email']);
  $od = $_POST['od'];
  $do = $_POST['do'];
  $auto = $_POST['auto'];

  $wiadomosc = "Rezerwacja od: $imie ($email)\nAuto: $auto\nOd: $od\nDo: $do\n";
  file_put_contents("rezerwacje.txt", $wiadomosc, FILE_APPEND);

  echo "<p>Dziękujemy za rezerwację, $imie!</p>";
} else {
  echo "<p>Błąd formularza.</p>";
}
?>

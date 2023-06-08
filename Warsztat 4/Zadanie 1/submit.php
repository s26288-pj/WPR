<?php
session_start();

if (isset($_POST['save'])) {
    $_SESSION['people'] = $_POST['person'];
}

$cardNumber = $_SESSION['cardNumber'];
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$numberOfUsers = $_SESSION['numberOfUsers'];
$people = $_SESSION['people'];

echo "<h2>Podsumowanie</h2>";
echo "<p>Numer karty: $cardNumber</p>";
echo "<p>Imię i nazwisko zamawiającego: $firstName $lastName</p>";
echo "<p>Email zamawiającego: $email</p>";
echo "<p>Liczba osób: $numberOfUsers</p>";
echo "<h3>Lista osób:</h3>";
foreach ($people as $person) {
    echo "<p>Imię: " . $person['firstName'] . "</p>";
    echo "<p>Nazwisko: " . $person['lastName'] . "</p>";
    echo "<p>Email: " . $person['email'] . "</p>";
    echo "<hr>";
}
?>

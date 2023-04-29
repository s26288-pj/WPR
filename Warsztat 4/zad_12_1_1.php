<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Liczba miejsc: <input type="number" name="number_of_people" max=4 required> <br>
    Dane osoby do rezerwacji: <br>
    Imię: <input type="text" name="name" required> <br>
    Nazwisko: <input type="text" name="surname" required> <br>
    Adres: <input type="textarea" name="address" required> <br>
    Numer karty kredytowej: <input type="text" name="card" minlength=18 maxlength=18 required> <br>
    E-mail: <input type="email" name="email" required> <br>
    <input type="submit" value="Zarezerwuj">
</form>

<?php
if (isset($_POST['name'])) {
    setcookie('name', $_POST['name']);
    setcookie('surname', $_POST['surname']);
    setcookie('address', $_POST['address']);
    setcookie('card_number', $_POST['card']);
    setcookie('email', $_POST['email']);
    setcookie('number_of_people', $_POST['number_of_people']);
}
?>

</body>
</html>

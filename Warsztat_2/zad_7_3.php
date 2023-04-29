<!DOCTYPE html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Liczba miejsc: <input type="number" name="number_of_people" max=4 required> <br>
    Dane osoby do rezerwacji: <br>
    Imię: <input type="text" name="name" required> <br>
    Nazwisko: <input type="text" name="surname" required> <br>
    Adres: <input type="textarea" name="address" required> <br>
    Numer karty kredytowej: <input type="text" name="card" minlength=18 maxlength=18 required> <br>
    E-mail: <input type="email" name="email" required> <br>
    Data przyjazdu: <input type="date" name="start_date" required>
    Data odjazdu: <input type="date" name="end_date" required>
    Udogodnienia:
    <select name="luxuries[]" multiple="multiple">
        <option value="Baby crib">Łóżeczko dla dziecka</option>
        <option value="Ashtray">Popielniczka</option>
        <option value="Air conditioning">Klimatyzacja</option>
    </select>
    <input type="submit" value="Zarezerwuj">
</form>

<?php
if (isset($_POST['name'])) {
    echo "<br> Dane rezerwacyjne: <br>";
    echo "Liczba miejsc: ";
    echo $_POST['number_of_people'];
    echo "<br><br> Imię: <br>";
    echo $_POST['name'];
    echo "<br><br> Nazwisko: <br>";
    echo $_POST['surname'];
    echo "<br><br> Adres: <br>";
    echo $_POST['address'];
    echo "<br><br> E-mail: <br>";
    echo $_POST['email'];
    echo "<br><br> Data przyjazdu: <br>";
    echo $_POST['start_date'];
    echo "<br><br> Data wyjazdu: <br>";
    echo $_POST['end_date'];
    if(isset($_POST['luxuries'])) {
        echo "<br><br> Udogodnienia: <br>";
        foreach ($_POST['luxuries'] as $value) {
            echo $value;
            echo "<br>";
        }
    }
    
    if ($_POST['number_of_people'] > 1) {
        for ($i = 1; $i < $_POST['number_of_people']; $i++) {
            echo "<br><br><form action=";
            echo $_SERVER['PHP_SELF'];
            echo " method='POST'>
                   Dane osoby z rezerwacji: <br>
                   Imię: <input type='text' name='name' required> <br>
                   Nazwisko: <input type='text' name='surname' required> <br>"
        }
        echo "<input type='submit' value='Zarezerwuj'>";
    }
}
?>

</body>
</html>

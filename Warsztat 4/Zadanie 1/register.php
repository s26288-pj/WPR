<?php
session_start();

if (isset($_POST['submit'])) {
    $cardNumber = $_POST['cardNumber'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $numberOfUsers = $_POST['numberOfUsers'];

    $_SESSION['cardNumber'] = $cardNumber;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email'] = $email;
    $_SESSION['numberOfUsers'] = $numberOfUsers;

    echo "<h2>Dane podanych osób:</h2>";
    echo "<form method='post' action='submit.php'>";
    for ($i = 1; $i <= $numberOfUsers; $i++) {
        echo "<h3>Osoba $i</h3>";
        echo "<label>Imię:</label>";
        echo "<input type='text' name='person[$i][firstName]'><br><br>";
        echo "<label>Nazwisko:</label>";
        echo "<input type='text' name='person[$i][lastName]'><br><br>";
        echo "<label>Email:</label>";
        echo "<input type='text' name='person[$i][email]'><br><br>";
    }
    echo "<input type='submit' name='save' value='Save'>";
    echo "<input type='submit' name='submit' value='Next'>";
    echo "</form>";
}

else {
   exit();
}
?>

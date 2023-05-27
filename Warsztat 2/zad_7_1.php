<!DOCTYPE html>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="number" name="num_1">
    <input type="number" name="num_2">
    <select name="operation">
        <option value="sum" selected>Dodawanie</option>
        <option value="subtraction">Odejmowanie</option>
        <option value="multiply">Mnożenie</option>
        <option value="division">Dzielenie</option>
    </select>
    <input type="submit" value="Oblicz">
</form>

<?php
if (isset($_POST['num_1']) && isset($_POST['num_2'])) {
    $result = 0;
    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];

    switch ($_POST['operation']):
        case "sum":
            $result = $num_1 + $num_2;
            break;
        case "subtraction":
            $result = $num_1 - $num_2;
            break;
        case "multiply":
            $result = $num_1 * $num_2;
            break;
        case "division":
            $result = $num_1 / $num_2;
            break;
    endswitch;
    echo "Wynik działania to ";
    echo $result;
}
?>

</body>
</html>

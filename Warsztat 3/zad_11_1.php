<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $file = $_POST['file'];
    $fileOpen = fopen($file, "r");
    $array = array();
    $i = 0;

    while(!feof($fileOpen)){
        $line = fgets($fileOpen);
        $array[$i] = $line;
        $i++;
    }

    fclose($fileOpen);
    $fileWrite = fopen($file, "w");
    for($j = count($array) - 1; $j >= 0; $j--){
        fwrite($fileWrite, $array[$j]);
    }
    fclose($fileWrite);


}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label>Załącz plik</label>
    <input type="file" name="file" id="file" />
    <input type="submit" value="Wyślij" />
</form>

</body>
</html>
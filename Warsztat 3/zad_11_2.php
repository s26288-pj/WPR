<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$filename = "counter.txt";
if (file_exists($filename)) {
    $handle = fopen($filename, "r");
    $count = fread($handle, filesize($filename));
    fclose($handle);
    $count++;
    $handle = fopen($filename, "w");
    fwrite($handle, $count);
    fclose($handle);
} else {
    $count = 1;
    $handle = fopen($filename, "w");
    fwrite($handle, $count);
    fclose($handle);
}
echo "Liczba odwiedzin: $count";
?>

</body>
</html>

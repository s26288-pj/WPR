<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$isCorrectIp = false;
$file = fopen("ip.txt", 'r');
while(!feof($file)) {
    $line = fgets($file);
    if (strpos($line, $_SERVER['REMOTE_ADDR']) !== false) {
        $isCorrectIp = true;
    }
}
if($isCorrectIp){
    include 'admin.php';
}else{
    include 'user.php';
}
?>

</body>
</html>
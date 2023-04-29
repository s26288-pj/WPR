<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
$file = fopen("links.txt", "r");

echo "<p>Lista linków</p>";
echo "<ul>";
while(!feof($file)){
    $line = fgets($file);
    $parts = explode(';', $line);
    echo '<li><a href="'. $parts[0] .'" target="_blank">' . $parts[1] .  '</a></li>';
}
echo '</ul>';

?>

</body>
</html>
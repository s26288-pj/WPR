<!DOCTYPE html>
<html>
<body>

<?php
$num_of_numbers = 4;
$table = [];

for($i=0; $i<$num_of_numbers; $i++) {
    for($j=0; $j<$num_of_numbers; $j++) {
        $table[$i][$j] = ($i+1)*($j+1);
    }
}

for($i=0; $i<$num_of_numbers; $i++) {
    for($j=0; $j<$num_of_numbers; $j++) {
        echo($table[$i][$j]);
        echo(" | ");
    }
    echo("<br>");
}
?>

</body>
</html>

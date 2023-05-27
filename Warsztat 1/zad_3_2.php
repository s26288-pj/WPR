<!DOCTYPE html>
<html>
<body>

<?php
$num_of_rolls = 4;
$table_of_rolls = [];

for($i=0; $i<$num_of_rolls; $i++) {
    $table_of_rolls[] = $roll=rand(1, 6);
}

for($i=0; $i<$num_of_rolls; $i++) {
    echo($table_of_rolls[$i]);
    echo(", ");
}
?>

</body>
</html>
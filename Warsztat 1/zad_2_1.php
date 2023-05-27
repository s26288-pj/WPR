<!DOCTYPE html>
<html>
<body>

<?php
    function get_random_integer($id) {
        $table = array(rand(), rand(), rand(), rand(), rand());
        echo($table[$id]);
    }

    get_random_integer(4);
?>

</body>
</html>

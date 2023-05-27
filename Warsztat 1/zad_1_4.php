<!DOCTYPE html>
<html>
<body>

<?php
    $pesel = "99091425567";

    function print_date($pesel) {
        $rr=substr($pesel, 0,2);
        $mm=substr($pesel, 2,2);
        $dd=substr($pesel, 4,2);
        echo($dd);
        echo("-");
        echo($mm);
        echo("-");
        echo($rr);
    }

    print_date($pesel);
?>

</body>
</html>

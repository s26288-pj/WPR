<!DOCTYPE html>
<html>
<body>

<?php
    function get_max_int($table) {
        $max1 = 0;
        $max2 = 0;
        $max3 = 0;
        $max4 = 0;

        for ($i=0; $i<count($table)-1; $i++) {
            if($table[$i] > $max1) $max1 = $table[$i];
        }

        $j=0;
        while($j<count($table)-1) {
            if($table[$j] > $max2) $max2 = $table[$j];
            $j++;
        }

        $k=0;
        do  {
            if($table[$k] > $max3) $max3 = $table[$k];
            $k++;
        }
        while($k<count($table)-1);

        foreach ($table as $item) {
            if($item > $max4) $max4 = $item;
        }

        echo($max1);
        echo("\n");
        echo($max2);
        echo("\n");
        echo($max3);
        echo("\n");
        echo($max4);
    }

    $tab = array(1,2,3,4,5,10,6,7);
    get_max_int($tab);
?>

</body>
</html>

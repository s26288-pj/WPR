<!DOCTYPE html>
<html>
<body>

<?php
    $figure="trapeze";

    switch($figure) {
        case "triangle":
            get_triangle_area();
            break;
        case "rectangle":
            get_rectangle_area();
            break;
        case "trapeze":
            get_trapeze_area();
            break;
    }

    function get_triangle_area() {
        $base=5;
        $height=3;
        $area = ($base * $height)/2;
        echo($area);
    }

    function get_rectangle_area() {
        $width=5;
        $height=3;
        $area = $width * $height;
        echo($area);
    }

    function get_trapeze_area() {
        $base=5;
        $base_2=10;
        $height=3;
        $area = (($base+$base_2)*$height)/2;
        echo($area);
    }
?>

</body>
</html>

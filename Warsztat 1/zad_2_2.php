<!DOCTYPE html>
<html>
<body>

<?php
    function jakiej_jestem_narodowosci($country) {
        $countries = array(
            "Polska" => "Polak/Polka",
            "Francja" => "Francuz/Francuzka",
            "Niemcy" => "Niemiec/Niemka"
        );

        $narodowosc=$countries[$country];
        echo($narodowosc);
    }

    jakiej_jestem_narodowosci("Polska");
?>

</body>
</html>

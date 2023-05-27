<!DOCTYPE html>
<html>
<body>

<?php
    $words = array("banan", "owoc", "gruszka");
    $sentence = "banan jest owocem, ale nie gruszka";

    foreach ($words as $word)
    {
        $sentence = str_replace($word, "***", $sentence);
    }

    echo($sentence);
?>

</body>
</html>

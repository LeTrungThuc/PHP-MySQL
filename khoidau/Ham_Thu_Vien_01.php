<?php
    $a = "32";
    $b=(integer)$a;
    var_dump($a);
    settype($a,"integer");
    var_dump($b);
?>
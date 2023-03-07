<?php
// Phương trình ax+b = 0
$a = 1;
$b = 2;
if ($a == 0) {
    if ($b == 0) {
        echo "Phương trình vô số nghiệm";
    } else {
        echo "Phương trình vô nghiệm";
    }
} else {
    echo "phương trình có nghiệm x = -$b/$a";
}

?>
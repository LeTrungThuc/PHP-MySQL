<?php
echo time() . "<br/>";
echo date("d/m/Y", date("d") + 10 * 24 * 3600) . "<br/>";
$ttg = strtotime("2016-11-20 00:00:00");
echo date("d/m/Y", $ttg + 12 * 24 * 3600) . "<br/>";
$ttg2 = mktime(0, 0, 0, 11, 20 + 12, 2016);
echo date("d/m/Y", $ttg2) . "<br/>";
echo date("d/m/Y", mktime(0, 0, 0, date("m") + 1, date("d"), date("Y"))) . "<br/>";
echo date("d/m/Y", mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"))) . "<br/>";
echo date("d/m/Y", mktime(0, 0, 0, date("m"), date("d"), date("Y") + 1)) . "<br/>";
?>
<?php
class XE
{
    public $soxe;
    public $nhasx;
    function In_Thong_tin()
    {
        echo $this->soxe . " - " . $this->nhasx;
    }
}
$x1 = new XE();
$x1->soxe = "99999";
$x1->nhasx = "Yamaha";
$x1->In_Thong_tin();
?>
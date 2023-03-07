<?php
class XE
{
    public $soxe;
    public $nhasx;
    function __construct($so = "12222", $nha = "Honda")
    {
        $this->soxe = $so;
        $this->nhasx = $nha;
    }
    function In_Thong_tin()
    {
        echo $this->soxe . " - " . $this->nhasx;
    }
}
$x1 = new XE();
// $x1->soxe = "99999";
// $x1->nhasx = "Yamaha";
$x1->In_Thong_tin();
$x2 = new XE("45545", "Yamha");
$x2->In_Thong_tin();
?>
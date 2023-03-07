<?php
class XE
{
    private $soxe;
    private $nhasx;
    function getsoxe()
    {
        return $this->soxe;
    }
    function xetsoxe($s)
    {
        $this->soxe = $s;
    }
    function getnhasx()
    {
        return $this->nhasx;
    }
    function xetnhasx($n)
    {
        $this->nhasx = $n;
    }
    function __construct($so = "000000", $nha = "Không biết")
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
$x1->xetsoxe("55555");
$x1->xetnhasx("OTO");

$x1->In_Thong_tin();
?>
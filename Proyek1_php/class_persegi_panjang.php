<?php
class persegi_panjang {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar){
        $this -> panjang = $panjang;
        $this -> lebar = $lebar;
    }

    function hitung_luas(){
        return $this-> panjang * $this -> lebar;
    }

    function hitung_keliling(){
        return 2 * ($this -> panjang + $this -> lebar);
    }

}
?>
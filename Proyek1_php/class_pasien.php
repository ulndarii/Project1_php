<?php

class pasien {
    public $identity;
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;


    public function __construct($kode,$nama,$gender){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
    }      
}

?>
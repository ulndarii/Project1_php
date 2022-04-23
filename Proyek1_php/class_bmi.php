<?php
error_reporting(0);
    require_once 'class_bmipasien.php';
    require_once "class_pasien.php";

    class BMI extends BMIPasien{
        public $berat;
        public $tinggi;
    
        public function __construct($berat,$tinggi){
            $this->beratbadan = $berat;
            $this->tinggibadan = $tinggi;

        }

        function getNilaibmi(){
            return $this->bmi = $this->beratbadan / ($this->tinggibadan * $this->tinggibadan);

        }

        function getStatusbmi(){
            if ($this->bmi >=30){
                return 'Kegemukan (obesistas';
            }elseif ($this->bmi >=25){
                return 'Kelebihan Berat Badan';
            }elseif ($this->bmi >=18.5){
                return 'Normal (Ideal)';
            }elseif ($this->bmi <18.5){
                return 'Kekurangan Berat Badan';
            }
        }
    }

?>
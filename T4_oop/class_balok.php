<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 
        include "data_balok.php";

         class BaloK {
            private $panjang;
            private $lebar;
            private $tinggi;
          
            public function __construct($panjang, $lebar, $tinggi) {
              $this->panjang = $panjang;
              $this->lebar = $lebar;
              $this->tinggi = $tinggi;
            }
          
            public function getLuas() {
              return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
            }
          
            public function getKeliling() {
              return 4 * ($this->panjang + $this->lebar + $this->tinggi);
            }
          
            public function getVolume() {
              return $this->panjang * $this->lebar * $this->tinggi;
            }
        } 
?>
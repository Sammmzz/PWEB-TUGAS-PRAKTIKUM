<?php

class Hewan {
    private $nama;
    private $umur;

    //setter 
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    // get nama
    public function getNama(){
        return $this->nama;
    }

    public function getUmur(){
        return $this->umur;
    }
}
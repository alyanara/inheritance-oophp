<?php
class Product{ 
    public $Barang, 
            $Merk,
              $Harga,
               $Display,
                $Kapasitas;

    public function getCetak(){ 
        return "$this->Merk, (Rp. $this->Harga)"; 
    }
    public function __construct($Barang="jenis barang", $Merk="merk barang", $Harga=0, $Display="display", $Kapasitas="kapasitas"){
    	$this->Barang = $Barang;
    	$this->Merk = $Merk;
    	$this->Harga = $Harga;
        $this->Display = $Display;
        $this->Kapasitas = $Kapasitas;
    }
    public function cetakInfo(){
        $str="{$this->Barang}, {$this->getCetak()}";
        return $str;
    }
} 

class Laptop extends Product{
    public function cetakInfo(){
        $str="Laptop : {$this->Barang}, {$this->getCetak()} | Display : {$this->Display}";
        return $str; 
    }
}
class Flashdisk extends Product{
     public function cetakInfo(){
        $str="Flashdisk : {$this->Barang}, {$this->getCetak()} | Kapasitas : {$this->Kapasitas}";
        return $str; 
    }
}

$Product1 = new Laptop("Laptop"," ASUS", 6000000, "14 Inch", "-"); 
$Product2 = new Flashdisk("Flashdisk","Sandisk", 300000,"-", "16 GB");

echo $Product1->cetakInfo(); 
echo "<br>"; 
echo $Product2->cetakInfo(); 
echo "<br>"; 
?> 

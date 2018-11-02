<?php
require_once "marlin.class.php";

if(isset($_POST['perulangan'])){
    $jumlah = $_POST['valPerulangan'];

    if(is_numeric($jumlah)){
        if($jumlah != ""){
            $marlin = new Marlin();
            $marlin->hitung($jumlah);
        }
    }
    else{
        echo "Harus sebuah bilangan";
    }
}

?>
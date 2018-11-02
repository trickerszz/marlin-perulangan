<?php
class Marlin{

    function hitung($data){
        $countMB = 0;
        for($i=1;$i<=$data;$i++){
            if($i % 3 == 0 && $i % 5 == 0) {
                echo 'Marlin Booking <br>';
                $countMB++;
            }

            if($countMB == 5) break;

            if($i % 3 == 0){
                if($countMB >= 2){
                    echo 'Booking <br>';
                }
                else{
                    echo 'Marlin <br>';
                }
            }

            if($i % 5 == 0){
                if($countMB >= 2){
                    echo 'Marlin <br>';
                }
                else{
                    echo 'Booking <br>';
                }
            }
        }

    }
}
?>
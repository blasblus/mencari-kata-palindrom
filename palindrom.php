<?php 
    $kalimat = "Kakak menemukan katak ini di kali";
    function palindrom ($kalimat) {
        $kata = explode("",$kalimat);   
        $hitung = 0;
        $k_palindrom = '';
        for ($i=0; $i < count($kata); $i++) { 
        	if ($kata[$i] == strrev($kata[$i])) {
        		$k_palindrom .= $kata[$i];
        		$hitung++;
        	}
        }
        return 'Kata palindrom berjumlah '.$hitung.' dan kata - kata palindrom tesebut adalah '.$k_palindrom;  
    }    
    echo palindrom ($kalimat);
?>

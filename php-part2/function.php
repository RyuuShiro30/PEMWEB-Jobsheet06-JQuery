<?php
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam;
    echo "Perkenalkan, nama saya ".$nama."<br/>"; 
    echo "Senang berkenalan dengan anda<br/>";
}

//memanggil fugsi yang sudah dibuat
perkenalan("Annora","Hallo");

echo "<hr>";

$saya = "Ega";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);

?>
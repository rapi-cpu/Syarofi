<?php
$harga=18000;

if($harga >= 35000){
    $hasil="sampoerna";
} else if ($harga >= 25000){
    $hasil="surya";
}
else if ($harga >= 18000){
    $hasil="sukun";
}
else if ($harga < 18000){
    $hasil="prima";
}

echo "harga rokok :$harga <br>";
echo "pilihan :$hasil";

?>
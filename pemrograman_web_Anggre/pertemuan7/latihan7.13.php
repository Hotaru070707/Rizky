<?php
//pembuatan fungsi
function perkalian ($angka1,$angka2)
{
$a= $angka1;
$b= $angka2;
$hasil=$a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil =perkalian(4,5);
echo "perkalian 4 x 5 adalah $hasil";
echo "<br/>";
echo "perkalian 7 x 2 adalah ".perkalian(7,2);
?>

<?php
//pemanggilan fungsi
echo "Luas Lingkaran dengan jari jari 7cm=".luas_lingkaran(7)."cm";
//pembuatan fungsi
function luas_lingkaran($jari2)
{
return M_PI*$jari2*$jari2;
}
?>


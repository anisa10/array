<?php

$nama = array(
             ['Nama   => Ujang','Kelas  => RPL','Alamat => Bandung'],
	         ['Nama   => Mahmud','Kelas  => TSM','Alamat => Jakarta'], 
	         ['Nama   => Ucok','Kelas  => TKR','Alamat => Papua']
	          );
echo "<pre>";
print_r($nama);
echo "</pre>";

$mode = end($nama[1]);
echo $mode."<br>";
$mode = prev($nama[0]);
echo $mode."<br>";
$mode = key($nama[1]);
echo $mode."<br>";
$mode = reset($nama[1]);
echo $mode."<br>";
$mode = next($nama[1]);
echo $mode."<br>";

?>
<?php
$aso = [
   [ 
    'Judul' => '<h1>Belajar PHP & MySQL untuk Pemula',
    'Penulis' => '<h3>Admin SMK',
   ],
   [
    'Judul' => '<h1>Tutorial PHP dari Nol hingga Mahir',
    'Penulis' => '<h3>Admin SMK',
   ],
   [
    'Judul' => '<h1>Membuat Aplikasi Web dengan PHP',
    'Penulis' => '<h3>SMK Assalaam',
   ],
];
foreach ($aso as $value) {
	echo "Judul " . $value ["Judul"] . "<br>";
	echo "Penulis " . $value ["Penulis"] . "<br>";
}
?>
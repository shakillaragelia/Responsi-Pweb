<?php
echo "<head><title>Data Transaksi</head></title>";
$fp =fopen("transaksi.txt","a+");
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$email  = $_POST ['email'];
$paket = $_POST ['paket'];
$catatan = $_POST ['catatan'];
fputs($fp, "$nama|$alamat|$email|$paket|$catatan\n");
fclose($fp);

echo "Terima Kasih telah menggunakan jasa Ragel Laundry^^<br>";
echo "<a href=responsi.html> Isi Data dan Catatan </a><br>";
echo "<a href=formdata.php> Lihat Daftar </a><br>";
?>
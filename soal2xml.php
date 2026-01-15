<?php
$xml = simplexml_load_file("data_buku.xml");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>

<h2>Daftar Buku</h2>

<ul>
<?php foreach ($xml->Buku as $buku) { ?>
    <li>
        <strong><?= $buku->Judul ?></strong><br>
        Penulis: <?= $buku->Penulis ?><br>
        Tahun: <?= $buku->Tahun ?>
    </li><br>
<?php } ?>
</ul>

</body>
</html>
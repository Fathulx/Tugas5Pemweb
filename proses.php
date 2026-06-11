<?php
    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    if ($nama) {
        echo "<strong>Nama:</strong> " . $nama . " <br>";
    }

    if ($alamat) {
        echo "<strong>Alamat:</strong> " . $alamat . " <br>";
    }
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h3>Data Buku Berhasil Diperbarui (Simulasi)</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<a href='../../pages/books/index.php'>Kembali ke Daftar Buku</a>";
}
?>
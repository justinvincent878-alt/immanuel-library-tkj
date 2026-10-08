<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "<p>Buku dengan ID <strong>{$id}</strong> berhasil dihapus</p>";
}
?>
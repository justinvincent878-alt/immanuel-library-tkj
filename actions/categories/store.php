<?php
$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';

echo "<h3>Data Kategori Berhasil Ditambah (Simulasi)</h3>";
echo "<p>Nama Kategori: " . htmlspecialchars($name) . "</p>";
echo "<p>Deskripsi: " . htmlspecialchars($description) . "</p>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<a href='../../pages/categories/index.php'>Kembali ke Daftar Kategori</a>";
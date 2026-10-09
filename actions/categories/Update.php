
<?php
$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';

echo "<h3>Data Kategori Berhasil Diubah (Simulasi)</h3>";
echo "<p>Nama Kategori: $name</p>";
echo "<p>Deskripsi: $description</p>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<a href='../../pages/categories/index.php'>Kembali ke Daftar Kategori</a>";

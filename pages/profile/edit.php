<?php
$pageTitle = "Profil Saya";
$pageSubtitle = "Kelola informasi profil Anda";

require_once __DIR__ . "/../../repositories/user-repository.php";
$user = getUser();
$profile = getProfile();

require_once __DIR__ . "/../../components/admin/topbar.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/profile/edit.css">
</head>

<body>
  <?php
  $user = [
    "id" => 1,
    "name" => "Budi Santoso",
    "email" => "budi.santoso@siswa.ski.sch.id",
    "role" => "member",
  ];

  $profile = [
    "user_id" => 1,
    "phone" => "0812-3456-7890",
    "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat",
    "bio" => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri.",
  ];
  ?>
  <div class="app-shell">
    <?php require_once __DIR__ . "/../../components/admin/sidebar.php" ?>

    <main class="app-main">
      <?php
      $pageTitle = "Profil saya";
      $pageSubtitle = "Kelola data akun dan profil Anda";

      require_once __DIR__ . "/../../components/admin/topbar.php";
      ?>


      <div class="app-content">
        <form method="POST" action="../../actions/profile/update.php">
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name']) ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>">
            </div>

            <div class="form-section-title">Informasi Tambahan</div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($profile['phone']) ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <textarea id="address" name="address" rows="2"><?= htmlspecialchars($profile['address']) ?></textarea>
            </div>
            <div class="form-group">
              <label for="bio">Biografi Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= htmlspecialchars($profile['bio']) ?></textarea>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
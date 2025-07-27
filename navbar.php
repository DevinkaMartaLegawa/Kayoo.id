<?php
$menu = [
  "Beranda" => "index.php",
  "Tentang" => "about.php",
  "Produk" => "produk.php",
  "Testimoni" => "testimoni.php",
  "Pesan" => "pesan.php",
  "Kontak" => "kontak.php"
];
?>
 <link
      href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Naskh+Arabic&family=Poppins&display=swap"
      rel="stylesheet"
    />
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Kayoo.id</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php foreach ($menu as $label => $link): ?>
          <?php $active = basename($_SERVER['PHP_SELF']) === basename($link) ? 'active' : 'text-success'; ?>
          <li class="nav-item">
            <a class="nav-link <?= $active ?>" href="<?= $link ?>"><?= $label ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

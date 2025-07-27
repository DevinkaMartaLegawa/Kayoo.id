<?php
// about.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang - Kayoo.id</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Naskh+Arabic&family=Poppins&display=swap" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/style.css" />
</head>
<body>

  <!-- Navbar -->
     <?php include 'navbar.php'; ?>

  <!-- Tentang Kami Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold section-title">Tentang Kami</h2>
        <p class="lead text-muted section-subtitle">
              Kayoo adalah sebuah brand yang menjual produk berbahan baku kayu &
              melayani berbagai pesanan custom kayu, seperti decoration, craft,
              souvenir, furniture.        </p>
      </div>

      <!-- Gambar & Deskripsi -->
      <div class="row align-items-center g-4">
        <div class="col-md-6 text-center">
            <img
              src="assets/logo.png"
              class="img-fluid rounded-4"
              alt="Logo Kayoo.id"
              style="max-width: 450px; height: auto; object-fit: contain;"
            />
          </div>
        <div class="col-md-6 about-desc">
          <h3>Misi & Filosofi</h3>
          <p>
            Menghadirkan produk berkualitas dari bahan kayu alami melalui kreativitas dan keahlian, serta layanan custom yang personal dan estetis.
          </p>
          <p>
            Kayoo percaya kayu bukan sekadar material, tapi memiliki jiwa dan cerita. Kami menciptakan produk bermakna yang menyatu dengan kehidupan.
          </p>
        </div>
      </div>

      <!-- Kenapa Memilih Kami -->
      <div class="text-center mt-5 mb-4">
        <h4 class="fw-semibold">Kenapa Memilih Kami?</h4>
      </div>
      <div class="row g-4">
        <?php
        $fitur = [
          ["Buatan Tangan", "Kaligrafi asli, bukan cetakan massal."],
          ["Bahan Berkualitas", "Kayu, cat, dan bingkai premium."],
          ["Desain Custom", "Sesuai permintaan dan ayat pilihan."],
          ["Harga Terjangkau", "Untuk semua kalangan, tetap berkualitas."]
        ];
        foreach ($fitur as [$judul, $deskripsi]) {
          echo "
          <div class='col-md-3 d-flex'>
            <div class='card h-100 w-100 border-0 shadow-sm about-card'>
              <div class='card-body text-center'>
                <h5>$judul</h5>
                <p class='card-text'>$deskripsi</p>
              </div>
            </div>
          </div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

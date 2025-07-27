<?php
  $cards = [
    ["link" => "about.php", "judul" => "Tentang Kami", "isi" => "Kenali visi misi dan sejarah perjalanan kami dalam menghadirkan seni Islami ke rumah Anda."],
    ["link" => "produk.php", "judul" => "Produk", "isi" => "Lihat berbagai pilihan kaligrafi mulai dari ayat pendek hingga full surat khusus untuk dekorasi rumah."],
    ["link" => "testimoni.php", "judul" => "Testimoni", "isi" => "Lihat apa kata pelanggan kami yang telah menerima karya indah dan berkualitas dari kami."],
    ["link" => "pesan.php", "judul" => "Pesan Kustom", "isi" => "Ingin kaligrafi sesuai ayat favorit atau ukuran khusus? Kami siap bantu buatkan sesuai keinginan Anda."],
    ["link" => "kontak.php", "judul" => "Kontak", "isi" => "Hubungi kami langsung untuk pertanyaan, konsultasi, atau kolaborasi."]
  ];
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kayoo.id</title>

    <!-- Bootstrap & Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Naskh+Arabic&family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Hero -->
    <section class="hero d-flex align-items-center" style="min-height: 90vh">
      <div class="container text-center">
        <img src="assets/logo2.png" alt="Kayoo.id Logo" style="width: 120px; border-radius: 50%" class="mb-3" />
        <h1 class="display-3 fw-bold mb-4 text-black" style="font-family: 'Amiri', serif">Kayoo.id</h1>
        <p class="lead mb-5">
          Kayoo adalah sebuah brand yang menjual & melayani pesanan produk berbahan baku kayu seperti dekorasi, kerajinan, souvenir, hingga furniture.
        </p>
        <a href="produk.html" class="btn btn-gold px-4 py-2 fs-5">Lihat Koleksi</a>
      </div>
    </section>

  <!-- Ringkasan Halaman -->
    <section class="bg-light py-5">
      <div class="container">
        <div class="row g-4">
          <?php foreach ($cards as $card): ?>
            <div class="col-md-6 col-lg-4 d-flex">
              <a href="<?= $card['link'] ?>" class="text-decoration-none text-dark w-100">
                <div class="card h-100 border-0 shadow-lg rounded-4">
                  <div class="card-body text-center p-4">
                    <h4 class="mb-3"><?= $card['judul'] ?></h4>
                    <p class="card-text"><?= $card['isi'] ?></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kayoo.id</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Naskh+Arabic&family=Poppins&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Custom Style -->
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Hero + Kontak -->
  <section class="hero-contact-section py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="lead">Kami siap membantu Anda. Silakan hubungi kami melalui informasi di bawah ini.</p>
      </div>

      <div class="row g-4">
        <!-- Info Kontak -->
        <div class="col-md-6">
          <div class="card shadow h-100">
            <div class="card-body">
              <h3 class="mb-4">Informasi Kontak</h3>

              <div class="d-flex mb-4">
                <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                  <h5 class="mb-1">Alamat</h5>
                  <p class="mb-0">Jl. Gajah Mada No.35, Medaeng Kulon, Kedungturi, Sidoarjo, Jawa Timur 61257</p>
                </div>
              </div>

              <div class="d-flex mb-4">
                <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                <div>
                  <h5 class="mb-1">Telepon</h5>
                  <p class="mb-0">+62 812 3456 7890</p>
                </div>
              </div>

              <div class="d-flex mb-4">
                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                <div>
                  <h5 class="mb-1">Email</h5>
                  <p class="mb-0">info@kayoo.id</p>
                </div>
              </div>

              <div class="d-flex mb-4">
                <div class="contact-icon"><i class="fas fa-clock"></i></div>
                <div>
                  <h5 class="mb-1">Jam Operasional</h5>
                  <p class="mb-0">Senin - Jumat: 08.00 - 17.00 WIB<br>Sabtu: 09.00 - 15.00 WIB</p>
                </div>
              </div>

              <div class="mt-4">
                <h5 class="mb-3">Ikuti Kami</h5>
                <div class="d-flex social-icons gap-3">
                  <a href="https://www.facebook.com/kayoo.99" class="btn rounded-circle"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/kayoo.id/" class="btn rounded-circle"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.tiktok.com/@kayoo_id" class="btn rounded-circle"><i class="fab fa-tiktok"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Pesan -->
        <div class="col-md-6">
          <div class="card shadow h-100">
            <div class="card-body">
              <h3 class="mb-4">Kirim Pesan</h3>
              <form>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan email" required />
                </div>

                <div class="mb-3">
                  <label for="subjek" class="form-label">Subjek</label>
                  <input type="text" class="form-control" id="subjek" placeholder="Subjek pesan" required />
                </div>

                <div class="mb-4">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="5" placeholder="Tulis pesan Anda di sini" required></textarea>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-gold px-4 py-2">Kirim Pesan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Map -->
      <div class="mt-5">
        <h3 class="mb-4">Lokasi Kami</h3>
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.676716264019!2d112.7012077758844!3d-7.35995089263296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e3e98f7d2b6b%3A0x62f87de167bd6e3d!2sKayoo!5e0!3m2!1sid!2sid!4v1713514127273!5m2!1sid!2sid"
            width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

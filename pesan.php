<?php
$page = "Pesan";
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kayoo.id - <?= $page ?></title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Naskh+Arabic&family=Poppins&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>

    <?php include 'navbar.php'; ?>

<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="fw-bold">Pesan Produk Kami</h1>
      <p class="lead">Isi formulir di bawah ini untuk memesan produk Kayoo.id</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-body p-4">
            <h3 class="card-title text-center mb-4">Form Pemesanan</h3>
            <form>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" required />
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" required />
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="telepon" class="form-label">Nomor Telepon</label>
                  <input type="tel" class="form-control" id="telepon" required />
                </div>
                <div class="col-md-6">
                  <label for="produk" class="form-label">Pilih Produk</label>
                  <select class="form-select" id="produk" required>
                    <option value="" selected disabled>Pilih produk</option>
                    <option value="kaligrafi">Kaligrafi</option>
                    <option value="dekorasi">Dekorasi</option>
                    <option value="sign">Sign</option>
                    <option value="lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pengiriman</label>
                <textarea class="form-control" id="alamat" rows="3" required></textarea>
              </div>

              <div class="mb-3">
                <label for="kuantitas" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="kuantitas" min="1" value="1" required />
              </div>

              <div class="mb-3">
                <label for="catatan" class="form-label">Catatan (Opsional)</label>
                <textarea class="form-control" id="catatan" rows="2"></textarea>
              </div>

              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="setuju" required />
                <label class="form-check-label" for="setuju">
                  Saya menyetujui syarat dan ketentuan yang berlaku
                </label>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-gold px-4 py-2">Kirim Pesanan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

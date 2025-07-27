<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kayoo.id</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Amiri&family=Noto+Naskh+Arabic&family=Poppins&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <!-- Navbar -->
     <?php include 'navbar.php'; ?>

    <!-- Konten -->
    <main>
      <section class="py-5">
        <div class="container">
          <!-- Judul -->
          <div class="row mb-4 text-center">
            <div class="col">
              <h2>Produk Kami</h2>
              <p class="text-muted">
                Pilih produk yang sesuai dengan kebutuhan dan minat anda.
              </p>
            </div>
          </div>

          <!-- Filter Kategori -->
          <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
              <select
                class="form-select text-center py-2 px-3 shadow-sm"
                style="font-size: 1rem;
                  border-radius: 0.5rem;
                  border: 2px solid var(--primary);
                  background-color: #fff;
                  color: var(--primary);
                  font-weight: 600;
                  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);"
                onchange="filterProduk(this.value)">
                <option value="all" selected>Semua Kategori</option>
                <option value="kaligrafi">Kaligrafi</option>
                <option value="dekorasi">Dekorasi</option>
                <option value="sign">Sign</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
          </div>

          <!-- Container Card Produk -->
          <div class="row" id="produkContainer">
            <!-- Diisi via JavaScript -->
          </div>
        </div>

        <div class="text-center mt-5 mb-5">
        <h3 class="fw-bold mb-3">Tertarik dengan produk kami?</h3>
        <p class="mb-4">
          Kaligrafi dan dekorasi unik untuk hadiah, pernikahan, atau koleksi
          rumah Anda.
        </p>
        <a href="pesan.php" class="btn btn-gold px-4 py-2 fs-5"
          >Pesan Sekarang</a>
      </div>
      </section>      
    </main>

        <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script.js"></script>
    <!-- Modal Detail Produk -->
   <div
  class="modal fade"
  id="detailModal"
  tabindex="-1"
  aria-labelledby="detailModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 rounded-4 shadow-lg">
      <!-- Header -->
      <div class="modal-header bg-white border-bottom-0">
        <h5 class="modal-title fw-bold" id="detailModalLabel">
          Detail Produk
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>

      <!-- Body -->
      <div class="modal-body p-4">
        <div class="row align-items-center g-4">
          <!-- Gambar -->
          <div class="col-md-6">
            <div class="shadow-sm rounded overflow-hidden">
              <img
                id="modalGambar"
                src=""
                alt="Produk"
                class="img-fluid w-100"
              />
            </div>
          </div>

          <!-- Detail -->
          <div class="col-md-6">
            <h4 id="modalNama" class="fw-semibold text-dark mb-2"></h4>
            <p id="modalHarga" class="text-warning fs-5 fw-bold mb-3"></p>
            <span
              id="modalKategori"
              class="badge bg-light text-dark px-3 py-2 mb-3 d-inline-block"
            ></span>
            <p id="modalDeskripsi" class="text-muted small" style="line-height: 1.6"></p>

            <a href="pesan.php" class="btn btn-gold mt-2 px-4 py-2 w-100">
              Pesan Sekarang
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>

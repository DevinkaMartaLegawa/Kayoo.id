<?php
session_start();

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $instansi = htmlspecialchars($_POST["instansi"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    $baris = "$nama|$instansi|$pesan\n";
    file_put_contents("testimoni.txt", $baris, FILE_APPEND);

    $_SESSION['sukses'] = true;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Testimoni | Kayoo.id</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/style.css" />
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<div class="container my-5">
  <h2 class="text-center fw-bold mb-4">Testimoni Pengguna</h2>

  <?php if (isset($_SESSION['sukses'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Terima kasih! Testimoni Anda telah berhasil dikirim.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php unset($_SESSION['sukses']); ?>
  <?php endif; ?>

  <!-- Testimoni Cards -->
  <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
    <?php
      $file = 'testimoni.txt';
      if (file_exists($file)) {
          $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          if (count($lines) > 0) {
              $tampil = array_reverse($lines); // tampilkan yang terbaru di atas
              foreach ($tampil as $line):
                  list($nama, $instansi, $pesan) = explode('|', $line);
    ?>
    <div class="col">
      <div class="testimonial-card h-100">
        <div class="testimonial-header">
          <?= htmlspecialchars($nama) ?> - <?= htmlspecialchars($instansi) ?>
        </div>
        <div class="testimonial-message">
          “<?= nl2br(htmlspecialchars($pesan)) ?>”
        </div>
      </div>
    </div>
    <?php endforeach;
          } else {
              echo "<div class='col-12 text-center'><p>Belum ada testimoni.</p></div>";
          }
      } else {
          echo "<div class='col-12 text-center'><p>Belum ada testimoni.</p></div>";
      }
    ?>
  </div>

  <!-- Form -->
  <hr class="my-5">
  <div class="card shadow p-4">
    <h4 class="mb-4 text-center">Tulis Testimoni Anda</h4>
    <form method="POST">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="mb-3">
        <label for="instansi" class="form-label">Instansi</label>
        <input type="text" class="form-control" id="instansi" name="instansi" required>
      </div>
      <div class="mb-3">
        <label for="pesan" class="form-label">Pesan Testimoni</label>
        <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-gold px-4 py-2">Kirim</button>
      </div>
    </form>
  </div>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

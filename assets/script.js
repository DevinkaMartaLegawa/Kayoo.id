const produkList = [
  {
    nama: "KALIGRAFI SYAHADAT HIASAN DINDING ACRYLIC MIRROR MENGKILAP",
    kategori: "kaligrafi",
    gambar: "assets/kaligrafi.jpg",
    deskripsi:
      "Kaligrafi hiasan dinding 2 kalimat syahadat terbuat dari acrylic mirror sehingga tampak mengkilap dan cocok di pajang di mushola/masjid",
    harga: "Rp 133.000",
  },
  {
    nama: "KALIGRAFI / HIASAN DINDING ACRYLIC MIRROR LAFADZ ALLAH - MUHAMMAD",
    kategori: "kaligrafi",
    gambar: "assets/kaligrafi1.jpg",
    deskripsi:
      "Hiasan dinding kaligrafi lafadz Allah - Muhammad terbuat dari acrilyc mirror sehingga tampak elegan. Sangat cocok ditempatkan di dinding musholah rumah, ruang tamu, masjid, dll.",
    harga: "Rp 63.000",
  },
  {
    nama: "NOMOR RUMAH ACRYLIC UKURAN 28 CM x 20 CM",
    kategori: "sign",
    gambar: "assets/nomorrumah.jpg",
    deskripsi:
      "Nomor Rumah Aesthetic Terbuat dari bahan acrylic dengan ukuran 28 cm x 20 cm",
    harga: "Rp . 38.000",
  },
  {
    nama: "SIGN ACRYLIC PREMIUM UKURAN 30 cm x 10 CM",
    kategori: "sign",
    gambar: "assets/tanda.jpg",
    deskripsi:
      "Sign Acrylic Premium ALAS KAKI HARAP DILEPAS Ukuran 30 cm x 10 CM. Berfungsi Sebagai Tanda/ Informasi / Himbauan Mengenai Apa Yang Dilarang, Dihindari & Dilakukan.",
    harga: "Rp 31.000",
  },
  {
    nama: "Wedding Sign Aesthetic",
    kategori: "sign",
    gambar: "assets/wedding sign.jpg",
    deskripsi:
      "Sign Acrilyc Produk Handmade Original by Kayoo cocok untuk dekorasi pernikahan.",
    harga: "Rp 111.500",
  },
  {
    nama: "RAK KAYU AESTHETIC MULTI FUNGSI",
    kategori: "dekorasi",
    gambar: "assets/Rak Hias.jpg",
    deskripsi:
      "RAK KAYU AESTHETIC MULTI FUNGSI / RAK GANTUNGAN KUNCI / DEKORASI RUMAH sangat cocok di tempatkan di area dinding rumah anda seperti di rumang tamu, ruang keluarga, dapur dan lainya! bentuknya yang sangat minimalis dan simpel tidak memakan banyak tempat.",
    harga: "Rp 50.000",
  },
  {
    nama: "STANDING WOOD FRAME KAYU",
    kategori: "lainnya",
    gambar: "assets/Standing.jpg",
    deskripsi:
      "Standing frame terbuat dari bahan kayu yang berkualitas, pemasanganya mudah, ringan, awet & unik. Standing frame ini bisa digunakan display seperti, acrylic welcome sign, papan black board, dan masih banyak lagi",
    harga: "Rp 70.000",
  },
  {
    nama: "FRAME MAHAR PERNIKAHAN",
    kategori: "lainnya",
    gambar: "assets/Mahar.jpg",
    deskripsi: "Frame Mahar Pernikahan Terbuat dari Kayu - PO 5 HARI",
    harga: "Rp 289.000",
  },
];

function tampilkanProduk(list) {
  const container = document.getElementById("produkContainer");
  container.innerHTML = "";

  list.forEach((item) => {
    container.innerHTML += `
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
          <img src="${item.gambar}" class="card-img-top" alt="${
      item.nama
    }" style="height: 200px; object-fit: cover;">
          <div class="card-body text-center px-3 py-4">
            <h6 class="card-title fw-semibold mb-2" style="font-size: 0.95rem;">${
              item.nama
            }</h6>
            <p class="fw-bold mb-3" style="font-size: 1rem;">${item.harga}</p>
            <button 
              class="btn btn-gold px-4 py-2"
              onclick='bukaDetailProduk(${JSON.stringify(item)})'
              style="font-size: 0.9rem;"
            >
              Lihat Detail
            </button>
          </div>
        </div>
      </div>
    `;
  });
}

function bukaDetailProduk(item) {
  document.getElementById("modalNama").textContent = item.nama;
  document.getElementById("modalGambar").src = item.gambar;
  document.getElementById("modalHarga").textContent = item.harga;
  document.getElementById("modalDeskripsi").textContent =
    "Deskripsi: " + item.deskripsi;
  document.getElementById("modalKategori").textContent =
    "Kategori: " + item.kategori;

  const modal = new bootstrap.Modal(document.getElementById("detailModal"));
  modal.show();
}

function filterProduk(kategori) {
  if (kategori === "all") {
    tampilkanProduk(produkList);
  } else {
    const filtered = produkList.filter((p) => p.kategori === kategori);
    tampilkanProduk(filtered);
  }
}

window.onload = () => tampilkanProduk(produkList);

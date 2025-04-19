const produkList = [
  {
    nama: "KALIGRAFI ACRYLIC MIRROR MENGKIPAP LAILAHAILLALLAH MUHAMMADARRASULULLAH / HIASAN DINDING KALIGRAFI",
    kategori: "kaligrafi",
    gambar: "assets/kaligrafi.jpg",
    deskripsi: "KALIGRAFI ACRYLIC MIRROR MENGKIPAP LAILAHAILLALLAH MUHAMMADARRASULULLAH / HIASAN DINDING KALIFRAFI",
    harga: "Rp 133.000",
  },
  {
    nama: "SEPASANG KALIGRAFI / HIASAN DINDING ACRYLIC MIRROR LAFADZ ALLAH - MUHAMMAD/ MURAH",
    kategori: "kaligrafi",
    gambar: "assets/kaligrafi1.jpg",
    deskripsi: "HIASAN DINDING ACRYLIC LAFADZ ALLAH - MUHAMMAD Sangat cocok ditemtpatkan di dinding musholah rumah, ruang tamu, masjid, dll. Menggukan bahan acrylic miror  2mm sehingga tampak elegan! dan dilapis dengan sponeva sehingga tampak timbul", 
    harga: "Rp 63.000",
  },
  {
    nama: "NOMOR RUMAH ACRYLIC AESTHETIC UKURAN 28 CM X 20 CM (TAHAN SEGALA CUACA)",
    kategori: "sign",
    gambar: "assets/nomorrumah.jpg",
    deskripsi: "NOMOR RUMAH ACRYLIC UKURAN 28 CM X 20 CM (TAHAN SEGALA CUACA)",
    harga: "Rp . 38.000",
  },
  {
    nama: "SIGN ACRYLIC PREMIUM ALAS KAKI HARAP DILEPAS UKURAN 30 X 10 CM",
    kategori: "sign",
    gambar: "assets/tanda.jpg",
    deskripsi: "SIGN ACRYLIC PREMIUM “ALAS KAKI HARAP DILEPAS UKURAN 30 X 10 CM, MEMILIKI FUNGSI SEBAGAITANDA/ INFORMASI / HIMABUAN MENGENAI APA YANG DILARANG, DIHINDARI DAN DILAKUKAN.",
    harga: "Rp 31.000",
  },
  {
    nama: "Wedding Sign Aesthetic Termurah /Dekorasi Lamaran/ Dekorasi Pernikahan/ Akrilik Sign/ Welcome Sign",
    kategori: "sign",
    gambar: "assets/wedding sign.jpg",
    deskripsi: "Produk Handmade Original by Kayoo.",
    harga: "Rp 111.500",
  },
  {
    nama: "RAK KAYU AESTHETIC MULTI FUNGSI / RAK GANTUNGAN KUNCI / DEKORASI RUMAH MINIMALIS",
    kategori: "dekorasi",
    gambar: "assets/Rak Hias.jpg",
    deskripsi: "RAK KAYU AESTHETIC MULTI FUNGSI / RAK GANTUNGAN KUNCI / DEKORASI RUMAH sangant cocok di tempatkan di area dinding rumah anda. baik di rumang tamu, ruang keluarga, dapur dan lainya! bentuknya yang sangat minimalis dan simpel tidak memakan banyak tempat. ",
    harga: "Rp 50.000",
  },
  {
    nama: "STANDING WOOD FRAME 109 CM / EASLE / STANDING FRAME KAYU, BISA DILIPAT 112 CM / DEKORASI LAMARAN",
    kategori: "lainnya",
    gambar: "assets/Standing.jpg",
    deskripsi: "Standing frame terbuat dari bahan kayu yang berkualitas, pemasanganya mudah, ringan, awet & unik. Standing frame ini bisa digunakan display seperti, acrylic welcome sign, papan black board, dan masih banyak lagi",
    harga: "Rp 70.000",
  },
  {
    nama: "MAHAR PERNIKAHAN / FRAME MAHAR / MAHAR KAYU",
    kategori: "lainnya",
    gambar: "assets/Mahar.jpg",
    deskripsi: "MAHAR / FRAME MAHAR / MAHAR KAYU - PO 5 HARI",
    harga: "Rp 289.000",
  },
];

function tampilkanProduk(list) {
  const container = document.getElementById("produkContainer");
  container.innerHTML = "";

  list.forEach((item) => {
    container.innerHTML += `
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="${item.gambar}" class="card-img-top" alt="${item.nama}">
          <div class="card-body text-center">
            <h6 class="card-title">${item.nama}</h6>
            <p class="text-success fw-bold">${item.harga}</p>
            <button class="btn btn-outline-success btn-sm" onclick='bukaDetailProduk(${JSON.stringify(
              item
            )})'>Lihat Detail</button>
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

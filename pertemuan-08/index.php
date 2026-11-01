<?php
require_once "koneksi.php";

// Menyimpan pesan pengunjung
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $pesan = trim($_POST["pesan"] ?? "");

    if ($nama != "" && $pesan != "") {
        $sql = "INSERT INTO buku_tamu (nama, pesan)
                VALUES (:nama, :pesan)";

        $stmt = $koneksi->prepare($sql);
        $stmt->execute([
            ":nama" => $nama,
            ":pesan" => $pesan
        ]);

        header("Location: index.php#buku-tamu");
        exit;
    }
}

// Mengambil pesan pengunjung
$stmt = $koneksi->query(
    "SELECT * FROM buku_tamu ORDER BY id DESC"
);

$tamu = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dhifa Flatshoes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- MENU NAVIGASI -->
<header>
    <h1 class="logo">♡ Dhifa Flatshoes</h1>

    <nav>
        <a href="#beranda">Beranda</a>
        <a href="#produk">Produk</a>
        <a href="#tentang">Tentang</a>
        <a href="#identitas">Identitas</a>
        <a href="#buku-tamu">Buku Tamu</a>
    </nav>
</header>

<!-- BERANDA -->
<section class="hero" id="beranda">

    <div class="hero-text">
        <h1>Dhifa Flatshoes</h1>

        <h2>Elegant Flatshoes for You ♡</h2>

        <p>
            Tampil lebih percaya diri dengan
            flatshoes yang nyaman, cantik,
            dan stylish untuk menemani
            setiap aktivitasmu.
        </p>

        <a href="#produk" class="btn">
            Lihat Produk
        </a>
    </div>

    <div class="hero-image">
        <img src="assets/banner.jpg"
             alt="Koleksi Dhifa Flatshoes">
    </div>

</section>

<!-- PRODUK -->
<section class="produk" id="produk">

    <div class="judul">
        <h2>Produk Kami</h2>
        <p>Pilihan flatshoes cantik dan nyaman.</p>
    </div>

    <div class="produk-container">

        <div class="card">
            <img src="assets/flatshoes1.jpg"
                 alt="Ribbon Flatshoes">

            <h3>Ribbon Flatshoes</h3>
            <p>Desain simpel dengan aksen pita.</p>
            <h4>Rp85.000</h4>
        </div>

        <div class="card">
            <img src="assets/flatshoes2.jpg"
                 alt="Polca Dot Flatshoes">

            <h3>Polca Dot Flatshoes</h3>
            <p>Desain polka dot yang lucu.</p>
            <h4>Rp90.000</h4>
        </div>

        <div class="card">
            <img src="assets/flatshoes3.jpg"
                 alt="Casual Flatshoes">

            <h3>Casual Flatshoes</h3>
            <p>Nyaman untuk sehari-hari.</p>
            <h4>Rp85.000</h4>
        </div>

    </div>

</section>

<!-- TENTANG TOKO -->
<section class="tentang" id="tentang">

    <div>
        <h2>Tentang Kami</h2>

        <p>
            Dhifa Flatshoes adalah usaha penjualan
            sepatu flatshoes wanita yang menyediakan
            berbagai model sepatu dengan desain
            simpel, elegan, dan nyaman digunakan.

            Kami ingin memberikan pilihan sepatu
            yang menarik untuk menemani aktivitas
            sehari-hari.
        </p>
    </div>

</section>

<!-- IDENTITAS PEMILIK -->
<section class="identitas" id="identitas">

    <div class="judul">
        <h2>Identitas Saya</h2>
    </div>

    <div class="profil">

        <img src="assets/profil."
             alt="Foto pemilik">

        <div>
            <h3>Profil Pemilik</h3>

            <p><b>Nama:</b> [Dhifa Fahrunnisah]</p>

            <p><b>NIM:</b> [2622500009]</p>

            <p><b>Kelas:</b> [SI1A]</p>

            <p><b>Program Studi:</b> [Sistem Informasi]</p>

            <h3>Tentang Saya</h3>

            <p>
                Perkenalkan, saya [Dhifa Fahrunnisah].
                Saya merupakan mahasiswa yang tertarik
                dengan dunia bisnis dan teknologi.

                Melalui website ini, saya ingin
                memperkenalkan usaha Dhifa Flatshoes
                kepada masyarakat secara online.
            </p>
        </div>

    </div>

</section>

<!-- BUKU TAMU -->
<section class="buku-tamu" id="buku-tamu">

    <div class="judul">
        <h2>Buku Tamu</h2>
        <p>Silakan tinggalkan pesan dan kesan Anda.</p>
    </div>

    <form method="POST"
          action="index.php#buku-tamu"
          class="form-tamu">

        <label>Nama Pengunjung</label>

        <input type="text"
               name="nama"
               placeholder="Masukkan nama Anda"
               maxlength="100"
               required>

        <label>Pesan dan Kesan</label>

        <textarea name="pesan"
                  placeholder="Tuliskan pesan Anda..."
                  required></textarea>

        <button type="submit" class="btn">
            Kirim Pesan
        </button>

    </form>

    <div class="daftar-tamu">

        <h3>Pesan Pengunjung</h3>

        <?php if (count($tamu) > 0): ?>

            <?php foreach ($tamu as $data): ?>

                <div class="pesan-card">

                    <h4>
                        <?= htmlspecialchars($data["nama"]) ?>
                    </h4>

                    <small>
                        <?= htmlspecialchars($data["tanggal"]) ?>
                    </small>

                    <p>
                        <?= nl2br(htmlspecialchars($data["pesan"])) ?>
                    </p>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p>Belum ada pesan pengunjung.</p>

        <?php endif; ?>

    </div>

</section>

<!-- FOOTER -->
<footer>
    <h3>Dhifa Flatshoes ♡</h3>

    <p>Elegant Flatshoes for You.</p>

    <p>&copy; 2026 Dhifa Flatshoes</p>
</footer>

<script src="script.js"></script>

</body>
</html>
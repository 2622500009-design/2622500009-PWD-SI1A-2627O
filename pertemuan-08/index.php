<?php
//include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dhifa Flatshoes</title>

    <link rel="stylesheet" href="style.css">
</head>

<script src="script.js"></script>


<header>
    <div class="logo">
            <h1>Dhifa Flatshoes</h1>
            <p>Elegant Shoes, Comfortable Steps</p>
        </div>
</header>

    <nav class="navbar">

        <ul>
            <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="#produk"><i class="fa fa-shopping-cart"></i> Produk</a></li>
            <li><a href="#tentang"><i class="fa fa-info-circle"></i> Tentang</a></li>
            <li><a href="#identitas"><i class="fa fa-user"></i> Identitas</a></li>
            <li><a href="#bukutamu"><i class="fa fa-book"></i> Buku Tamu</a></li>
            <li><a href="#kontak"><i class="fa fa-envelope"></i> Kontak</a></li>
        </ul>

    </nav>

<body>
    <section class="hero">

        <div class="hero-text">

            <h4>WELCOME TO DHIFA FLATSHOES</h4>

            <h1>
                Step Into Style With
                <span>Comfort.</span>
            </h1>

            <p>
                Temukan flatshoes cantik, nyaman,
                dan elegan untuk menemani setiap langkahmu.
            </p>

            <a href="#produk" class="btn">
                Lihat Koleksi
            </a>

        </div>

    </section>


    <section id="produk">

        <h2>Koleksi Flatshoes</h2>

        <div class="produk-container">

            <div class="card">

                <img src="assets/flatshoes1.jpg">

                <h3>Blue Ribbon Flatshoes</h3>

                <p>
                    Flatshoes dengan aksen pita manis dengan kombinasi warna biru dan cream elegan,cocok untuk jalan santai maupun acara semi formal.
                </p>

                <h4>Rp85.000</h4>

                <button>Pesan Sekarang</button>

            </div>


            <div class="card">

                <img src="assets/flatshoes2.jpg">

                <h3>Polcadot Flatshoes</h3>

                <p>
                    Motif polkadot yang unik memberikan kesan lucu dan feminim tetapi tetap fashionale,nyaman digunakan untuk akivitas sehari-hari.
                </p>

                <h4>Rp95.000</h4>

                <button>Pesan Sekarang</button>

            </div>


            <div class="card">

                <img src="assets/flatshoes3.jpg">

                <h3>Casual Flatshoes</h3>

                <p>
                    Desain minimalis dengan warna netral yang mudah dipadukan dengan berbagai outfit,memberikan kenyamanan sepanjang hari.
                </p>

                <h4>Rp90.000</h4>

                <button>Pesan Sekarang</button>

            </div>

        </div>


        <div class="card">
            <section id="tentang">
            <h2>Tentang Dhifa Flatshoes</h2>

            <p>Dhifa Flatshoes merupakan toko flatshoes yang menawarkan
                berbagai model sepatu wanita dengan desain menarik,
                sederhana dan nyaman digunakan dengan desain stylish,
                elegan,dan feminin.Cocok digunakan untuk
                kuliah,bekerja,jalan-jalan,maupun acara santai.
                Tampil cantik dan percaya diri dengan sepatu
                yang nyaman di setiap langkah.
        </p>

        </div>

        <div class="card">
            <section id="identitas">
            <h2>Identitas Pemilik</h2>

            <img src="assets/profil.jpg" style="width: 150px; height: 150px; border-radius: 100%; object-fit: cover;">

            <p>
                <b>Dhifa Fahrunnisah</b><br>
                NIM : 2622500009<br>
                Tanggal lahir : 28 Desember 2007<br>
                Kelas : SI1A<br>
                Program Studi : Sistem Informasi
            </p>

        </div>

    </section>


    <section class="info">

        <div class="card" id="bukutamu">

            <h2>Buku Tamu</h2>

            <p>
                Silakan tinggalkan pesan, kritik, atau saran untuk kami.
            </p>

            <form method="post" action="">

                <label>Nama Lengkap</label><br>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    required
                >

                <br><br>

                <label>Email</label><br>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    required
                >

                <br><br>

                <label>No HP</label><br>

                <input
                    type="tel"
                    name="nohp"
                    placeholder="Masukkan nomor HP"
                    required
                >

                <br><br>

                <label>Pesan</label><br>

                <textarea
                    name="pesan"
                    rows="5"
                    placeholder="Tulis pesan Anda..."
                    required
                ></textarea>

                <br><br>

                <input type="submit" name="kirim" value="Kirim">

            </form>

        </div>

<div class="card">
            <section id="kontak">
            <h2>Hubungi Kami</h2>

            <p>
                📱 0812-3897-4234<br>
                📧 dhifaflatshoes@gmail.com<br>
                📍 Pangkalpinang
            </p>

    </section>

    <footer>

        <h3>DHIFA FLATSHOES</h3>

        <p>2622500009-Dhifa Fahrunnisah</p>

        <p>&copy; UTS PEMROGRAMAN WEB DASAR.</p>

    </footer>

</body>

</html>

# DHIFA FLATSHOES - UTS Pemrograman Web Dasar
NIM : 2622500009
Nama : Dhifa Fahrunnisah
Kelas : SI1A - Sistem Informasi

### Tentang Toko
Dhifa Flatshoes adalah toko flatshoes wanita yang aku buat untuk tugas UTS PWD. Konsepnya simple, elegan, nyaman, dengan warna utama biru soft.

### Struktur Folder
pertemuan-08/
- index.php (halaman utama)
- style.css (semua style)
- script.js (javascript untuk WA dan form)
- assets/
    - banner.jpg
    - flatshoes1.jpg, flatshoes2.jpg, flatshoes3.jpg
    - profil.jpg


### Penjelasan File

**1. index.php**
Ini halaman utamanya. Di dalamnya ada:
- navbar yang isinya logo "Dhifa Flatshoes Elegant Shoes" sama menu Beranda, Produk, Tentang, Identitas, Buku Tamu, Kontak. Awalnya navbar ku di kiri terus jadi berantakan, akhirnya aku benerin pakai `margin-left: auto` biar mentok kanan.
- section hero buat welcome text "Step Into Style With Comfort"
- section #produk isinya 3 card produk: Blue Ribbon, Polcadot, Casual. Harganya 85k, 95k, 90k. Setiap card ada gambar, deskripsi, sama tombol Pesan Sekarang.
- 4 card bawah itu yang sempet error di laptop ku: Tentang, Identitas Pemilik, Buku Tamu, Hubungi Kami. Aku taruh di dalam bottom-grid biar sejajar.
- footer buat NIM sama copyright UTS.

**2. style.css**
Ini yang paling banyak errornya. Awalnya aku pakai warna:
body #F3F8FD, navbar #DCEBFA, text #354D68
Tapi pas aku screenshot di laptop, 4 card bawah jadi biru tua semua terus tulisannya hitam jadi nggak kebaca. Ternyata karena aku nulis `Line-height` pakai L besar, jadi nggak kebaca sama browser. Terus `.card` nggak aku kasih background putih, jadi warnanya nyatu sama body.

Akhirnya aku benerin:
- semua `.card` aku kasih `background: white !important` sama `border: 1px solid #dceBFA` biar kelihatan bersih
- navbar aku kasih `position: sticky` sama `justify-content: space-between` biar logo di kiri, menu di kanan
- hero pakai `background-image: url('assets/banner.jpg')` dengan height 500px
- produk-container pakai `display: flex` dan `flex-wrap: wrap` biar responsive
- form buku tamu aku atur width 100% biar nggak ketumpuk kayak di foto ku kemarin
- aku tambahin `.navbar-scroll` buat efek pas di-scroll jadi putih solid

**3. script.js**
Di JS ini ada 3 fungsi utama:
- buat navbar berubah pas di scroll > 50px, nambah class `navbar-scroll`
- buat tombol Pesan Sekarang langsung ke WhatsApp. Jadi pas di klik, dia ngambil nama produk sama harga dari h3 dan h4 terus bikin link `https://wa.me/6281238974234?text=...` 
- validasi form buku tamu, kalau ada yang kosong keluar alert "Silakan isi semua data terlebih dahulu", kalau lengkap keluar "Terima kasih sudah mengisi buku tamu"

Awalnya tombol WA nggak jalan karena aku lupa pakai `encodeURIComponent`, jadi spasi nya error.

**Galat / Error yang aku alami selama ngerjain:**

1.  Header nggak mau ke kanan - awalnya aku pakai `gap` doang, ternyata harus pakai `margin-left: auto` di ul nya baru bisa mentok kanan.

2.  Foto laptop jadi biru semua nggak kebaca - ini karena di style.css ku yang lama, `.card` nggak ada background putih. Jadi 4 card Tentang, Identitas, Buku Tamu, Kontak jadi warna biru sama kayak body. Solusinya aku kasih background white.

3.  `Line-height` ketulis `Line-height` dengan L besar - ini typo kecil tapi bikin semua line-height nggak jalan, teks jadi dempet.

4.  Card Tentang dan Identitas masuk ke dalam section #produk - di kode index.php ku yang lama, aku salah tutup div, jadi 2 card itu keikut jadi bagian produk. Makanya di screenshot jadi memanjang ke bawah. Aku benerin dengan bikin section baru `bottom-grid`.

5.  Form buku tamu ketumpuk - karena input nya width 90% tapi nggak ada box-sizing, jadi pas di layar kecil dia keluar card. Aku ganti jadi width 100% + box-sizing border-box.

6.  Gambar nggak muncul - karena folder assets ku namanya `assets` tapi di kode ku ada yang nulis `asset`, jadi harus disamain.

### Cara Menjalankan
1. Aktifkan XAMPP Apache
2. Taruh folder di `C:/xampp/htdocs/2622500009-PWD-SI1A-26270/pertemuan-08/`
3. Buka browser `localhost/2622500009-PWD-SI1A-26270/pertemuan-08/`
4. Untuk buku tamu, isi form terus klik Kirim

Sekian, maaf kalau masih banyak kurang, masih belajar.
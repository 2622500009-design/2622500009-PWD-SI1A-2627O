<?php
$file =" pesan.json"

//Membuat file jika belum tersedia 
if (!file_exists($file)) {
    file_put_contents($file, "[]"
}    

//Mengirim pesan buku tamu
if  ($_SERVER["REQUEST_METHOD"]=="POST") {
  
  $nama = trim($_POST["nama"]??"");
  $pesan = trim($_POST["pesan"]??"");
  
  if ($nama !== "" && $pesan !== "") {

        $data = json_decode(
            file_get_contents($file), true
        );

        if (!is_array($data)) {
            $data = [];
        }

        $data[] = [
            "nama" => $nama,
            "pesan" => $pesan,
            "tanggal" => date("d-m-Y H:i")
        ];

        file_put_contents(
            $file,
            json_encode($data, JSON_PRETTY_PRINT |
                JSON_UNESCAPED_UNICODE),
            LOCK_EX
        );

        header("Location: index.php#buku-tamu");
        exit;
    }
}

// Membaca pesan pengunjung
$tamu = json_decode(
    file_get_contents($file), true
);

if (!is_array($tamu)) {
    $tamu = [];
}
?>

<section class="buku-tamu" id="buku-tamu">

    <h2>Buku Tamu</h2>
    <p>Silakan tinggalkan pesan dan kesan Anda.</p>

    <form method="POST" class="form-tamu">

        <label>Nama Pengunjung</label>

        <input type="text" name="nama"
               placeholder="Masukkan nama Anda"
               required>

        <label>Pesan dan Kesan</label>

        <textarea name="pesan"
                  placeholder="Tuliskan pesan Anda"
                  required></textarea>

        <button type="submit" class="btn">
            Kirim Pesan
        </button>

    </form>

<h3>Pesan Pengunjung</h3>
<?php foreach (array_reverse($tamu) as $data): ?>

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
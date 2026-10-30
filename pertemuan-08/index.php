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
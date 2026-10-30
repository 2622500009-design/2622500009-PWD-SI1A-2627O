<?php
$file =" pesan.json"

//Membuat file jika belum tersedia 
if (!file_exists($file)) {
    file_put_contents($file, "[]"
}    
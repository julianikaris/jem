<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $komentar = htmlspecialchars($_POST['komentar']);

    // Validasi sederhana
    if (!empty($nama) && !empty($email) && !empty($komentar)) {
        echo "Terima kasih, $nama. Komentar Anda: '$komentar' telah diterima.";
    } else {
        echo "Mohon lengkapi semua bidang.";
    }
} else {
    echo "Formulir belum dikirim.";
}
?>

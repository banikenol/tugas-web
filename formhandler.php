<?php
// Cek apakah form telah dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $instrument = $_POST['instrument'];

    // Validasi dasar, pastikan semua field diisi
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($instrument)) {
        // Simpan data ke dalam file atau database jika diperlukan
        // (Sama seperti sebelumnya, menyimpan data ke file)

        // Setelah validasi, panggil file buatpdf.php untuk membuat PDF
        // dan kirim data melalui URL
        header("Location: buatpdf.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone=" . urlencode($phone) . "&instrument=" . urlencode($instrument));
        exit;
    } else {
        // Pesan error jika ada field yang kosong
        echo "<h2 class='error'>Error</h2>";
        echo "<p class='error'>Harap mengisi semua field pada formulir.</p>";
    }
} else {
    echo "<h2 class='error'>Tidak ada data yang dikirim.</h2>";
}
?>

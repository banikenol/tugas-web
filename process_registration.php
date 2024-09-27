<?php
// Cek apakah data dikirim via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $instrument = $_POST['instrument'];

    // Simpan data ke dalam file atau database (ini contoh menyimpan ke file)
    $file = 'registrations.txt';
    $data = "Nama: $name\nEmail: $email\nTelepon: $phone\nTanggal Lahir: $birthdate\nAlamat: $address\nAlat Musik: $instrument\n\n";

    // Tulis data ke file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Tampilkan pesan sukses
    echo "<h2>Terima kasih telah mendaftar!</h2>";
    echo "<p>Berikut data yang Anda kirim:</p>";
    echo "<p>Nama: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telepon: $phone</p>";
    echo "<p>Tanggal Lahir: $birthdate</p>";
    echo "<p>Alamat: $address</p>";
    echo "<p>Alat Musik: $instrument</p>";
} else {
    echo "Form belum diisi dengan benar.";
}
?>

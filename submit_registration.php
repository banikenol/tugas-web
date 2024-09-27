<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menyertakan file CSS eksternal -->
    <style>
        /* CSS untuk membuat tampilan fullscreen */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 30px;
            overflow: hidden;
        }

        .fullscreen-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Agar gambar berada di belakang konten lainnya */
            margin: 0px;
            padding: 0px;
        }

        .container {
            position: relative;
            z-index: 1; /* Agar konten berada di atas gambar */
            background-color: rgba(255, 255, 255, 0.8); /* Background putih semi transparan */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            margin: 0 auto;
            margin-top: 20px; /* Memberi jarak dari atas halaman */
        }

        h2 {
            color: green;
        }

        p {
            font-size: 16px;
            color: black;
            margin: 10px 0;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
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
                // Menyimpan data ke dalam file atau database
                // Contoh menyimpan ke file 'registrations.txt'
                $file = 'registrations.txt';
                $data = "Nama: $name\nEmail: $email\nTelepon: $phone\nInstrumen: $instrument\n\n";
                file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

                // Pesan sukses
                echo "<h2>Pendaftaran Berhasil!</h2>";
                echo "<p>Terima kasih, $name, telah mendaftar. Berikut adalah data yang Anda kirim:</p>";
                echo "<p><strong>Nama:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Nomor Telepon:</strong> $phone</p>";
                echo "<p><strong>Instrumen:</strong> $instrument</p>";
                echo "<p><strong></strong> TUNGGU INFORMASI SELANJUTNYA!!!</p>";

                // Tombol untuk mengunduh PDF
                echo '
                <form action="buatpdf.php" method="post" target="_blank">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="email" value="' . $email . '">
                    <input type="hidden" name="phone" value="' . $phone . '">
                    <input type="hidden" name="instrument" value="' . $instrument . '">
                    <button type="submit">Unduh PDF</button>
                </form>';
            } else {
                // Pesan error jika ada field yang kosong
                echo "<h2 class='error'>Error</h2>";
                echo "<p class='error'>Harap mengisi semua field pada formulir.</p>";
            }
        } else {
            echo "<h2 class='error'>Tidak ada data yang dikirim.</h2>";
        }
        ?>
    </div>
</body>
</html>

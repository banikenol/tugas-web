<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seleksi Drumband</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section>
        <h1>Pendaftaran Seleksi Drumband SMKN 3 Yogyakarta</h1>

        <h2>Informasi Seleksi</h2>
        <p>Untuk bergabung dengan ekstrakurikuler drumband, Anda perlu mengikuti proses seleksi yang mencakup:</p>
        <ul>
            <li>Audisi individu untuk mengukur keterampilan musik dan koordinasi.</li>
            <li>Tes kemampuan bermain alat musik yang relevan.</li>
            <li>Wawancara untuk memahami motivasi dan komitmen Anda.</li>
        </ul>  

        <h2>Formulir Pendaftaran</h2>
        <form action="submit_registration.php" method="post">
            <label id="h3baru" for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label id="h3baru" for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label id="h3baru" for="phone">Nomor Telepon:</label>
            <input type="text" id="phone" name="phone" required>
            <br>
            <label id="h3baru" for="instrument">Instrumen yang Dimainkan:</label>
            <input type="text" id="instrument" name="instrument" required>
            <br>
            <input id="h3baru" type="submit" value="Daftar Sekarang">
        </form>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>

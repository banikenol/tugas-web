<?php
require('fpdf/fpdf.php');

// Cek apakah form telah dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $instrument = $_POST['instrument'];

    // Validasi dasar, pastikan semua field diisi
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($instrument)) {
        // Buat objek PDF
        $pdf = new FPDF();
        $pdf->AddPage();

        // Set judul
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Hasil Pendaftaran', 0, 1, 'C');

        // Pindah baris
        $pdf->Ln(10);

        // Tambah teks hasil pendaftaran
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, 'Nama: ' . $name, 0, 1);
        $pdf->Cell(0, 10, 'Email: ' . $email, 0, 1);
        $pdf->Cell(0, 10, 'Nomor Telepon: ' . $phone, 0, 1);
        $pdf->Cell(0, 10, 'Instrumen: ' . $instrument, 0, 1);

        // Pindah baris
        $pdf->Ln(10);
        $pdf->Cell(0, 10, 'Terima kasih telah mendaftar!', 0, 1, 'C');

        // Tambahkan paragraf informasi tambahan
        $pdf->Ln(10);
        $pdf->MultiCell(0, 10, "Kami sangat senang menyambut anda di ekstrakurikuler Drumband SMK N 3 Yogyakarta. " . 
        "Segera cek email anda untuk informasi lebih lanjut mengenai jadwal latihan dan persiapan awal. " . 
        "Kami berharap anda bisa hadir di pertemuan perdana, karena di sinilah kita akan memulai perjalanan penuh. " . 
        "Dengan bergabung dalam kegiatan ini, anda tidak hanya akan mengasah keterampilan bermusik, tetapi juga akan belajar tentang kekompakan, kedisiplinan, dan kerja sama tim yang solid. " . 
        "Sampai jumpa di lapangan!");

        // Pindah baris untuk ruang tanda tangan
        $pdf->Ln(20);

        // Tambah teks tanggal
        $pdf->Cell(0, 10, 'Yogyakarta, ' . date('d F Y'), 0, 1, 'R'); // Tanggal saat ini di pojok kanan
        
        // Tanpa jarak (langsung setelah tanggal)
        $pdf->Cell(0, 10, 'Tanda tangan peserta:', 0, 1, 'R'); // "Tanda tangan peserta" di pojok kanan 

        $pdf->Ln(30); // Ruang untuk tanda tangan (baris kosong)

        $pdf->Cell(0, 10, '(...............................)', 0, 1, 'R'); 

        // Output PDF
        $pdf->Output('I', 'hasil_pendaftaran.pdf');
        exit;
    } else {
        // Jika field tidak diisi dengan benar, kembali ke form
        echo "Harap mengisi semua field.";
    }
} else {
    echo "Tidak ada data yang dikirim.";
}
?>

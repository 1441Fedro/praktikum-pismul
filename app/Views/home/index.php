<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Praktikum Sismul</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<main>
    <header>
        <h1>Praktikum Sistem Operasi</h1>
        <nav>
            <ul>
                <li><a href="">Beranda</a></li>
                <li><a href="<?= base_url('modul') ?>">Modul</a></li>
                <li><a href="<?= base_url('materi') ?>">Materi</a></li>
            </ul>
        </nav>
    </header>
    <marquee class="marquee">Selamat datang praktikum Sismul! Silakan isi biodata di bawah ini dengan lengkap.</marquee>
    <h1 class="animated-text">Formulir Biodata Pengunjung</h1>
    <div class="form-container">
        <form>
            <label for="nama"><em>Nama:</em></label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
            <label for="npm"><em>Nomor Induk Pelajar:</em></label>
            <input type="text" id="npm" name="npm" placeholder="Masukkan Nomor Induk Pelajar Anda" required>
            <label for="kelas"><strong>Kelas:</strong></label>
            <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas Anda" required>
            <label for="praktikum"><strong>Asal Sekolah:</strong></label>
            <input type="text" id="praktikum" name="praktikum" placeholder="Masukkan Sekolah Asal Anda" required>
            <button type="submit"><strong>SUBMIT</strong></button>
        </form>
    </div>
    <footer>
        <p>&copy; 2025 Praktikum Sistem Operasi (dibuat oleh Fedro MJ)</p>
    </footer>
</main>
</body>
</html>
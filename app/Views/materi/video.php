<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Materi Video - Hewan Laut</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
        <style>
            .video-gallery {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
                padding: 20px;
            }
            .video-card {
                background: white;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                padding: 10px;
                text-align: center;
            }
            .video-card h3 {
                margin-bottom: 10px;
            }
            .video-card video {
                width: 100%;
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Website Jenis-Jenis Hewan</h1>
            <nav>
                <ul>
                    <li><a href="<?= base_url() ?>">Beranda</a></li>
                    <li><a href="<?= base_url('modul') ?>">Modul</a></li>
                    <li><a href="<?= base_url('materi') ?>">Materi</a></li>
                </ul>
            </nav>
        </header>

        <div class="marquee">
            <marquee>Selamat datang di website jenis-jenis hewan! Temukan informasi menarik di sini.</marquee>
        </div>

        <div class="form-container">
            <h2>Video Dokumentasi Kehidupan Hewan Laut</h2>
            <div class="video-gallery">
                <div class="video-card">
                    <h3>Hewan Laut 1</h3>
                    <video controls>
                        <source src="<?= base_url('assets/videos/hewan laut 1.mp4') ?>" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
                <div class="video-card">
                    <h3>Hewan Laut 2</h3>
                    <video controls>
                        <source src="<?= base_url('assets/videos/hewan laut 2.mp4') ?>" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
                <div class="video-card">
                    <h3>Hewan Laut 3</h3>
                    <video controls>
                        <source src="<?= base_url('assets/videos/hewan laut 3.mp4') ?>" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; 2025 Praktikum Sistem Operasi (dibuat oleh Fedro MJ)</p>
        </footer>

    </body>
</html>

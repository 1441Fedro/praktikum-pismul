<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Galeri Hewan dengan Suara</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        body { flex: 1; }
        main { flex: 1; }
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            padding: 30px;
            max-width: 1200px;
            margin: auto;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
            padding-bottom: 15px;
        }
        .card:hover { transform: scale(1.05); }
        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card p {
            margin: 10px;
            font-weight: bold;
            color: #333;
        }
        .carousel-wrapper {
            position: relative;
            max-width: 90%;
            margin: 30px auto;
            overflow: hidden;
        }
        .carousel {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px;
        }
        .carousel-item {
            min-width: 250px;
            flex: none;
            text-align: center;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding-bottom: 15px;
        }
        .carousel-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: darkblue;
            color: white;
            border: none;
            font-size: 24px;
            border-radius: 50%;
            cursor: pointer;
            opacity: 0.8;
            z-index: 10;
        }
        .carousel-btn:hover { background: crimson; }
        .carousel-btn.prev { left: -60px; }
        .carousel-btn.next { right: -60px; }
        audio {
            margin-top: 10px;
            width: 90%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Modul Gambar dan Suara Hewan</h1>
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

    <audio id="background-music" src="<?= base_url('assets/audio/background.mp3') ?>" autoplay muted loop></audio>
    <main>
        <h2 style="text-align: center;">Burung</h2>
        <div class="carousel-wrapper">
            <button class="carousel-btn prev" onclick="scrollCarousel(-1)">&#10094;</button>
            <div class="carousel" id="carouselBurung">
                <?php
                    $burung = ['burung_hantu', 'burung_kakaktua', 'burung_pelikan', 'burung_unta',
                    'burung_angsa', 'burung_elang', 'burung_flamingo', 'burung_penguin', 'burung_merak'];
                    foreach ($burung as $b):
                ?>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/img/' . $b . '.jpg') ?>" alt="<?= $b ?>">
                    <p><?= ucwords(str_replace('_', ' ', $b)) ?></p>
                    <audio controls src="<?= base_url('assets/audio/' . $b . '.mp3') ?>"></audio>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-btn next" onclick="scrollCarousel(1)">&#10095;</button>
        </div>

        <!-- Bagian Hewan Lain -->
        <h2 style="text-align: center;">Hewan Lainnya</h2>
        <div class="gallery-container">
            <?php
            $hewan = ['anjing', 'gajah', 'harimau', 'jerapah', 'kapibara', 'kucing', 'panda'];
            foreach ($hewan as $nama):
            ?>
            <div class="card">
                <img src="<?= base_url('assets/img/' . $nama . '.jpg') ?>" alt="<?= $nama ?>">
                <p><?= ucwords($nama) ?></p>
                <audio controls src="<?= base_url('assets/audio/' . $nama . '.mp3') ?>"></audio>
            </div>
            <?php endforeach; ?>
        </div>

    </main>

    <footer>
        <p>&copy; 2025 Praktikum Sistem Operasi (dibuat oleh Fedro MJ)</p>
    </footer>

    <script>
        function scrollCarousel(direction) {
            const container = document.getElementById("carouselBurung");
            const scrollAmount = 250;
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }
        document.addEventListener('click', function () {
            var bgMusic = document.getElementById('background-music');
            if (bgMusic.muted) {
                bgMusic.muted = false;
                bgMusic.play();
            }
        }, { once: true });
        function unmuteBackground() {
            var bgMusic = document.getElementById('background-music');
            bgMusic.muted = false;
            bgMusic.play();
        }
    </script>
</body>
</html>
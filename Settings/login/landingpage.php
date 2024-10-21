<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn4code&KodeKita - Belajar Coding Menyenangkan!</title>
    <style>
        :root {
            --primary-color: #58cc02;
            --secondary-color: #fff;
            --text-color: #3c3c3c;
            --accent-color: #ffc800;
        }
        
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Nunito', sans-serif;
            color: var(--text-color);
            background-color: #f7f7f7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            padding: 20px 0;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        
        .nav-links a {
            color: var(--secondary-color);
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }
        
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 0;
        }
        
        .hero-text {
            flex: 1;
        }
        
        .hero-text h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero-text p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        
        .cta-button {
            background-color: var(--accent-color);
            color: var(--text-color);
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #e6b800;
        }
        
        .hero-image {
            flex: 1;
            text-align: right;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
        }
        
        .features {
            display: flex;
            justify-content: space-between;
            margin: 50px 0;
        }
        
        .feature {
            flex: 1;
            text-align: center;
            padding: 20px;
            background-color: var(--secondary-color);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin: 0 10px;
        }
        
        .feature img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }
        
        .feature h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .testimonials {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            padding: 50px 0;
            text-align: center;
        }
        
        .testimonial {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .testimonial p {
            font-size: 18px;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        main {
            flex: 1;
        }
        
        footer {
            background-color: var(--text-color);
            color: var(--secondary-color);
            text-align: center;
            padding: 20px 0;
        }
        
        .sticky-footer {
            position: sticky;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            z-index: 1000;
        }
        
        .language-list {
            display: flex;
            justify-content: space-around;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .language-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 14px;
            color: var(--text-color);
        }
        
        .language-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Learn4code&KodeKita</div>
                <div class="nav-links">
                    <a href="#features">Fitur</a>
                    <a href="#testimonials">Testimoni</a>
                    <a href="#">Masuk</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-text">
                    <h1>Belajar Coding Jadi Menyenangkan!</h1>
                    <p>Mulai perjalanan coding Anda dengan Learn4code&KodeKita. Belajar sambil bermain, raih pencapaian, dan bangun karir impian Anda di dunia teknologi.</p>
                    <a href="#" class="cta-button">Mulai Belajar Gratis</a>
                </div>
                <div class="hero-image">
                    <img src="/api/placeholder/400/300" alt="Ilustrasi belajar coding">
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <div class="feature">
                    <img src="/api/placeholder/80/80" alt="Icon Gamifikasi">
                    <h3>Belajar Sambil Bermain</h3>
                    <p>Nikmati pembelajaran yang menyenangkan dengan sistem gamifikasi kami.</p>
                </div>
                <div class="feature">
                    <img src="/api/placeholder/80/80" alt="Icon Pencapaian">
                    <h3>Raih Pencapaian</h3>
                    <p>Dapatkan lencana dan sertifikat setiap kali Anda menyelesaikan kursus.</p>
                </div>
                <div class="feature">
                    <img src="/api/placeholder/80/80" alt="Icon Komunitas">
                    <h3>Bergabung dengan Komunitas</h3>
                    <p>Terhubung dengan ribuan pelajar coding lainnya dari seluruh Indonesia.</p>
                </div>
            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="testimonial">
                    <p>"Learn4code&KodeKita mengubah hidup saya! Sekarang saya bekerja sebagai developer di perusahaan impian saya."</p>
                    <p><strong>- Budi Santoso, Web Developer</strong></p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Learn4code&KodeKita. Semua hak dilindungi.</p>
        </div>
    </footer>

    <div class="sticky-footer">
        <div class="language-list">
            <div class="language-item">
                <img src="Java-PNG-Picture.png.crdownload" alt="Java" class="language-icon">
                <span>Java</span>
            </div>
            <div class="language-item">
                <img src="JavaScript-Logo-2048x1280.png" alt="JavaScript" class="language-icon">
                <span>JavaScript</span>
            </div>
            <div class="language-item">
                <img src="Logo-Python.png" alt="Python" class="language-icon">
                <span>Python</span>
            </div>
            <div class="language-item">
                <img src="C-Logo.wine_.png" alt="C++" class="language-icon">
                <span>C++</span>
            </div>
            <div class="language-item">
                <img src="png-transparent-c-sharp-c-net-object-oriented-programming-language-microsoft-3d-icon.png" alt="C#" class="language-icon">
                <span>C#</span>
            </div>
            <div class="language-item">
                <img src="th.jpeg" alt="Kotlin" class="language-icon">
                <span>Kotlin</span>
            </div>
        </div>
    </div>
</body>
</html>

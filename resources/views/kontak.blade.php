<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasty Food')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

header nav ul {
    list-style-type: none;
    padding: 0;
}

header nav ul li {
    display: inline;
    margin: 0 1rem;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

.container {
    margin: 2rem;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
    position: absolute;
    bottom: 0;
    width: 100%;
}

.footer-content {
    display: flex;
    justify-content: space-between;
}

.footer-section {
    margin: 1rem;
}

.footer-section ul {
    list-style-type: none;
    padding: 0;
}

.footer-section ul li {
    margin: 0.5rem 0;
}

.contact-info {
    margin: 2rem 0;
}

.contact-info div {
    margin: 0.5rem 0;
}

    </style>
</head>
<body>
    <header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('tentang') }}">Tentang</a></li>
            <li><a href="{{ route('menu') }}">Menu</a></li>
            <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
            <li><a href="{{ route('kontak') }}">Kontak</a></li>
        </ul>
    </nav>
</header>
<h1>Kontak Kami</h1>
    <form>
        <div>
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <button type="submit">Kirim</button>
    </form>
    <div class="contact-info">
        <div>Email: tastyfood@gmail.com</div>
        <div>Phone: +62 812 3456 7890</div>
        <div>Location: Kota Bandung, Jawa Barat</div>
    </div>
    <div class="map">
        <!-- Embed Google Maps here -->
    </div>
<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h1>Tasty Food</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="footer-section links">
            <h2>Useful links</h2>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Hewan</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Testimonial</a></li>
            </ul>
        </div>
        <div class="footer-section contact-info">
            <h2>Contact Info</h2>
            <ul>
                <li>Email: tastyfood@gmail.com</li>
                <li>Phone: +62 812 3456 7890</li>
                <li>Location: Kota Bandung, Jawa Barat</li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>

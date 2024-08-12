<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* General Styling */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f2f2f2;
  color: #333;
  line-height: 1.6;
}

/* Navbar */
.navbar {
            color: #fff;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        .navbar-brand {
            color : black;
            font-size: 15px;
            font-weight: bold;
            align-items: center;
        }
        .nav-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links a {
            color: black;
            text-decoration: none;
        }
        .nav-links a:hover {
            color: #ccc;
        }
        .btn {
            color: #fff;
            padding: 0.5em 1em;
            border: none;
            border-radius: 0.5em;
            cursor: pointer;
        }
        .btn:hover {
            background-color: white;
        }
/* Jumbotron */
.jumbotron {
  background-color: #fff;
  padding: 4rem 0;
  margin-bottom: 4rem;
}

.jumbotron h1 {
  font-size: 3rem;
  font-weight: bold;
  color: #333;
}

.jumbotron p {
  font-size: 1.2rem;
  color: #555;
}

.jumbotron .btn {
  padding: 1rem 2rem;
  font-size: 1.1rem;
}

/* Features */
.features {
  padding: 4rem 0;
  background-color: #fff;
}

.features .card {
  border: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 2rem;
}

.features .card-img-top {
  height: 200px;
  object-fit: cover;
}

/* About */
.about {
  padding: 4rem 0;
  background-color: #f2f2f2;
}

.about h2 {
  color: #333;
  font-size: 2.5rem;
  margin-bottom: 2rem;
}

.about p {
  color: #555;
  font-size: 1.1rem;
}

/* Contact */
.contact {
  padding: 4rem 0;
  background-color: #fff;
}

.contact h2 {
  color: #333;
  font-size: 2.5rem;
  margin-bottom: 2rem;
}

.contact .card {
  border: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 2rem;
}

.contact .card-body {
  padding: 2rem;
}

.contact .card-title {
  color: #333;
  font-weight: bold;
  margin-bottom: 1rem;
}

.contact .card-text {
  color: #555;
  font-size: 1rem;
}

/* Footer */
footer {
  background-color: #f9f9f9;
  padding: 20px 0;
  color: #666;
}

footer .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

footer .row {
  display: flex;
  justify-content: space-between;
}

footer .col-md-4 {
  flex-grow: 2;
  flex-basis: 33.33%;
  margin: 10px;
}

footer h5 {
  font-weight: bold;
  margin-top: 0;
}

footer ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

footer li {
  margin-bottom: 10px;
}

footer a {
  color: #337ab7;
  text-decoration: none;
}

footer a:hover {
  color: #23527c;
}

footer p {
  margin-bottom: 20px;
}

footer .copyright {
  font-size: 14px;
  color: #999;
  text-align: center;
}

/* Responsive Styling */
@media (max-width: 768px) {
  .jumbotron h1 {
    font-size: 2.5rem;
  }

  .jumbotron p {
    font-size: 1rem;
  }

  .features .card-img-top {
    height: 150px;
  }
}

@media (max-width: 576px) {
  .jumbotron h1 {
    font-size: 2rem;
  }

  .features .card-img-top {
    height: 100px;
  }
}

    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">My UMKM</div>
        <ul class="nav-links">
            <a href="{{ route('home') }}" class="btn">Home</a>
            <a href="{{ route('menu') }}" class="btn">Menu </a>
            <a href="{{ route('testimoni') }}"class="btn">Testimoni</a>
            <a href="{{ route('tentang') }}" class="btn">Tentang </a> 
            <a href="{{ route('kontak') }}"class="btn">Kontak</a>
        </ul>
    </nav>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4">Our Signature</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/food1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Feature 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/food2.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Feature 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('images/food3.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Feature 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2 class="text-center">Menu Kami</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2 class="text-center">Testimoni</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Phone</h5>
                            <p class="card-text">+62 812 3456 7890</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">tastyfood@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
  <div class="container">
    <div class="row">
    <div class="col-md-4">
        <h5>About Our Company</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </p>
      </div>
      <div class="col-md-4">
        <h5>Useful Links</h5>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <p>
          Address: Jalan Sudirman No. 123, Jakarta 10220<br>
          Phone: +62 21 1234 5678<br>
          Email: <a href="mailto:info@example.com">info@example.com</a>
        </p>
      </div>
  </div>
  <div class="col-md-12">
        <p>&copy; 2023 Example Company. All rights reserved.</p>
      </div>
</footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Tasty Food </title>

  <style>
    /* General Styles */
body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 700;
  margin-bottom: 1rem;
}

p {
  margin-bottom: 1rem;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.col-md-6 {
  flex: 0 0 50%;
  max-width: 50%;
  padding-right: 15px;
  padding-left: 15px;
}

/* Hero Area */
.hero_area {
  position: relative;
  background-color: #000;
  padding: 100px 0;
}

.bg-box {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1;
}

.bg-box img {
  width: 100%;
  height: auto;
  display: block;
}

.header_section {
  position: relative;
  z-index: 1;
}

.custom_nav-container {
  background: transparent;
  padding: 0;
}

.navbar-brand {
  font-size: 24px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  margin-right: auto;
}

.navbar-nav {
  display: flex;
  align-items: center;
}

.nav-item {
  margin-right: 30px;
}

.nav-link {
  font-size: 16px;
  color: #fff;
  text-transform: uppercase;
}

.nav-link.active {
  font-weight: bold;
}

.user_option {
  display: flex;
  align-items: center;
}

.user_link {
  margin-right: 30px;
  color: #fff;
  font-size: 20px;
}

.user_link:hover {
  color: #007bff;
}

.nav_search-btn {
  background: transparent;
  border: none;
  color: #fff;
  font-size: 20px;
}

/* Book Section */
.book_section {
  padding: 100px 0;
}

.heading_container {
  text-align: center;
  margin-bottom: 50px;
}

.heading_container h2 {
  font-size: 36px;
  color: #333;
}

.form_container {
  padding: 30px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-control {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
}

.btn_box {
  text-align: center;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

.map_container {
  height: 400px;
}

/* Footer Section */
.footer_section {
  background-color: #000;
  padding: 50px 0;
  color: #fff;
}

.footer-col {
  padding: 0 15px;
}

.footer_contact h4 {
  font-size: 20px;
  margin-bottom: 20px;
}

.contact_link_box a {
  display: block;
  margin-bottom: 10px;
  color: #fff;
}

.contact_link_box a i {
  margin-right: 10px;
}

.footer_detail {
  text-align: center;
}

.footer-logo {
  font-size: 24px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.footer_social a {
  display: inline-block;
  margin: 0 5px;
  color: #fff;
  font-size: 20px;
}

.footer_social a:hover {
  color: #007bff;
}

.footer-info {
  text-align: center;
  margin-top: 30px;
  font-size: 14px;
}

/* Media Queries */
@media (max-width: 768px) {
  .col-md-6 {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

/* Owl Carousel Styles */
.owl-carousel .owl-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 10px;
  right: 10px;
  display: flex;
  justify-content: space-between;
}

.owl-carousel .owl-nav button {
  background: transparent;
  border: none;
  color: #fff;
  font-size: 24px;
  cursor: pointer;
}

.owl-carousel .owl-nav button:hover {
  color: #007bff;
}

/* Nice Select Styles */
.nice-select {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
  background: #fff;
}

.nice-select .list {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.nice-select .list .option {
  padding: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.nice-select .list .option:hover {
  background-color: #f2f2f2;
}

.nice-select .list .option.selected {
  background-color: #e9ecef;
}

.nice-select .list .option .icon {
  display: none;
}

/* Google Map Styles */
#googleMap {
  height: 400px;
  border: 1px solid #ddd;
  border-radius: 5px;
}
</style>

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
        <img src="{{ url('/assets/images/hero-bg.jpg') }}" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Tasty Food
            </span>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">Tentang</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="book">Kontak <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Kontak Kami
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="tektarea" class="form-control" placeholder="komentar" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +62 81234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  tastyfood@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Tasty Food
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
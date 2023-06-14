<?php
//  database connection
$conn = new mysqli('localhost','root','','testing');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}


  //$sql = "insert into registeration(name, email, subject, message) values('$name', '$email', '$subject', '$message')";
  
// data input
if (isset($_POST["send"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$sql = "INSERT INTO registeration (name, email, mobile, subject, message) VALUES ('$name',  '$email', '$mobile', '$subject', '$message')";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo "<script>alert('Your message is successfully sended.');</script>";
} else {
  echo "<script>alert('Please try again!!!');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DesignerBros - Designers</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
</php  include'index.php' ?>

  <!-- Favicons -->
  <link href="assets/img/logo-2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo-2.png" alt="">
        <span>DesignerBros</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Our Works</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <li><a class="getstarted scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Creating Content that captures attention</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We help brands to grow an internet and enrich their values to people's🎯</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Our Clients</h2>
      </header>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->
   

    <!-- ======= Values Section ======= -->
    <section id="services" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Here's what we offer</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/services/values-1.png" class="img-fluid" alt="">
              <h3>Content Creation</h3>
              <p>We provide support and statergies during the development of content that can include blog articles, social media posts, newsletters, and website content.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/services/values-4.png" class="img-fluid" alt="">
              <h3>SEO - Target Particular Audience</h3>
              <p>SEO is a marketing notion that includes a whole set of aspects, solutions, and technical elements aimed to attract more site traffic and promote a website</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/services/values-3.png" class="img-fluid" alt="">
              <h3>360° - Social Media Management</h3>
              <p>We responsible for developing strategies to increase followers, creating and overseeing social campaigns, producing content, reviewing analytics, and communicating with key stakeholders in a company.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="3" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="3" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="3" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="3" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Commercial</li>
              <li data-filter=".filter-card">Meeting</li>
              <li data-filter=".filter-web">Thumbnail</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-11.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Awesome Burgers</h4>
                <p>Comm</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-11.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-16.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Match Poster</h4>
                <p>Thumb</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-16.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-13.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Awesome Cafeplace</h4>
                <p>Comm</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-13.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-14.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Zoom Meeting</h4>
                <p>Meet</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-14.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-15.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Fruit Juice</h4>
                <p>Thumb</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-15.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-12.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>RedBull</h4>
                <p>Comm</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-12.png" data-gallery="portfolioGallery" class="portfokio-lightbox" ><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-17.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Zoom Meeting</h4>
                <p>Meet</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-17.png" data-gallery="portfolioGallery" class="portfokio-lightbox" ><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-18.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Guitar Concert</h4>
                <p>Meet</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-18.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-19.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Fan Meet</h4>
                <p>Meet</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-19.png" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

     <!-- ======= About Section ======= -->
     <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <header class="section-header">
                <h2>About Us</h2>
              </header>
              <h3>Who We Are</h3>
              <h2>We are a group of people's who making our creativity into visuals</h2>
              <p>
                we'll help your brand to attain the reach in market. Making content is more important than creating an attractive Thumbnail
                we have specailized team who love and passionate with Graphic Designs. 
                <!-- To Engage the content editing is more important
                we have and professional editors they work for tons of brands. -->
              </p>
              <div class="text-center text-lg-start">
                <a href="#team" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Founders</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <!-- <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-5.png" class="img-fluid" alt="">
                <div class="social">
                  <a target=”_blank” href="https://www.youtube.com/channel/UCyZ6qRztrnpCOnO37pYkFrg"><i class="bi bi-youtube"></i></a>
                  <a target=”_blank” href="https://www.instagram.com/the_.hari/"><i class="bi bi-instagram"></i></a>
                  <a target=”_blank”href="https://www.linkedin.com/in/hari-balan-876601210/"><i class="bi bi-linkedin"></i></a>
                  <a href=""><i class="bi bi-twitter"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Haribalan Sivakumar</h4>
                <span>Co - Founder</span>
                <p>As a content creator on social platforms, I produce videos on self-improvement, lifestyle, and more. I'm pretty good at editing and graphic design.
                  At the moment, I am a 3rd-year student in a Bachelor of Engineering in CSE.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-6.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.youtube.com/channel/UCToPK1Hg_tyEP3FKkqFJxxg"><i class="bi bi-youtube"></i></a>
                  <a href="https://www.instagram.com/codewithsekar/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/sekar-n-b551b82"><i class="bi bi-linkedin"></i></a>
                  <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4>Sekar Nagarajan</h4>
                <span>Co - Founder</span>
                <p>Content creator on social platforms, I create videos based on programming(Frontend: HTML, CSS || Backend: Java, Python, and Php. I'm a final year B.E CSE Student and good at Graphic Designing.)</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <!-- <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div> -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <div style="font-size: 15px;">
                  <a href = "mailto: contact@designerbros.in">contact@designerbros.in</a>
                  <a href = "mailto: srs.haribalan2003@gmail.com">srs.haribalan2003@gmail.com</a>
                  <a href = "mailto: sekarjohn1234@gmail.com">sekarjohn1234@gmail.com</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="tel" class="form-control" name="mobile" placeholder="Mobile No"  required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-sm">
                  <input type="submit" name="send" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

   <!--  <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Get in Touch</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <div class="col-md-12 text-center">
            <button type="submit">Send Message</button>
            </div> 
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> 
          </div> -->
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo-2.png" alt="">
              <span>DesignerBros</span>
            </a>
            <p>Happy to Work with You</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

           <!-- <a target="_blank" href="localhost/LoginPro/login.php"><button>clickme</button></a>  -->
         
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>DesignerBros</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
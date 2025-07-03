<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>KidsOorja</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css" />
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css" />
    <link rel="stylesheet" href="assets/css/animated.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="assets/css/quotes.css" /> -->
    <link rel="stylesheet" href="assets/css/contact.css" />
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header
      class="header-area header-sticky wow slideInDown"
      data-wow-duration="0.75s"
      data-wow-delay="0s"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="" height="85" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="index.html">Home</a>
                </li>
                <li class="scroll-to-section">
                  <a href="about.html">About</a>
                </li>
                <li class="scroll-to-section">
                  <a href="quotes.html">Founder's Desk</a>
                </li>
                <li class="scroll-to-section">
                  <a href="programs.html">Programs Offered</a>
                </li>
                <li class="scroll-to-section">
                  <a href="gallery.html">Gallery</a>
                </li>
                <li class="scroll-to-section">
                  <a href="whyus.html">Why Us?</a>
                </li>
                <!-- <li class="scroll-to-section">
                  <a href="#portfolio">Projects</a>
                </li> -->
                <!-- <li class="scroll-to-section"><a href="#blog">Blog</a></li> -->
                <li class="scroll-to-section">
                  <a href="contact.php" class="active">Contact</a>
                </li>
                <li class="scroll-to-section">
                  <!-- <div class="border-first-button">
                    <a href="#contact">Free Quote</a>
                  </div> -->
                </li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- <header class="page-header" style="margin-top: 6%">
      <h1>Contact Us</h1>
    </header> -->
    <div style="margin-top: 6%"></div>

    <section class="contact-us-section">
      <h1 class="contact-main-heading">Contact Us</h1>

      <div class="contact-content-wrapper">
        <!-- Left Partition: Contact Form -->
        <div class="contact-form-container">
          <form
            action="submit-contact.php"
            method="POST"
            class="contact-form"
          >
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Your Full Name"
                required
              />
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea
                id="address"
                name="address"
                rows="3"
                placeholder="Your Address"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="Your Phone Number"
                required
              />
            </div>
            <div class="form-group">
              <label for="kid-age">Kid's Age</label>
              <input
                type="number"
                id="kid-age"
                name="kid_age"
                min="0"
                max="18"
                placeholder="e.g., 4"
                required
              />
            </div>
            <button type="submit" class="submit-button">Send Message</button>
            <div id="formMessage" class="form-message">
                        <?php
                            // Display messages from PHP redirection (if any)
                            if (isset($_GET['status'])) {
                                if ($_GET['status'] == 'success') {
                                    echo '<p style="color: green;">Your message has been sent successfully!</p>';
                                } elseif ($_GET['status'] == 'error') {
                                    echo '<p style="color: red;">Error sending message. Please try again.</p>';
                                }
                            }
                        ?>
                    </div>
          </form>
        </div>

        <!-- Right Partition: Google Map Location -->
        <div class="contact-map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4700.101418837171!2d73.79877767603648!3d18.49591048259279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf6c26b73ab7%3A0x200e9a3880856254!2sKids%20Oorja%20Pre-scool%20and%20Wings%20Childcare%20%26%20Activity%20Centre!5e1!3m2!1sen!2sin!4v1751342083378!5m2!1sen!2sin"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      <!-- Separate Section: Additional Contact Details -->
      <div class="contact-details-section">
        <h3 class="details-heading">Contact For More Details</h3>
        <p><strong>Arti Deshpande</strong></p>
        <p>99221 73680</p>
        <p><strong>Vaishali Naik</strong></p>
        <p>80870 97097</p>
        <p class="school-name">KIDS OORJA PRESCHOOL</p>
        <p>6/2 HERAMB BUNGALOW, SAHAJANAND SOC,</p>
        <p>KOTHRUD</p>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-container">
        <!-- Logo Section -->
        <div class="footer-logo-section">
          <a href="#">
            <!-- Replace with your actual logo image or SVG -->
            <img
              src="assets/images/logo1.png"
              alt="Company Logo"
              style="height: 85px; width: auto; margin-left: 50px"
            />
          </a>
          <!-- <p>
            Your company's mission statement or a brief description goes here.
            Providing quality services with a focus on innovation and customer
            satisfaction.
          </p> -->
        </div>

        <!-- Quick Links Section -->
        <div class="text-center">
          <h3 class="footer-section-title">Quick Links</h3>
          <ul class="footer-links-list">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="quotes.html">Founder's Desk</a></li>
            <li><a href="programs.html">Programs Offered</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="whyus.html">Why Us?</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>

        <!-- Contact Us Section -->
        <div class="text-center">
          <h3 class="footer-section-title">Contact Us</h3>
          <ul class="footer-contact-list">
            <li>
              <a href="mailto:contact@kidsoorja.com">
                <svg
                  class="footer-svg-icon"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-9 13h9a2 2 0 002-2V7a2 2 0 00-2-2H3a2 2 0 00-2 2v10a2 2 0 002 2z"
                  ></path>
                </svg>
                contact@kidsoorja.com
              </a>
            </li>
            <li>
              <a href="tel:+919922173680">
                <svg
                  class="footer-svg-icon"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.135a11.249 11.249 0 005.137 5.137l1.135-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                  ></path>
                </svg>
                Arti Deshpande: +91 99221 73680
              </a>
            </li>
            <li>
              <a href="tel:+918087097097">
                <svg
                  class="footer-svg-icon"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.135a11.249 11.249 0 005.137 5.137l1.135-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                  ></path>
                </svg>
                Vaishali Naik: +91 80870 97097
              </a>
            </li>
            <li class="address-text">
              <svg
                class="footer-svg-icon"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                ></path>
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                ></path>
              </svg>
              6/2 HERAMB BUNGALOW, SAHAJANAND SOC, KOTHRUD, PUNE - 411038
            </li>
          </ul>
        </div>
      </div>

      <!-- Copyright Section -->
      <div class="footer-copyright">
        &copy; 2025 KidsOorja Pre School. All rights reserved.
      </div>
    </footer>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>

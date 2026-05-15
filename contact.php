<?php
$show_success = isset($_GET['success']);
$show_error   = isset($_GET['error']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact — Netro Cafe &amp; More</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    /* Nuclear fix — force all text inside info card to be visible */
    .contact-info-card,
    .contact-info-card * {
      box-sizing: border-box;
    }

    .contact-info-card {
      background: #1a0e0a !important;
      border-radius: 20px;
      padding: 40px;
      color: #ffffff !important;
    }

    .contact-info-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      color: #ffffff !important;
      margin-bottom: 10px;
    }

    .contact-info-card h3 em {
      color: #c87941 !important;
      font-style: italic;
    }

    .contact-info-card p {
      color: rgba(255, 255, 255, 0.7) !important;
    }

    .ci-item {
      display: flex;
      gap: 16px;
      align-items: flex-start;
      margin-bottom: 26px;
    }

    .ci-icon {
      width: 46px;
      height: 46px;
      min-width: 46px;
      background: rgba(200, 121, 65, 0.2);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .ci-icon i {
      color: #c87941 !important;
      font-size: 1.1rem;
    }

    .ci-text {
      display: flex;
      flex-direction: column;
      gap: 3px;
    }

    .ci-text h4 {
      color: #ffffff !important;
      font-size: .9rem;
      font-weight: 600;
      margin: 0 0 3px 0;
      line-height: 1.3;
      font-family: 'Jost', sans-serif;
    }

    .ci-text p {
      color: rgba(255, 255, 255, 0.65) !important;
      font-size: .85rem;
      line-height: 1.6;
      margin: 0;
    }

    .info-social {
      display: flex;
      gap: 10px;
      margin-top: 28px;
    }

    .info-social a {
      width: 38px;
      height: 38px;
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgba(255, 255, 255, 0.6);
      font-size: .9rem;
      text-decoration: none;
      transition: .3s;
    }

    .info-social a:hover {
      background: #c87941;
      border-color: #c87941;
      color: #fff;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar scrolled" id="navbar">
    <div class="nav-container">
      <a href="index.html" class="nav-logo">
        <img src="images/logo.png" alt="Netro Cafe Logo" class="logo-img" />
        <span class="logo-text">NETRO <span>CAFE</span></span>
      </a>
      <ul class="nav-links" id="navLinks">
        <li><a href="index.html">Home</a></li>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="reservation.php">Reserve a Table</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
        <!-- <li><a href="login.php" class="nav-btn">Sign In</a></li> -->
      </ul>
      <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
    </div>
    <div class="nav-overlay" id="navOverlay"></div>
  </nav>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="section-tag light">Get in Touch</p>
      <h1>Contact <em>Us</em></h1>
      <p>We'd love to hear from you. Reach out anytime.</p>
    </div>
  </div>

  <!-- MAIN SECTION -->
  <section>
    <div class="container contact-grid">

      <!-- ===== LEFT — INFO CARD ===== -->
      <div class="contact-info-card">

        <h3>Let's <em>Connect</em></h3>
        <p style="color:rgba(255,255,255,0.65)!important;font-size:.9rem;margin-bottom:32px;line-height:1.75;">
          Have a question, feedback, or want to partner with us? We're just a message away.
        </p>

        <!-- Location -->
        <div class="ci-item">
          <div class="ci-icon"><i class="fa-solid fa-location-dot"></i></div>
          <div class="ci-text">
            <h4>Our Location</h4>
            <p>Mit Ghamr, Egypt</p>
          </div>
        </div>

        <!-- Hours -->
        <div class="ci-item">
          <div class="ci-icon"><i class="fa-solid fa-clock"></i></div>
          <div class="ci-text">
            <h4>Opening Hours</h4>
            <p>Every Day — 9:00 AM to 1:00 AM</p>
          </div>
        </div>

        <!-- Facebook -->
        <div class="ci-item">
          <div class="ci-icon"><i class="fa-brands fa-facebook-f"></i></div>
          <div class="ci-text">
            <h4>Facebook</h4>
            <p>facebook.com/Netro.egy</p>
          </div>
        </div>

        <!-- Instagram -->
        <div class="ci-item">
          <div class="ci-icon"><i class="fa-brands fa-instagram"></i></div>
          <div class="ci-text">
            <h4>Instagram</h4>
            <p>@Netro.egy</p>
          </div>
        </div>

        <!-- Social icons -->
        <div class="info-social">
          <a href="https://facebook.com/Netro.egy" target="_blank" aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a href="https://instagram.com/Netro.egy" target="_blank" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>

      </div><!-- /contact-info-card -->

      <!-- ===== RIGHT — FORM ===== -->
      <div class="contact-form-wrap">
        <h3>Send Us a Message</h3>

        <?php if ($show_success): ?>
          <div class="flash-msg flash-success" style="display:flex;align-items:center;gap:10px;margin-bottom:22px;">
            <i class="fa-solid fa-circle-check" style="font-size:1.1rem;flex-shrink:0;"></i>
            Thank you! Your message has been sent successfully.
          </div>
        <?php elseif ($show_error): ?>
          <div class="flash-msg flash-error" style="display:flex;align-items:center;gap:10px;margin-bottom:22px;">
            <i class="fa-solid fa-triangle-exclamation" style="font-size:1.1rem;flex-shrink:0;"></i>
            Something went wrong. Please try again.
          </div>
        <?php endif; ?>

        <form id="contactForm" action="php/contact.php" method="POST">
          <div class="form-row">
            <div class="form-group">
              <label>First Name *</label>
              <input type="text" name="first_name" placeholder="Ahmed" required />
            </div>
            <div class="form-group">
              <label>Last Name *</label>
              <input type="text" name="last_name" placeholder="Hassan" required />
            </div>
          </div>
          <div class="form-group">
            <label>Email Address *</label>
            <input type="email" name="email" placeholder="ahmed@example.com" required />
          </div>
          <div class="form-group">
            <label>Subject *</label>
            <select name="subject" required>
              <option value="">Select a subject</option>
              <option>General Inquiry</option>
              <option>Reservation Help</option>
              <option>Menu Question</option>
              <option>Feedback</option>
              <option>Partnership / Collaboration</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label>Message *</label>
            <textarea name="message" placeholder="Write your message here..." required style="min-height:140px;"></textarea>
          </div>
          <button type="submit" class="btn-primary form-submit">
            <i class="fa-solid fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-brand">
        <img src="images/logo.png" alt="Netro" class="footer-logo" />
        <p>Netro Cafe &amp; More — specialty coffee, chimney cakes, and unforgettable flavors.</p>
        <div class="social-links">
          <a href="https://facebook.com/Netro.egy" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://instagram.com/Netro.egy" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="reservation.php">Reservations</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Menu</h4>
        <ul>
          <li><a href="menu.html#hot-coffee">Hot Coffee</a></li>
          <li><a href="menu.html#iced-coffee">Iced Coffee</a></li>
          <li><a href="menu.html#chimney">Sweet Chimney</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Visit Us</h4>
        <ul class="contact-list">
          <li><i class="fa-solid fa-location-dot"></i> Mit Ghamr, Egypt</li>
          <li><i class="fa-solid fa-clock"></i> Daily: 9AM – 1AM</li>
          <li><i class="fa-brands fa-instagram"></i> Netro.egy</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 Netro Cafe &amp; More. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>

</html>
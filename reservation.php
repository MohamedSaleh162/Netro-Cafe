<?php
$show_success = isset($_GET['success']);
$show_error   = isset($_GET['error']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reserve a Table — Netro Cafe</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>

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
        <li><a href="reservation.php" class="active">Reserve a Table</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
    </div>
    <div class="nav-overlay" id="navOverlay"></div>
  </nav>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-content">
      <p class="section-tag light">Book Your Spot</p>
      <h1>Reserve a <em>Table</em></h1>
      <p>Secure your seat and enjoy a perfect experience at Netro.</p>
    </div>
  </div>

  <!-- FLASH MESSAGES — only rendered when PHP sets the flag -->
  <?php if ($show_success): ?>
    <div class="container" style="padding-top:24px;">
      <div class="flash-msg flash-success" style="display:flex;align-items:center;gap:10px;">
        <i class="fa-solid fa-circle-check" style="font-size:1.1rem;"></i>
        Your reservation has been confirmed! We'll see you soon. 🎉
      </div>
    </div>
  <?php elseif ($show_error): ?>
    <div class="container" style="padding-top:24px;">
      <div class="flash-msg flash-error" style="display:flex;align-items:center;gap:10px;">
        <i class="fa-solid fa-triangle-exclamation" style="font-size:1.1rem;"></i>
        Something went wrong. Please try again or contact us directly.
      </div>
    </div>
  <?php endif; ?>

  <!-- MAIN CONTENT -->
  <section>
    <div class="container reservation-wrap">

      <!-- LEFT — INFO -->
      <div class="res-info">
        <p class="section-tag">Book Your Table</p>
        <h2>We're <em>Waiting</em> for You</h2>
        <p>Reserve your table in advance and enjoy a seamless, relaxed visit to Netro Cafe. We're happy to accommodate groups, special occasions, and everyday moments.</p>
      </div>

      <!-- RIGHT — FORM -->
      <div class="res-form reveal">
        <h3>Book Your Table</h3>
        <form id="reservationForm" action="php/reservation.php" method="POST">
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
            <label>Phone Number *</label>
            <input type="tel" name="phone" placeholder="+20 1XX XXXX XXX" required />
          </div>
          <div class="form-row">
            <div class="form-group">
              <label>Date *</label>
              <input type="date" name="date" required />
            </div>
            <div class="form-group">
              <label>Time *</label>
              <select name="time" required>
                <option value="">Select time</option>
                <option>09:00 AM</option>
                <option>10:00 AM</option>
                <option>11:00 AM</option>
                <option>12:00 PM</option>
                <option>01:00 PM</option>
                <option>02:00 PM</option>
                <option>03:00 PM</option>
                <option>04:00 PM</option>
                <option>05:00 PM</option>
                <option>06:00 PM</option>
                <option>07:00 PM</option>
                <option>08:00 PM</option>
                <option>09:00 PM</option>
                <option>10:00 PM</option>
                <option>11:00 PM</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Number of Guests *</label>
            <select name="guests" required>
              <option value="">Select guests</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10+</option>
            </select>
          </div>
          <div class="form-group">
            <label>Special Requests</label>
            <textarea name="notes" placeholder="Any special requests, dietary requirements, or occasion notes..."></textarea>
          </div>
          <button type="submit" class="btn-primary form-submit">
            <i class="fa-solid fa-calendar-check"></i> Confirm Reservation
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
          <li><a href="about.html">About Us</a></li>
          <li><a href="reservation.php">Reservations</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Hours</h4>
        <ul class="contact-list">
          <li><i class="fa-solid fa-clock"></i> Mon–Sun: 9AM – 1AM</li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Visit Us</h4>
        <ul class="contact-list">
          <li><i class="fa-solid fa-location-dot"></i> Mit Ghamr, Egypt</li>
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

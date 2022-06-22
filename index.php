<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->
    <?php wp_head() ?>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <title>Frontend Mentor | Sunnyside agency landing page</title>
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->

      <nav class="navbar">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="Logo" />
        <div class="menu">
          <img
            src="./images/icon-hamburger.svg"
            alt="Hamburger"
            class="mobile"
          />
          <div class="desktop desktop-menu">
            <p class="menu-item">About</p>
            <p class="menu-item">Services</p>
            <p class="menu-item">Products</p>
            <button class="contact-btn">CONTACT</button>
          </div>
        </div>
      </nav>

      <!-- Header -->

      <div class="header">
        <div class="header-text">
          <h1>We are creatives</h1>
          <img src="./images/icon-arrow-down.svg" alt="Arrow Down" />
        </div>
        <img
          src='<?php echo get_template_directory_uri() . "/assets/images/mobile/image-header.jpg" ?>'
          alt="Orange"
          class="responsive-image mobile"
        />
        <img
          src='<?php echo get_template_directory_uri() . "./assets/images/desktop/image-header.jpg" ?>'
          class="responsive-image desktop"
        />
      </div>

      <!-- Two column - mobile reversed -->

      <div class="two-column">
        <div class="text-column">
          <h2>Transform your brand</h2>
          <p>
            We are a full service creative agency specializing in helping brands
            grow fast. Engage your clients through compelling visuals that do
            most of the marketing for you.
          </p>
          <button>LEARN MORE</button>
        </div>
        <div class="image-column">
          <img
            src="./images/mobile/image-transform.jpg"
            alt="Egg"
            class="mobile"
          />
          <img
            src="./images/desktop/image-transform.jpg"
            alt="Egg"
            class="desktop"
          />
        </div>
      </div>

      <!-- Two column - mobile reversed -->

      <!-- Two column - mobile reversed -->

      <!-- Testimonials -->

      <!-- Four column - Mobile two column -->

      <!-- Footer -->
    </div>
  </body>
</html>

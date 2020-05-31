<header class="header trans_400">
  <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
    <div class="logo"><a href="#"><span>s</span>Host</a></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-2">
          <nav class="main_nav">
            <ul class="d-flex flex-row align-items-center justify-content-start">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About us</a></li>
              <li><a href="/services">Services</a></li>
              <li><a href="/blog">News</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="header_right d-flex flex-row align-items-center justify-content-start">

      <!-- Header Links -->
      <?php if (isset($_SESSION['logged'])) { ?>
        <div class="header_links">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li><a href="/private">Área Privada</a></li>
          </ul>
        </div>
      <?php } ?>

      <!-- Phone -->
      <div class="phone d-flex flex-row align-items-center justify-content-start">
        <div>
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <?php if (isset($_SESSION['logged'])) { ?>
              <a href="/logout" class="text-white">Logout</a>
            <?php } else { ?>
              <a href="/login" class="text-white">Login</a>
            <?php } ?>
          </ul>
        </div>
      </div>

      <!-- Hamburger -->
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
    </div>
  </div>
</header>

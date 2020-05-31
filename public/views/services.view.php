<?php
require_once 'public/views/partials/head.view.php';
require_once 'public/views/partials/header.view.php';
require_once 'public/views/partials/menu.view.php';
?>
<!-- Home -->
<div class="home">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="home_content">
          <div class="home_image"><img src="public/assets/images/services.png" alt=""></div>
          <div class="home_title">Services</div>
        </div>
      </div>
    </div>
  </div>
  <div class="domain_search_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="domain_search">
            <div class="domain_search_background"></div>
            <div class="domain_search_overlay"></div>
            <form action="#" class="domain_search_form" id="domain_search_form">
              <input type="text" class="domain_search_input" placeholder="Your domain name" required="required">
              <div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-center">
                <div class="domain_search_selected">.com</div>
                <ul>
                  <li>.com</li>
                  <li>.io</li>
                  <li>.net</li>
                </ul>
              </div>
              <button class="domain_search_button">search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Domain Pricing -->
<div class="domain_pricing">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="domain_pricing_content">
          <ul class="d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center">
            <li><a href="#"><span>.</span>com<span>$3.99</span></a></li>
            <li><a href="#"><span>.</span>net<span>$1.99</span></a></li>
            <li><a href="#"><span>.</span>org<span>$2.99</span></a></li>
            <li><a href="#"><span>.</span>io<span>$3.99</span></a></li>
            <li><a href="#"><span>.</span>info<span>$13.99</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services -->
<div class="services">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title text-center"><h2>Our Best Services</h2></div>
      </div>
    </div>
    <div class="row icon_boxes_row">

      <!-- Icon Box -->
      <div class="col-xl-4 col-md-6">
        <div class="icon_box">
          <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="ib_icon"><img src="public/assets/images/icon_8.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="ib_title">Cloud Hosting</div>
          </div>
          <div class="ib_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-md-6">
        <div class="icon_box">
          <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="ib_icon"><img src="public/assets/images/icon_9.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="ib_title">Cloud Hosting</div>
          </div>
          <div class="ib_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-md-6">
        <div class="icon_box">
          <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="ib_icon"><img src="public/assets/images/icon_10.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="ib_title">Cloud Hosting</div>
          </div>
          <div class="ib_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-md-6">
        <div class="icon_box">
          <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="ib_icon"><img src="public/assets/images/icon_11.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="ib_title">Cloud Hosting</div>
          </div>
          <div class="ib_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-md-6">
        <div class="icon_box">
          <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="ib_icon"><img src="public/assets/images/icon_12.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="ib_title">Cloud Hosting</div>
          </div>
          <div class="ib_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-md-6">
        <div class="icon_box">
          <div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="ib_icon"><img src="public/assets/images/icon_13.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="ib_title">Cloud Hosting</div>
          </div>
          <div class="ib_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col">
        <div class="button services_button ml-auto mr-auto"><a href="#">see all</a></div>
      </div>
    </div>
  </div>
</div>

<!-- Boxes -->
<div class="boxes">
  <div class="container">
    <div class="row">

      <!-- Boxes Image -->
      <div class="col-lg-6">
        <div class="boxes_image">
          <div class="background_image box_image" style="background-image:url(public/assets/images/box.jpg)"></div>
        </div>
      </div>

      <!-- Boxes Content -->
      <div class="col-lg-6">
        <div class="boxes_content">
          <div class="section_title"><h2>How to choose a good plan</h2></div>
          <div class="boxes_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet. Donec mi neque, pretium eu quam at, facilisis venenatis tortor. Suspendisse potenti.</p>
          </div>
          <!-- Accordions -->
          <div class="accordions">

            <!-- Accordion -->
            <div class="accordion_container">
              <div class="accordion d-flex flex-row align-items-center"><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div></div>
              <div class="accordion_panel">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.. Cconsectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
                </div>
              </div>
            </div>

            <!-- Accordion -->
            <div class="accordion_container">
              <div class="accordion d-flex flex-row align-items-center"><div>Maecenas ornare, arcu at lobortis ultrices</div></div>
              <div class="accordion_panel">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.. Cconsectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
                </div>
              </div>
            </div>

            <!-- Accordion -->
            <div class="accordion_container">
              <div class="accordion d-flex flex-row align-items-center"><div>Arcu at lobortis ultrices, neque erat euismod erat</div></div>
              <div class="accordion_panel">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.. Cconsectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Features -->
<div class="features">
  <div class="container">
    <div class="row row-lg-eq-height">

      <!-- Features Content -->
      <div class="col-lg-7">
        <div class="features_content">

          <!-- Feature -->
          <div class="feature d-flex flex-row align-items-start justify-content-start">
            <div><div class="feature_icon"><img src="public/assets/images/icon_6.svg" alt=""></div></div>
            <div class="feature_content">
              <div class="feature_title">Arcu at lobortis ultrices, nequt erat</div>
              <div class="feature_text">
                <p>Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
              </div>
            </div>
          </div>

          <!-- Feature -->
          <div class="feature d-flex flex-row align-items-start justify-content-start">
            <div><div class="feature_icon"><img src="public/assets/images/icon_14.svg" alt=""></div></div>
            <div class="feature_content">
              <div class="feature_title">Arcu at lobortis ultrices, nequt erat</div>
              <div class="feature_text">
                <p>Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
              </div>
            </div>
          </div>

          <!-- Feature -->
          <div class="feature d-flex flex-row align-items-start justify-content-start">
            <div><div class="feature_icon"><img src="public/assets/images/icon_15.svg" alt=""></div></div>
            <div class="feature_content">
              <div class="feature_title">Arcu at lobortis ultrices, nequt erat</div>
              <div class="feature_text">
                <p>Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Extra -->
      <div class="col-lg-5">
        <div class="extra">
          <div class="extra_content">
            <div class="extra_image text-center"><img src="public/assets/images/extra.png" alt=""></div>
            <div class="extra_title"><span>30</span> Days Money Back Guarantee</div>
            <div class="extra_text">
              <p>Aliquam erat volutpat. Sed efficitur diam ut inte rdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
            </div>
          </div>
          <div class="button extra_button"><a href="#">learn more</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>

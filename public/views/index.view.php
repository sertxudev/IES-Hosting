<?php
require_once 'public/views/partials/head.view.php';
require_once 'public/views/partials/header.view.php';
require_once 'public/views/partials/menu.view.php';
?>
<!-- Home -->
<div class="home">
  <div class="parallax_background parallax-window" data-parallax="scroll"
       data-image-src="public/assets/images/index.jpg" data-speed="0.8"></div>
  <div class="home_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content text-center">
            <div class="home_icon ml-auto mr-auto d-flex flex-column align-items-center justify-content-center">
              <div>
                <img src="public/assets/images/icon_1.svg" alt="https://www.flaticon.com/authors/srip">
              </div>
            </div>
            <div class="home_title">Choose the perfect hosting</div>
            <div class="domain_search">
              <div class="domain_search_background"></div>
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
</div>

<!-- Domain Pricing -->
<div class="domain_pricing">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="domain_pricing_content">
          <ul
            class="d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center">
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

<!-- Why Choose Us -->
<div class="why">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <div class="section_title"><h2>Why Choose us?</h2></div>
          <div class="section_subtitle">Ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu,
            scelerisque
          </div>
        </div>
      </div>
    </div>
    <div class="row why_row">

      <!-- Why Item -->
      <div class="col-lg-4">
        <div class="icon_box_1 text-center">
          <div class="icon_box_1_image ml-auto mr-auto"><img src="public/assets/images/icon_2.svg"
                                                             alt="https://www.flaticon.com/authors/srip"></div>
          <div class="icon_box_1_title">Server Protection</div>
          <div class="icon_box_1_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa
              quis, mattis facilisis erat.</p>
          </div>
        </div>
      </div>

      <!-- Why Item -->
      <div class="col-lg-4">
        <div class="icon_box_1 text-center">
          <div class="icon_box_1_image ml-auto mr-auto"><img src="public/assets/images/icon_3.svg"
                                                             alt="https://www.flaticon.com/authors/srip"></div>
          <div class="icon_box_1_title">CloudFlare Integration</div>
          <div class="icon_box_1_text">
            <p>Ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis,
              mattis facilisis erat. Aliquam erat.</p>
          </div>
        </div>
      </div>

      <!-- Why Item -->
      <div class="col-lg-4">
        <div class="icon_box_1 text-center">
          <div class="icon_box_1_image ml-auto mr-auto"><img src="public/assets/images/icon_4.svg"
                                                             alt="https://www.flaticon.com/authors/srip"></div>
          <div class="icon_box_1_title">30 Day Money-back</div>
          <div class="icon_box_1_text">
            <p>Lorem ipsum dolor sit amet, adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis
              facilisis erat. Aliquam erat.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Pricing -->
<div class="pricing">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <div class="section_title"><h2>The package 4 you</h2></div>
          <div class="section_subtitle">Ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu,
            scelerisque
          </div>
        </div>
      </div>
    </div>
    <div class="row pricing_row">

      <!-- Pricing Item -->
      <div class="col-lg-4">
        <div class="pricing_item trans_200">
          <div class="pricing_item_background trans_200"></div>
          <div class="pricing_title_container d-flex flex-column align-items-center justify-content-start">
            <div class="pricing_title_background trans_200">
              <svg class="waves" width="100%" height="100%" viewBox="0 0 1920 218" preserveAspectRatio="none">
                <path class="wave_path trans_200" fill="url(#grad_1)"
                      d="M0,0 V210 S500,218 860,193  S1400,125 1920,155 V0 H0"></path>
                <defs>
                  <linearGradient id="grad_1">
                    <stop offset="0%" stop-color="#487fee"/>
                    <stop offset="100%" stop-color="#b632fa"/>
                  </linearGradient>
                  <linearGradient id="grad_2">
                    <stop offset="0%" stop-color="#9cb9f6"/>
                    <stop offset="100%" stop-color="#d691fc"/>
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="pricing_title">beginner</div>
            <div class="pricing_price">Free
              <div>Always</div>
            </div>
          </div>
          <div class="pricing_content d-flex flex-column align-items-center justify-content-start">
            <div class="pricing_list">
              <ul class="d-flex flex-column align-items-center justify-content-start">
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>2 E-mail Addresess</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>25 GB Space</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>24h Live Support</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>Documetation inside</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div>X</div>
                  <div>SEO Plan</div>
                </li>
              </ul>
            </div>
            <div class="pricing_info"><a href="#">
                <div>i</div>
              </a></div>
            <div class="button pricing_button trans_200"><a href="#">order plan</a></div>
          </div>
        </div>
      </div>

      <!-- Pricing Item -->
      <div class="col-lg-4">
        <div class="pricing_item trans_200">
          <div class="pricing_item_background trans_200"></div>
          <div class="pricing_title_container d-flex flex-column align-items-center justify-content-start">
            <div class="pricing_title_background trans_200">
              <svg class="waves" width="100%" height="100%" viewBox="0 0 1920 218" preserveAspectRatio="none">
                <path class="wave_path trans_200" fill="url(#grad_1)"
                      d="M0,0 V210 S500,218 860,193  S1400,125 1920,155 V0 H0"></path>
              </svg>
            </div>
            <div class="pricing_title">recommended</div>
            <div class="pricing_price">$29<span>90</span>
              <div>Per Month</div>
            </div>
          </div>
          <div class="pricing_content d-flex flex-column align-items-center justify-content-start">
            <div class="pricing_list">
              <ul class="d-flex flex-column align-items-center justify-content-start">
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>2 E-mail Addresess</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>25 GB Space</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>24h Live Support</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>Documetation inside</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>SEO Plan</div>
                </li>
              </ul>
            </div>
            <div class="pricing_info"><a href="#">
                <div>i</div>
              </a></div>
            <div class="button pricing_button trans_200"><a href="#">order plan</a></div>
          </div>
        </div>
      </div>

      <!-- Pricing Item -->
      <div class="col-lg-4">
        <div class="pricing_item trans_200">
          <div class="pricing_item_background trans_200"></div>
          <div class="pricing_title_container d-flex flex-column align-items-center justify-content-start">
            <div class="pricing_title_background trans_200">
              <svg class="waves" width="100%" height="100%" viewBox="0 0 1920 218" preserveAspectRatio="none">
                <path class="wave_path trans_200" fill="url(#grad_1)"
                      d="M0,0 V210 S500,218 860,193  S1400,125 1920,155 V0 H0"></path>
              </svg>
            </div>
            <div class="pricing_title">professional</div>
            <div class="pricing_price">$59<span>90</span>
              <div>Per Month</div>
            </div>
          </div>
          <div class="pricing_content d-flex flex-column align-items-center justify-content-start">
            <div class="pricing_list">
              <ul class="d-flex flex-column align-items-center justify-content-start">
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>2 E-mail Addresess</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>25 GB Space</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>24h Live Support</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>Documetation inside</div>
                </li>
                <li class="d-flex flex-row align-items-center justify-content-start">
                  <div class="pricing_icon d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="26px" height="26px">
                      <path class="check_svg trans_200"
                            d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"
                            fill="#606ef1"/>
                    </svg>
                  </div>
                  <div>SEO Plan</div>
                </li>
              </ul>
            </div>
            <div class="pricing_info"><a href="#">
                <div>i</div>
              </a></div>
            <div class="button pricing_button trans_200"><a href="#">order plan</a></div>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="pricing_text text-center">
          <p>Ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis,
            mattis facilisis erat. Aliquam erat.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Right -->
<div class="c_right">
  <div class="container">
    <div class="row row-lg-eq-height">

      <!-- Content Right Image -->
      <div class="col-lg-6 c_right_col order-lg-1 order-2">
        <div class="c_right_image d-flex flex-column align-items-center justify-content-center">
          <img src="public/assets/images/pic_1.png" alt="">
        </div>
      </div>

      <!-- Content Right Content -->
      <div class="col-lg-6 order-lg-2 order-1">
        <div class="c_right_content">
          <div class="section_title_container">
            <div class="section_title"><h2>Choose the best service</h2></div>
          </div>
          <div class="c_right_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa
              quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel
              dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet. Donec mi neque, pretium eu quam at,
              facilisis venenatis tortor. Suspendisse potenti.</p>
          </div>
          <div class="content_list_1 c_right_list">
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li>Maecenas ornare, arcu at lobortis ultrices, neque erat euismod erat</li>
              <li>Nam pulvinar dapibus justo, ac pharetra neque dictum non</li>
            </ul>
          </div>
          <div class="button c_right_button"><a href="#">order plan</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Left -->
<div class="c_left">
  <div class="container">
    <div class="row row-lg-eq-height">

      <!-- Content Left Content -->
      <div class="col-lg-6">
        <div class="c_left_content">
          <div class="section_title_container">
            <div class="section_title"><h2>The best servers</h2></div>
          </div>
          <div class="content_list_2 c_left_list">
            <ul>
              <li class="d-flex flex-row align-items-start justify-content-start">
                <div>
                  <div>01.</div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim
                  massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum
                  ultricies.</p>
              </li>
              <li class="d-flex flex-row align-items-start justify-content-start">
                <div>
                  <div>02.</div>
                </div>
                <p>Dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis,
                  mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies.</p>
              </li>
              <li class="d-flex flex-row align-items-start justify-content-start">
                <div>
                  <div>03.</div>
                </div>
                <p>In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet. Donec mi neque, pretium
                  eu quam at, facilisis venenatis tortor. Suspendisse accumsan potenti.</p>
              </li>
            </ul>
          </div>
          <div class="button c_left_button"><a href="#">order plan</a></div>
        </div>
      </div>

      <!-- Content Left Image -->
      <div class="col-lg-6 c_left_col">
        <div class="c_left_image d-flex flex-column align-items-center justify-content-center">
          <img src="public/assets/images/pic_2.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>

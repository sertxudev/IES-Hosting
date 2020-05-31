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
          <div class="home_image"><img src="public/assets/images/about_page.png" alt=""></div>
          <div class="home_title">About us</div>
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

<!-- Milestones -->
<div class="milestones">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="milestones_container d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-start">

          <!-- Milestone Item -->
          <div class="milestone d-flex flex-row align-items-center justify-content-start">
            <div class="milestone_icon"><img src="public/assets/images/icon_5.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="milestone_content">
              <div class="milestone_counter" data-end-value="12557">0</div>
              <div class="milestone_text">Websites</div>
            </div>
          </div>

          <!-- Milestone Item -->
          <div class="milestone d-flex flex-row align-items-center justify-content-start">
            <div class="milestone_icon"><img src="public/assets/images/icon_6.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="milestone_content">
              <div class="milestone_counter" data-end-value="100000" data-sign-before="+">0</div>
              <div class="milestone_text">Websites</div>
            </div>
          </div>

          <!-- Milestone Item -->
          <div class="milestone d-flex flex-row align-items-center justify-content-start">
            <div class="milestone_icon"><img src="public/assets/images/icon_7.svg" alt="https://www.flaticon.com/authors/srip"></div>
            <div class="milestone_content">
              <div class="milestone_counter" data-end-value="14610">0</div>
              <div class="milestone_text">Websites</div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- About -->
<div class="about">
  <div class="container">
    <div class="row row-lg-eq-height">

      <!-- About Image -->
      <div class="col-lg-6 order-lg-1 order-2">
        <div class="about_image d-flex flex-column align-items-center justify-content-center">
          <img src="public/assets/images/servers.png" alt="">
        </div>
      </div>

      <!-- About Content -->
      <div class="col-lg-6 order-lg-2 order-1">
        <div class="about_content">
          <div class="section_title"><h2>What we do @ BHost</h2></div>
          <div class="about_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet. Donec mi neque, pretium eu quam at, facilisis venenatis tortor. Suspendisse potenti.</p>
          </div>
          <div class="button about_button"><a href="#">read more</a></div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Video -->
<div class="video">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="video_content">
          <div class="video_container_outer">
            <div class="video_overlay">
              <div class="video_text">Life at BHost - A day at our company</div>
            </div>
            <div class="video_container">
              <video id="vid1" class="video-js vjs-default-skin" controls width="100%" height="100%" data-setup='{ "poster": "public/assets/images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/IV3ueyrp5M4"}], "youtube": { "iv_load_policy": 1 } }'>
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team -->
<div class="team">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <div class="section_title"><h2>The Team</h2></div>
          <div class="team_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row team_row">

      <!-- Team Item -->
      <div class="col-xl-3 col-md-6">
        <div class="team_item">
          <div class="team_image">
            <img src="public/assets/images/team_1.jpg" alt="https://unsplash.com/@michaeldam">
            <div class="team_overlay trans_400"></div>
            <div class="team_social">
              <ul class="d-flex flex-row align-items-center justify-content-between">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team_content text-center">
            <div class="team_name">Julia Williams</div>
            <div class="team_title">Team Manager</div>
          </div>
        </div>
      </div>

      <!-- Team Item -->
      <div class="col-xl-3 col-md-6">
        <div class="team_item">
          <div class="team_image">
            <img src="public/assets/images/team_2.jpg" alt="https://unsplash.com/@stairhopper">
            <div class="team_overlay trans_400"></div>
            <div class="team_social">
              <ul class="d-flex flex-row align-items-center justify-content-between">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team_content text-center">
            <div class="team_name">Michael Smith</div>
            <div class="team_title">Manager</div>
          </div>
        </div>
      </div>

      <!-- Team Item -->
      <div class="col-xl-3 col-md-6">
        <div class="team_item">
          <div class="team_image">
            <img src="public/assets/images/team_3.jpg" alt="https://unsplash.com/@chrisjoelcampbell">
            <div class="team_overlay trans_400"></div>
            <div class="team_social">
              <ul class="d-flex flex-row align-items-center justify-content-between">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team_content text-center">
            <div class="team_name">Jessica Brown</div>
            <div class="team_title">Project Manager</div>
          </div>
        </div>
      </div>

      <!-- Team Item -->
      <div class="col-xl-3 col-md-6">
        <div class="team_item">
          <div class="team_image">
            <img src="public/assets/images/team_4.jpg" alt="https://unsplash.com/@brookecagle">
            <div class="team_overlay trans_400"></div>
            <div class="team_social">
              <ul class="d-flex flex-row align-items-center justify-content-between">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team_content text-center">
            <div class="team_name">Jack Parker</div>
            <div class="team_title">Developer</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>

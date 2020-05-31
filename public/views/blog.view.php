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
          <div class="home_image"><img src="public/assets/images/blog.png" alt=""></div>
          <div class="home_title">News</div>
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

<!-- Blog -->
<div class="blog">
  <div class="container">
    <div class="row blog_row">

      <!-- Blog Posts -->
      <div class="col-lg-8">
        <div class="blog_posts">

          <!-- Blog Post -->
          <div class="blog_post">
            <div class="blog_post_image"><img src="public/assets/images/blog_1.jpg" alt="https://unsplash.com/@sapegin"></div>
            <div class="blog_post_content">
              <div class="blog_post_title"><a href="#">How to choose a good plan?</a></div>
              <div class="blog_post_info">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                  <li><a href="#">July 12, 2018</a></li>
                  <li><a href="#">By Admin</a></li>
                  <li><a href="#">3 Comments</a></li>
                </ul>
              </div>
              <div class="blog_post_text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
              </div>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="blog_post">
            <div class="blog_post_image"><img src="public/assets/images/blog_2.jpg" alt="https://unsplash.com/@fancycrave"></div>
            <div class="blog_post_content">
              <div class="blog_post_title"><a href="#">Next level in cloud storage</a></div>
              <div class="blog_post_info">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                  <li><a href="#">July 12, 2018</a></li>
                  <li><a href="#">By Admin</a></li>
                  <li><a href="#">3 Comments</a></li>
                </ul>
              </div>
              <div class="blog_post_text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
              </div>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="blog_post">
            <div class="blog_post_image"><img src="public/assets/images/blog_3.jpg" alt="https://unsplash.com/@helloquence"></div>
            <div class="blog_post_content">
              <div class="blog_post_title"><a href="#">Tips to get the best storage</a></div>
              <div class="blog_post_info">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                  <li><a href="#">July 12, 2018</a></li>
                  <li><a href="#">By Admin</a></li>
                  <li><a href="#">3 Comments</a></li>
                </ul>
              </div>
              <div class="blog_post_text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="page_nav">
          <ul class="d-flex flex-row align-items-start justify-content-start">
            <li class="active"><a href="#">01.</a></li>
            <li><a href="#">02.</a></li>
            <li><a href="#">03.</a></li>
          </ul>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="sidebar">

          <!-- Sidebar Search -->
          <div class="search_form_container">
            <form action="#" id="search_form" class="search_form">
              <input type="text" class="search_input" required="required">
              <button class="search_button">Search</button>
            </form>
          </div>

          <!-- Categories -->
          <div class="categories">
            <div class="sidebar_title">Categories</div>
            <div class="categories_list">
              <ul>
                <li><a href="#">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div>Advertising</div>
                      <div class="ml-auto">(09)</div>
                    </div>
                  </a></li>
                <li><a href="#">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div>Reseller Hosting</div>
                      <div class="ml-auto">(12)</div>
                    </div>
                  </a></li>
                <li><a href="#">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div>VPS Hosting</div>
                      <div class="ml-auto">(16)</div>
                    </div>
                  </a></li>
                <li><a href="#">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div>Cloud Hosting</div>
                      <div class="ml-auto">(19)</div>
                    </div>
                  </a></li>
                <li><a href="#">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div>Dedicated Hosting</div>
                      <div class="ml-auto">(12)</div>
                    </div>
                  </a></li>
                <li><a href="#">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div>Linux Servers</div>
                      <div class="ml-auto">(05)</div>
                    </div>
                  </a></li>
              </ul>
            </div>
          </div>

          <!-- Popular Posts -->
          <div class="popular">
            <div class="sidebar_title">Popular Posts</div>
            <div class="popular_container">

              <!-- Popular Post -->
              <div class="popular_post d-flex flex-row align-items-start justify-content-start">
                <div><div class="pop_image"><img src="public/assets/images/pop_1.jpg" alt="https://unsplash.com/@andipalmer"></div></div>
                <div class="pop_content">
                  <div class="pop_date"><a href="#">July 12, 2018</a></div>
                  <div class="pop_title"><a href="#">How to choose a good plan?</a></div>
                  <div class="pop_author"><a href="#">Maria Smith</a></div>
                </div>
              </div>

              <!-- Popular Post -->
              <div class="popular_post d-flex flex-row align-items-start justify-content-start">
                <div><div class="pop_image"><img src="public/assets/images/pop_2.jpg" alt="https://unsplash.com/@cikstefan"></div></div>
                <div class="pop_content">
                  <div class="pop_date"><a href="#">July 12, 2018</a></div>
                  <div class="pop_title"><a href="#">Next level in cloud storage</a></div>
                  <div class="pop_author"><a href="#">Maria Smith</a></div>
                </div>
              </div>

              <!-- Popular Post -->
              <div class="popular_post d-flex flex-row align-items-start justify-content-start">
                <div><div class="pop_image"><img src="public/assets/images/pop_3.jpg" alt="https://unsplash.com/@gbeaudry"></div></div>
                <div class="pop_content">
                  <div class="pop_date"><a href="#">July 12, 2018</a></div>
                  <div class="pop_title"><a href="#">10 Tips for social media</a></div>
                  <div class="pop_author"><a href="#">Maria Smith</a></div>
                </div>
              </div>

            </div>
          </div>

          <!-- Extra (ad) -->
          <div class="extra">
            <div class="extra_content">
              <div class="extra_image text-center"><img src="public/assets/images/extra.png" alt=""></div>
              <div class="extra_title">Days Money Back Guarantee</div>
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
</div>
<?php
require_once 'public/views/partials/footer.view.php';
require_once 'public/views/partials/foot.view.php';
?>


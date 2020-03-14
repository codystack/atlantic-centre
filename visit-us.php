<?php require_once('./components/header.php');?>

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">

    <!-- Hero Section -->
    <div class="gradient-overlay-half-dark-v2 bg-img-hero" style="background-image: url(https://i.imgur.com/mHe648T.jpg);">
      <div class="container space-2 space-4-top--lg space-3-bottom--lg">
        <div class="w-lg-60 text-center mx-lg-auto">
          <h1 class="display-2 font-size-48--md-down text-white mb-0">Visit Us</h1>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->


    <!-- Contacts Section -->
    <div class="container space-2 space-3--lg">
      <div class="row">
        <div class="col-lg-6 mb-7 mb-lg-0">
          <!-- Contacts Info -->
          <h1 class="h4 mb-4"></h1>

          <div class="row">
            <div class="col-sm-6 mb-4 mb-sm-0">
              <h2 class="h6">Details:</h2>
              <address class="mb-0">
                <ul class="list-unstyled font-size-14 text-secondary mb-0">
                  <li class="py-1">Chevron Drive, Lekki Phase 1, <br>Lagos, Nigeria.</li>
                  <li class="py-2"></li>
                  <li class="py-1">+234 908 290 9799</li>
                  <li class="py-1">Email: <a href="#">info@atlanticcentreng.com</a></li>
                  <li class="py-1">Website: <a href="#">www.atlanticcentreng.com</a></li>
                </ul>
              </address>
            </div>

            <div class="col-sm-6">
              <h3 class="h6">Business hours:</h3>
              <span class="d-block font-size-14 text-secondary mb-3">Mon - Sat: 9.00AM - 10.00PM<br>Sun: 12.00PM - 10.PM</span>
              <img class="img-fluid" src="./assets/img/400x180/img1.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Contacts Info -->
        </div>

        <div class="col-lg-6">
          <!-- Google Map -->
          <div id="GMap1" class="js-g-map embed-responsive embed-responsive-21by9 h-100"
               data-type="custom"
               data-lat="6.447969"
               data-lng="3.530826"
               data-zoom="12"
               data-title="Agency"
               data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
               data-pin="true"
               data-pin-icon="https://i.imgur.com/qw5jw1q.png"></div>
          <!-- End Google Map -->
        </div>
      </div>
    </div>
    <!-- End Contacts Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 <?php require_once('./components/footer.php');?>
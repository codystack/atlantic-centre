<?php require_once('./components/header.php');?>

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
  
  <div class="gradient-overlay-half-dark-v2 bg-img-hero" style="background-image: url(https://i.imgur.com/mG2Uf5G.jpg);">
      <div class="container space-2 space-4-top--lg space-3-bottom--lg">
        <div class="w-lg-60 text-center mx-lg-auto">
          <h1 class="display-2 font-size-48--md-down text-white mb-0">Gallery</h1>
        </div>
      </div>
    </div>

    <!-- Cubeportfolio -->
    <div class="container-fluid u-cubeportfolio space-2 space-3--lg">
      <!-- Filter -->
      <ul id="filterControls" class="list-inline cbp-l-filters-alignCenter mb-5">
        <li class="list-inline-item cbp-filter-item cbp-filter-item-active u-cubeportfolio__item" data-filter="*">All</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".branding">Branding</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".abstract">Abstract</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".graphic">Graphic</li>
        <li class="list-inline-item cbp-filter-item u-cubeportfolio__item" data-filter=".illustration">Illustration</li>
      </ul>
      <!-- End Filter -->

      <!-- Content -->
      <div class="cbp"
            data-layout="grid"
            data-controls="#filterControls"
            data-animation="quicksand"
            data-caption-animation="zoom"
            data-x-gap="15"
            data-y-gap="15"
            data-load-more-selector="#cubeLoadMore"
            data-load-more-action="auto"
            data-load-items-amount="2"
            data-media-queries='[
              {"width": 1500, "cols": 4},
              {"width": 1100, "cols": 4},
              {"width": 800, "cols": 3},
              {"width": 580, "cols": 2},
              {"width": 300, "cols": 1}
            ]'>
        <!-- Item -->
        <div class="cbp-item graphic">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img7.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x650/img1.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h2 class="h5 text-dark mb-0">Remind me more</h2>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item abstract">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img9.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img3.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h3 class="h5 text-dark mb-0">Easy note</h3>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img10.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img4.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Designing</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img11.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img5.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Creative work</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img12.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x650/img3.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Development process</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img20.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img9.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Remind me more</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item branding">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img8.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x650/img2.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Workout buddy</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item branding">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img21.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img10.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Workout buddy</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item abstract">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img22.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img11.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Easy note</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img26.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x250/img1.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Remind me more</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img24.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img13.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Creative work</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img25.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img14.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Development process</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img23.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img12.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Designing</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item branding">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img27.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x250/img2.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Workout buddy</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item abstract">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img28.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img17.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Easy note</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img29.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x250/img3.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Designing</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->

        <!-- Item -->
        <div class="cbp-item graphic illustration">
          <a class="cbp-caption cbp-lightbox" href="./assets/img/1920x1080/img27.jpg">
            <div class="cbp-caption-defaultWrap">
              <img src="./assets/img/500x330/img19.jpg" alt="Image Description">
            </div>
            <div class="cbp-caption-activeWrap">
              <div class="w-100 text-center content-centered-y p-3">
                <h4 class="h5 text-dark mb-0">Designing</h4>
              </div>
            </div>
          </a>
        </div>
        <!-- End Item -->
      </div>
      <!-- End Content -->
    </div>
    <!-- End Cubeportfolio -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


<?php require_once('./components/footer.php');?>
<!-- Signup Modal Window -->
<div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
    <!-- Modal Close Button -->
    <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
      <i class="fas fa-times"></i>
    </button>
    <!-- End Modal Close Button -->

    <!-- Content -->
    <div class="p-5 bg-white rounded">
      <form class="js-validate">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Let’s talk</h2>
            <p>Make contact via the form below and we promise to provide answers to all your enquiries.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="text" class="form-control form__input" name="fullname" required
                     placeholder="Full Name">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-envelope form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-phone form__text-inner"></i>
                </span>
              </div>
              <input type="tel" class="form-control form__input" name="phone" required
                     placeholder="Phone">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-pencil form__text-inner"></i>
                </span>
              </div>
              <textarea type="text" class="form-control form__input" name="message" required
                     placeholder="Write your comment/message here"></textarea>
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Send Message</button>
          </div>
        </div>
        <!-- End Signin -->
      </form>
    </div>
    <!-- End Content -->
  </div>
  <!-- End Signup Modal Window -->
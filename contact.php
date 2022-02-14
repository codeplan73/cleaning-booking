<?php require './includes/header.php'; ?>

    <!-- Search Overlay -->
    <div class="search-overlay">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-layer"></div>
          <div class="search-overlay-layer"></div>

          <div class="search-overlay-close">
            <span class="search-overlay-close-line"></span>
            <span class="search-overlay-close-line"></span>
          </div>

          <div class="search-overlay-form">
            <form>
              <input
                type="text"
                class="input-search"
                placeholder="Search here..."
              />
              <button type="submit"><i class="ri-search-line"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Search Overlay -->

    <!-- Start Page Banner Area -->
    <div class="page-banner-area">
      <div class="container">
        <div class="page-banner-content">
          <h2>Contact Us</h2>

          <ul>
            <li>
              <a href="index">Home</a>
            </li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>

      <div class="page-banner-shape-1" data-speed="0.05" data-revert="true">
        <img src="assets/images/page-banner/shape-1.png" alt="image" />
      </div>
      <div class="page-banner-shape-2" data-speed="0.07" data-revert="true">
        <img src="assets/images/page-banner/shape-2.png" alt="image" />
      </div>
      <div class="page-banner-shape-3" data-speed="0.06" data-revert="true">
        <img src="assets/images/page-banner/shape-3.png" alt="image" />
      </div>
      <div class="page-banner-shape-4" data-speed="0.09" data-revert="true">
        <img src="assets/images/page-banner/shape-4.png" alt="image" />
      </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Contact Information Area -->
    <div class="contact-information-area pt-100 pb-75">
      <div class="container">
        <div class="section-title">
          <span>Contact Information</span>
          <h2>We Want To Share Our Location To Find Us Easily</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="contact-information-card">
              <div class="icon">
                <i class="flaticon-location"></i>
              </div>
              <h3>Office Address</h3>
              <p>
                103 crofton park road Brockley London
                
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="contact-information-card">
              <div class="icon">
                <i class="flaticon-phone-call"></i>
              </div>
              <h3>Phone Number</h3>
              <p>
               +447514603137
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="contact-information-card">
              <div class="icon">
                <i class="flaticon-mail"></i>
              </div>
              <h3>Mail Address :</h3>
              <p>
               bookings@linostouch.com
              </p>
            </div>
          </div>
        </div>
      </div>

      <div
        class="contact-information-shape-1"
        data-speed="0.08"
        data-revert="true"
      >
        <img src="assets/images/contact-information-shape-1.png" alt="image" />
      </div>
    </div>
    <!-- End Contact Information Area -->

    <!-- Start Contact Form Area -->
    <div class="contact-form-area ptb-100">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="contact-form-content">
              <span>Contact Form</span>
              <h3>Cool Project? Get in Touch! Will Contact You Soon</h3>

              <ul class="action-list">
                <li>
                  <a href="https://www.facebook.com/" target="_blank"
                    ><i class="ri-facebook-line"></i
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank"
                    ><i class="ri-twitter-fill"></i
                  ></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank"
                    ><i class="ri-instagram-fill"></i
                  ></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" target="_blank"
                    ><i class="ri-linkedin-fill"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="contact-form-wrap">
              <form id="contactForm">
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label><i class="ri-user-3-line"></i></label>
                      <input
                        type="text"
                        class="form-control"
                        required
                        data-error="Please enter your name"
                        placeholder="Enter your name"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label><i class="ri-mail-line"></i></label>
                      <input
                        type="text"
                        class="form-control"
                        required
                        data-error="Please enter your email"
                        placeholder="Email Address"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label><i class="ri-phone-line"></i></label>
                      <input
                        type="text"
                        class="form-control"
                        required
                        data-error="Please enter your phone number"
                        placeholder="Enter Number"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label><i class="ri-book-line"></i></label>
                      <input
                        type="text"
                        class="form-control"
                        required
                        data-error="Please enter your subject"
                        placeholder="Enter Subject"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <label><i class="ri-pencil-line"></i></label>
                      <textarea
                        class="form-control"
                        cols="30"
                        rows="6"
                        required
                        data-error="Write your message"
                        placeholder="How can we help you? Feel free to talk...."
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <button type="submit" class="default-btn">
                      <i class="ri-arrow-right-line"></i> Send Message
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Form Area -->

    <!-- Start Newsletter Area -->
    <div class="newsletter-area ptb-100">
      <div class="container">
        <div class="section-title">
          <h2>Signup to Our Newsletter</h2>
        </div>

        <form class="newsletter-form">
          <div class="form-group">
            <input
              type="email"
              class="input-newsletter"
              placeholder="Enter your email address"
              name="EMAIL"
              required
              autocomplete="off"
            />
          </div>

          <button type="submit"><i class="ri-send-plane-line"></i></button>
          <div id="validator-newsletter" class="form-result"></div>
        </form>
      </div>

      <div class="newsletter-shape-1" data-speed="0.09" data-revert="true">
        <img src="assets/images/newsletter/shape-1.png" alt="image" />
      </div>
      <div class="newsletter-shape-2" data-speed="0.09" data-revert="true">
        <img src="assets/images/newsletter/shape-2.png" alt="image" />
      </div>
      <div class="newsletter-shape-3" data-speed="0.09" data-revert="true">
        <img src="assets/images/newsletter/shape-3.png" alt="image" />
      </div>
    </div>
    <!-- End Newsletter Area -->
<?php require './includes/footer.php'; ?>
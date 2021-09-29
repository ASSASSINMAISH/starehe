
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--================ Basic page needs ================-->
    <title>Bed and Breakfast Hotel | Rooms Filter Top 3 Column Gallery v2</title>
    <meta charset="UTF-8" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--================ Google web fonts ================-->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&display=swap"
      rel="stylesheet"
    />
    <!--================ Vendor CSS ================-->
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link
      rel="stylesheet"
      href="vendors/arcticmodal/jquery.arcticmodal-0.3.css"
    />
    <link
      rel="stylesheet"
      href="vendors/owl-carousel/assets/owl.carousel.min.css"
    />
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!--================ Vendor JS ================-->
  </head>

  <body>
    <div class="mad-preloader"></div>
    <div id="mad-page-wrapper" class="mad-page-wrapper">
      <!--================ Search Modal ================-->
      <div class="mad-d-none">
        <div id="search-modal" class="mad-modal mad-modal--search">
          <h6 class="mad-title">Search</h6>
          <!--================ Search Form ================-->
          <form class="mad-search-section">
            <input type="text" placeholder="Start Typing here..." />
            <button type="submit" class="btn">
              <i class="material-icons">search</i><span>search</span>
            </button>
          </form>
          <!--================ End of Search Form ================-->
          <button type="button" class="arcticmodal-close">
            <i class="material-icons">close</i>
          </button>
        </div>
      </div>
        <?php include_once 'includes/header.php';?>
      <!--================ End of Header ================-->
      <!--================ Breadcrumb ================-->
      <div
        class="mad-breadcrumb with-bg-img with-overlay"
        data-bg-image-src="images/1920x512_bg8.jpg"
      >
        <div class="container wide">
          <h1 class="mad-page-title">
            3 Column Rooms Gallery v2 With Top Filter
          </h1>
          <nav class="mad-breadcrumb-path">
            <span><a href="index.html" class="mad-link">Home</a></span> /
            <span>3 Column Rooms Gallery v2 With Top Filter</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div
        class="
          mad-section
          small-size
          mad-section--stretched-content
          mad-colorizer--scheme-color-3 mad-colorizer--scheme-light
        "
      >
        <form
          method="get"
          action="rooms_2_col_gallery_v1.html"
          class="mad-form"
        >
          <div class="mad-form-row">
            <div class="mad-form-col">
              <label>Arrival Date</label>
              <div class="mad-datepicker">
                <div class="mad-datepicker-body">
                  <span class="mad-datepicker-others">
                    <span class="mad-datepicker-month-year"
                      >Friday, 15 April</span
                    >
                  </span>
                </div>
                <div class="mad-datepicker-select">
                  <div
                    
                    class="calendar_wrap mad-calendar-rendered"
                  >
                    <table class="wp-calendar">
                      <caption>
                        September 2021
                        <a class="calendar-caption-prev" href="#"
                          ><i class="material-icons">keyboard_arrow_left</i></a
                        >
                        <a class="calendar-caption-next" href="#"
                          ><i class="material-icons">keyboard_arrow_right</i></a
                        >
                      </caption>
                      <thead class="div">
                        <tr>
                          <th>Sun</th>
                          <th>Mon</th>
                          <th>Tue</th>
                          <th>Wed</th>
                          <th>Thu</th>
                          <th>Fri</th>
                          <th>Sat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="first">
                            <div class="marker">30</div>
                          </td>
                          <td>
                            <div class="marker">31</div>
                          </td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td class="first">6</td>
                          <td>7</td>
                          <td>8</td>
                          <td ><a href="#">9</a></td>
                          <td>10</td>
                          <td>11</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td class="first">13</td>
                          <td>14</td>
                          <td>15</td>
                          <td>16</td>
                          <td>17</td>
                          <td>18</td>
                          <td>19</td>
                        </tr>
                        <tr>
                          <td class="first">20</td>
                          <td>21</td>
                          <td>22</td>
                          <td>23</td>
                          <td>24</td>
                          <td>25</td>
                          <td>26</td>
                        </tr>
                        <tr>
                          <td class="first">27</td>
                          <td>28</td>
                          <td>29</td>
                          <td>30</td>
                          <td>
                            <div class="marker">1</div>
                          </td>
                          <td>
                            <div class="marker">2</div>
                          </td>
                          <td>
                            <div class="marker">3</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="mad-form-col">
              <label>Departure Date</label>
              <div class="mad-datepicker">
                <div class="mad-datepicker-body">
                  <span class="mad-datepicker-others">
                    <span class="mad-datepicker-month-year"
                      >Wednesday, 27 April</span
                    >
                  </span>
                </div>
                <div class="mad-datepicker-select">
                  <div
                    
                    class="calendar_wrap mad-calendar-rendered"
                  >
                    <table class="wp-calendar">
                      <caption>
                        September 2021
                        <a class="calendar-caption-prev" href="#"
                          ><i class="material-icons">keyboard_arrow_left</i></a
                        >
                        <a class="calendar-caption-next" href="#"
                          ><i class="material-icons">keyboard_arrow_right</i></a
                        >
                      </caption>
                      <thead class="div">
                        <tr>
                          <th>Sun</th>
                          <th>Mon</th>
                          <th>Tue</th>
                          <th>Wed</th>
                          <th>Thu</th>
                          <th>Fri</th>
                          <th>Sat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="first">
                            <div class="marker">30</div>
                          </td>
                          <td>
                            <div class="marker">31</div>
                          </td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td class="first">6</td>
                          <td>7</td>
                          <td>8</td>
                          <td ><a href="#">9</a></td>
                          <td>10</td>
                          <td>11</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td class="first">13</td>
                          <td>14</td>
                          <td>15</td>
                          <td>16</td>
                          <td>17</td>
                          <td>18</td>
                          <td>19</td>
                        </tr>
                        <tr>
                          <td class="first">20</td>
                          <td>21</td>
                          <td>22</td>
                          <td>23</td>
                          <td>24</td>
                          <td>25</td>
                          <td>26</td>
                        </tr>
                        <tr>
                          <td class="first">27</td>
                          <td>28</td>
                          <td>29</td>
                          <td>30</td>
                          <td>
                            <div class="marker">1</div>
                          </td>
                          <td>
                            <div class="marker">2</div>
                          </td>
                          <td>
                            <div class="marker">3</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="mad-form-col short-col">
              <label>Adults</label>
              <div class="quantity size-2">
                <input type="text" value="1" readonly="" />
                <button type="button" class="qty-plus">
                  <i class="material-icons">keyboard_arrow_up</i>
                </button>
                <button type="button" class="qty-minus">
                  <i class="material-icons">keyboard_arrow_down</i>
                </button>
              </div>
            </div>
            <div class="mad-form-col short-col">
              <label>children</label>
              <div class="quantity size-2">
                <input type="text" value="0" readonly="" />
                <button type="button" class="qty-plus">
                  <i class="material-icons">keyboard_arrow_up</i>
                </button>
                <button type="button" class="qty-minus">
                  <i class="material-icons">keyboard_arrow_down</i>
                </button>
              </div>
            </div>
            <div class="mad-form-col">
              <label>Rate per night</label>
              <div class="mad-range-slider-field type-2">
                <input
                  type="text"
                  value="$120"
                  name="check_availability_price"
                  readonly
                  class="mad-range-slider-input"
                />
                <div class="mad-range-slider"></div>
                <input
                  type="text"
                  value="$999"
                  name="check_availability_price"
                  readonly
                  class="mad-range-slider-input2"
                />
              </div>
            </div>
            <div class="mad-form-col">
              <label>Amenities</label>
              <div class="mad-datepicker">
                <div class="mad-datepicker-body">
                  <span class="mad-datepicker-others">
                    <span class="mad-datepicker-month-year">Please select</span>
                  </span>
                </div>
                <div class="mad-datepicker-select">
                  <div style="display: block" class="mad-toggled-fields">
                    <input type="checkbox" name="checkbox-1" id="checkbox-1" />
                    <label for="checkbox-1" class="mad-label-checkbox"
                      >Air Conditioner</label
                    >
                    <input type="checkbox" name="checkbox-2" id="checkbox-2" />
                    <label for="checkbox-2" class="mad-label-checkbox"
                      >Family Friendly</label
                    >
                    <input type="checkbox" name="checkbox-3" id="checkbox-3" />
                    <label for="checkbox-3" class="mad-label-checkbox"
                      >Hair Dryer</label
                    >
                    <input type="checkbox" name="checkbox-4" id="checkbox-4" />
                    <label for="checkbox-4" class="mad-label-checkbox"
                      >LCD Television</label
                    >
                    <input type="checkbox" name="checkbox-5" id="checkbox-5" />
                    <label for="checkbox-5" class="mad-label-checkbox"
                      >Minibar</label
                    >
                    <input type="checkbox" name="checkbox-6" id="checkbox-6" />
                    <label for="checkbox-6" class="mad-label-checkbox"
                      >No Smoking</label
                    >
                    <input type="checkbox" name="checkbox-7" id="checkbox-7" />
                    <label for="checkbox-7" class="mad-label-checkbox"
                      >Parking</label
                    >
                    <input type="checkbox" name="checkbox-8" id="checkbox-8" />
                    <label for="checkbox-8" class="mad-label-checkbox"
                      >Pets Allowed</label
                    >
                    <input type="checkbox" name="checkbox-9" id="checkbox-9" />
                    <label for="checkbox-9" class="mad-label-checkbox"
                      >Safe Deposit Box</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="mad-form-col">
              <button type="submit" class="btn">Check Availability</button>
            </div>
          </div>
        </form>
      </div>
      <div class="mad-content">
        <div class="container-fluid">
          <div class="mad-entities with-hover align-center type-3 item-col-3">
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"><img src="images/576x576_img1.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Superior Single Room</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$199/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a href="rooms_single_image_sidebar.html" class="btn btn-big">Book Now</a>
                      <a href="rooms_single_slider_sidebar.html" class="btn btn-big style-2">Details</a>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"><img src="images/576x576_img2.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Superior Double Room</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$249/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a href="rooms_single_image_sidebar.html" class="btn btn-big">Book Now</a>
                      <a href="rooms_single_slider_sidebar.html" class="btn btn-big style-2">Details</a>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"><img src="images/576x576_img3.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Family Room</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$299/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a href="rooms_single_image_sidebar.html" class="btn btn-big">Book Now</a>
                      <a href="rooms_single_slider_sidebar.html" class="btn btn-big style-2">Details</a>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"><img src="images/576x576_img10.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Deluxe Double Room</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$329/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a href="rooms_single_image_sidebar.html" class="btn btn-big">Book Now</a>
                      <a href="rooms_single_slider_sidebar.html" class="btn btn-big style-2">Details</a>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"><img src="images/576x576_img11.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Deluxe Suite</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$349/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a href="rooms_single_image_sidebar.html" class="btn btn-big">Book Now</a>
                      <a href="rooms_single_slider_sidebar.html" class="btn btn-big style-2">Details</a>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="rooms_single_image.html"><img src="images/576x576_img12.jpg" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Honeymoon Villa</h4>
                  <div class="mad-pricing-value">
                    <span>From</span>
                    <span class="mad-pricing-value-num">$399/</span>
                    <span>night</span>
                  </div>
                  <div class="mad-entity-footer">
                    <div class="btn-set justify-content-center">
                      <a href="rooms_single_image_sidebar.html" class="btn btn-big">Book Now</a>
                      <a href="rooms_single_slider_sidebar.html" class="btn btn-big style-2">Details</a>
                    </div>
                  </div>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
          <ul class="mad-pagination">
            <li>
              <a href="#" class="prev mad-arrows"
                ><i class="material-icons">keyboard_arrow_left</i
                ><span>Previous</span></a
              >
            </li>
            <li><a href="#" class="page-numbers current">1</a></li>
            <li><a href="#" class="page-numbers">2</a></li>
            <li><a href="#" class="page-numbers">3</a></li>
            <li>
              <a href="#" class="next mad-arrows"
                ><i class="material-icons">keyboard_arrow_right</i
                ><span>Next</span></a
              >
            </li>
          </ul>
        </div>
      </div>
      <!--================ Footer ================-->
      <footer id="mad-footer" class="mad-footer footer-3">
        <!--================ Footer row ================-->
        <div class="mad-footer-main">
          <div class="container-fluid">
            <div class="row justify-content-between vr-size-2">
              <div class="col-xl-2 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <a href="#" class="mad-logo content-element-2"
                    ><img src="images/logo5.png" alt=""
                  /></a>
                  <p class="copyrights">
                    Copyright © 2021 <a href="#">Hôtel Privé</a>. <br />
                    All Rights Reserved.
                  </p>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-2 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Current Weather</h6>
                  <div class="mad-footer-subtitle">Paris, France</div>
                  <div class="mad-weather-section">
                    <div class="mad-weather-icon">
                      <img
                        src="royal_beach_resort_svg/sun.svg"
                        alt=""
                        class="svg"
                      />
                    </div>
                    <div class="mad-weather-temp">
                      <span class="mad-weather-num">15</span>
                      <span class="mad-weather-let">°C / °F</span>
                    </div>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-2 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Menu</h6>
                  <div class="mad-vr-list menu">
                    <ul>
                      <li>
                        <a href="pages_about.html" class="mad-text-link">
                          <div class="link-container">
                            <span class="link-title1 title">About</span>
                            <span class="link-title2 title">About</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="pages_offers.html" class="mad-text-link">
                          <div class="link-container">
                            <span class="link-title1 title"
                              >Special Offers</span
                            >
                            <span class="link-title2 title"
                              >Special Offers</span
                            >
                          </div>
                        </a>
                      </li>
                      <li>
                        <a
                          href="blog_classic_sidebar.html"
                          class="mad-text-link"
                        >
                          <div class="link-container">
                            <span class="link-title1 title">News</span>
                            <span class="link-title2 title">News</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="pages_contact_v1.html" class="mad-text-link">
                          <div class="link-container">
                            <span class="link-title1 title">Contact Us</span>
                            <span class="link-title2 title">Contact Us</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Stay Connected</h6>
                  <div class="mad-footer-subtitle">
                    Follow us on social media channels
                  </div>
                  <div class="mad-social-icons size-2">
                    <ul>
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-tripadvisor"></i></a>
                      </li>
                    </ul>
                  </div>
                </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-3 col-lg-8 col-sm-12">
                <!--================ Widget ================-->
                <section class="mad-widget">
                  <h6 class="mad-widget-title">Newsletter Sign Up</h6>
                  <form class="mad-newsletter-form">
                    <div class="mad-col">
                      <div class="mad-footer-subtitle">
                        Sign up for news and special offers
                      </div>
                      <input
                        type="email"
                        name="email"
                        placeholder="Enter Email Address"
                      />
                    </div>
                    <div class="mad-col">
                      <button type="submit" class="btn btn-huge btn-style-3">
                        Subscribe
                      </button>
                    </div>
                  </form>
                </section>
                <!--================ End of Widget ================-->
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Footer row ================-->
      </footer>
      <!--================ End of Footer ================-->
    </div>
    <script src="vendors/modernizr.js"></script>
    <script src="vendors/jquery-3.6.0.min.js"></script>
    <script src="vendors/jquery.easing.1.3.min.js"></script>
    <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
    <script src="vendors/monkeysan.accordion.js"></script>
    <script src="vendors/monkeysan.jquery.nav.1.0.js"></script>
    <script src="vendors/monkeysan.validator.min.js"></script>
    <script src="vendors/handlebars-v4.0.5.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="vendors/retina.min.js"></script>
    <script src="vendors/sticky-sidebar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/mad.customselect.js"></script>
    <script src="js/modules/mad.alert-box.min.js"></script>
    <script src="js/modules/mad.newsletter-form.min.js"></script>
    <script src="js/modules/mad.sticky-header-section.min.js"></script>
    <script src="js/mad.app.js"></script>
  </body>
</html>

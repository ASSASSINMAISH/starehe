<!DOCTYPE html>
<html lang="en">
  <head>
    <!--================ Basic page needs ================-->
    <title>Royal Beach Resort | Index</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:image" content="https://static.roundme.com/20200617214500/images/rm-icon-master.png"/>
    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--================ Google web fonts ================-->
    <link href="../../../css2.css?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <!--================ Vendor CSS ================-->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link href="../../../css.css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/revolution/css/settings.css">
    <link rel="stylesheet" href="vendors/revolution/css/layers.min.css">
    <link rel="stylesheet" href="vendors/revolution/css/navigation.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
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
            <input type="text" placeholder="Start Typing here...">
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
      <!--================ Header ================-->
        <?php include_once 'includes/header.php';?>
      <!--================ End of Header ================-->
      <!--================ Slider Revolution ================-->
      <div class="mad-media-element with-overlay" data-bg-image-src="assets/images/home.png" style="background-image: url(&quot;images/1920x1064_bg.jpg&quot;);">
        <div class="mad-media-element-inner">
          <div class="mad-pre-title">time to reconnect</div>
          <h1 class="mad-title">A New Vision of Comfort</h1>
          <a href="https://www.youtube.com/embed/6OE2JoqQM2c?rel=0&amp;showinfo=0&amp;autohide=2&amp;controls=0&amp;enablejsapi=1" class="mad-video-btn" data-fancybox="video"></a>
          <div class="mad-video-title">watch the film</div>
        </div>
        <div class="mad-media-item">
          <div class="container">
            <form method="get" action="rooms_2_col_gallery_v1.html" class="mad-form">
            <div class="mad-form-row">
              <div class="mad-form-col">
                <label>Arrival Date</label>
                <div class="mad-datepicker">
                  <div class="mad-datepicker-body">
                    <span class="mad-datepicker-date">15</span>
                    <span class="mad-datepicker-others">
                      <span class="mad-datepicker-month-year">April, 2022</span>
                      <span class="mad-datepicker-day">Friday</span>
                    </span>
                  </div>
                  <div class="mad-datepicker-select">
                    <div id="calendar-wrap" class="calendar_wrap mad-calendar-rendered">
                      <table id="wp-calendar">
                        <caption>
                          September 2021
                          <a class="calendar-caption-prev" href="#"><i class="material-icons">keyboard_arrow_left</i></a>
                          <a class="calendar-caption-next" href="#"><i class="material-icons">keyboard_arrow_right</i></a>
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
                            <td id="today"><a href="#">9</a></td>
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
                    <span class="mad-datepicker-date">27</span>
                    <span class="mad-datepicker-others">
                      <span class="mad-datepicker-month-year">April, 2022</span>
                      <span class="mad-datepicker-day">wednesday</span>
                    </span>
                  </div>
                  <div class="mad-datepicker-select">
                    <div id="calendar-wrap" class="calendar_wrap mad-calendar-rendered">
                      <table id="wp-calendar">
                        <caption>
                          September 2021
                          <a class="calendar-caption-prev" href="#"><i class="material-icons">keyboard_arrow_left</i></a>
                          <a class="calendar-caption-next" href="#"><i class="material-icons">keyboard_arrow_right</i></a>
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
                            <td id="today"><a href="#">9</a></td>
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
                <div class="quantity">
                  <input type="text" value="1" readonly="">
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
                <div class="quantity">
                  <input type="text" value="0" readonly="">
                  <button type="button" class="qty-plus">
                    <i class="material-icons">keyboard_arrow_up</i>
                  </button>
                  <button type="button" class="qty-minus">
                    <i class="material-icons">keyboard_arrow_down</i>
                  </button>
                </div>
              </div>
              <div class="mad-form-col">
                <button type="submit" class="btn btn-huge">
                  Check Availability
                </button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!--================ End of Slider Revolution ================-->

      
      <!--================ About section ================-->

      <div class="mad-content no-pd">
        <div class="">
          <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-7">
            <div
              class="mad-entities style-4 mad-entities-reverse type-4 with-img-border">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="blog_single.html"><img src="https://velikorodnov.com/html/hotel-prive/luxury-city-hotel/images/880x840_img1.jpg" alt=""></a>
                </div>
                <div class="mad-entity-content">
                  <div class="mad-entity-pre-title">welcome</div>
                  <h2 class="mad-entity-title content-element">Luxury Hotel</h2>
                  <h4 class="content-element-5">Near The Montmartre, Paris</h4>
                  <p>
                    <b
                      >Aliquam erat volutpat. Duis ac turpis. Donec sit amet
                      eros. Lorem ipsum dolor sit amet, consectetuer adipiscing
                      elit..</b
                    >
                  </p>
                  <p>
                    Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut
                    tellus dolor, dapibus eget, elementum vel, cursus eleifend,
                    elit. Aenean auctor wisi et urna. Aliquam erat volutpat.
                    Duis ac turpis. Integer rutrum ante eu lacus.
                  </p>
                  <a href="rooms_2_col_list_v1.html" class="mad-text-link">
                    <div class="link-container">
                      <span class="link-title1 title">Explore More</span>
                      <span class="link-title2 title">Explore More</span>
                    </div>
                  </a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
          <div class="mad-section no-pb mad-section--stretched-content-no-px mad-colorizer--scheme-color-">
            <div class="mad-title-wrap align-center">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="mad-pre-title">accommodation</div>
                  <h2 class="mad-page-title">Rooms & Suits</h2>
                  <p class="mad-text-medium">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse <br> sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet.</p>
                </div>
              </div>
            </div>
            <div
              class="
                mad-section
                no-pd
                mad-section--stretched-content-no-px
                mad-colorizer--scheme-
              "
            >
              <div
                class="
                  mad-entities
                  single-entity
                  style-2
                  mad-grid
                  owl-carousel
                  mad-grid--cols-1
                  mad-owl-moving
                  nav-size-2
                  no-dots
                "
              >
                <div class="mad-col">
                  <div
                    class="mad-section with-overlay mad-colorizer--scheme-"
                    data-bg-image-src="assets/images/bedroom/bedroom1.png"
                  >
                    <!--================ Entity ================-->
                    <article class="mad-entity">
                      <h3 class="mad-entity-title">Superior Single Room</h3>
                      <p>
                        Donec porta diam eu massa. Quisque diam lorem, interdum
                        vitae, dapibus ac, scelerisque vitae, pede. Donec eget
                        tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                      </p>
                      <div class="btn-set justify-content-center">
                        <a
                          href="rooms_single_image_sidebar.html"
                          class="btn btn-big"
                          >Book Now</a
                        >
                        <a
                          href="rooms_single_slider_sidebar.html"
                          class="btn btn-big style-2"
                          >Details</a
                        >
                      </div>
                    </article>
                    <!--================ End of Entity ================-->
                  </div>
                </div>
                <div class="mad-col">
                  <div
                    class="mad-section with-overlay mad-colorizer--scheme-"
                    data-bg-image-src="assets/images/bedroom/bedroom2.png"
                  >
                    <!--================ Entity ================-->
                    <article class="mad-entity">
                      <h3 class="mad-entity-title">Superior Double Room</h3>
                      <p>
                        Donec porta diam eu massa. Quisque diam lorem, interdum
                        vitae, dapibus ac, scelerisque vitae, pede. Donec eget
                        tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                      </p>
                      <div class="btn-set justify-content-center">
                        <a
                          href="rooms_single_image_sidebar.html"
                          class="btn btn-big"
                          >Book Now</a
                        >
                        <a
                          href="rooms_single_slider_sidebar.html"
                          class="btn btn-big style-2"
                          >Details</a
                        >
                      </div>
                    </article>
                    <!--================ End of Entity ================-->
                  </div>
                </div>
                <div class="mad-col">
                  <div
                    class="mad-section with-overlay mad-colorizer--scheme-"
                    data-bg-image-src="assets/images/bedroom/bedroom3.png"
                  >
                    <!--================ Entity ================-->
                    <article class="mad-entity">
                      <h3 class="mad-entity-title">Family Room</h3>
                      <p>
                        Donec porta diam eu massa. Quisque diam lorem, interdum
                        vitae, dapibus ac, scelerisque vitae, pede. Donec eget
                        tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                      </p>
                      <div class="btn-set justify-content-center">
                        <a
                          href="rooms_single_image_sidebar.html"
                          class="btn btn-big"
                          >Book Now</a
                        >
                        <a
                          href="rooms_single_slider_sidebar.html"
                          class="btn btn-big style-2"
                          >Details</a
                        >
                      </div>
                    </article>
                    <!--================ End of Entity ================-->
                  </div>
                </div>
                <div class="mad-col">
                  <div
                    class="mad-section with-overlay mad-colorizer--scheme-"
                    data-bg-image-src="assets/images/bedroom/bedroom4.png"
                  >
                    <!--================ Entity ================-->
                    <article class="mad-entity">
                      <h3 class="mad-entity-title">Deluxe Double Room</h3>
                      <p>
                        Donec porta diam eu massa. Quisque diam lorem, interdum
                        vitae, dapibus ac, scelerisque vitae, pede. Donec eget
                        tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                      </p>
                      <div class="btn-set justify-content-center">
                        <a
                          href="rooms_single_image_sidebar.html"
                          class="btn btn-big"
                          >Book Now</a
                        >
                        <a
                          href="rooms_single_slider_sidebar.html"
                          class="btn btn-big style-2"
                          >Details</a
                        >
                      </div>
                    </article>
                    <!--================ End of Entity ================-->
                  </div>
                </div>
              </div>
            </div>
          </div>
  

      <!--================ End of About ================-->

      <!--================ Dinning ================-->
          <div
            class="
              mad-section mad-section-pb-mobile
              content-element-main
              no-pd
              mad-section--stretched-content
              mad-colorizer--scheme-color-4
            "
          >
            <div class="mad-entities mad-entities-reverse type-5">
              <!--================ Entity ================-->
              <div class="mad-entity">
                <div class="mad-entity-media">
                  <div
                    class="owl-carousel mad-simple-slideshow mad-grid with-nav nav-right"
                  >
                    <div class="mad-owl-item">
                      <img src="images/1032x688_img2.jpg" alt="" />
                    </div>
                    <div class="mad-owl-item">
                      <img src="images/1032x688_img5.jpg" alt="" />
                    </div>
                    <div class="mad-owl-item">
                      <img src="images/1032x688_img6.jpg" alt="" />
                    </div>
                  </div>
                </div>
                <div class="mad-entity-content">
                  <div class="mad-entity-pre-title">fresh anD tasty</div>
                  <h2 class="mad-entity-title">Rich Breakfast Buffet</h2>
                  <p>
                    Aenean nec eros. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Suspendisse
                    sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam
                    elit agna,endrerit sit amet, tincidunt ac, viverra sed,
                    nulla.
                  </p>
                  <a href="rooms_2_col_list_v1.html" class="mad-text-link">
                    <div class="link-container">
                      <span class="link-title1 title">Explore More</span>
                      <span class="link-title2 title">Explore More</span>
                    </div>
                  </a>
                </div>
              </div>
              <!--================ End of Entity ================-->
            </div>
          </div>



      <!--================ End of Dinning ================-->

      <!--================ Map  ================-->

          <div
            class="
          mad-section
          mad-section--stretched
          mad-colorizer--scheme-color-3
          with-svg-img
        "
        data-bg-image-src="images/footer_4_bg_img.svg"
          >
            <!--================ Testimonials ================-->
            <div class="mad-testimonials style-2">
              <div
                class="
                  mad-grid mad-grid--cols-1
                  owl-carousel
                  mad-dots-color-2
                  nav-size-2
                "
              >
                <!-- owl item -->
                <div class="mad-grid-item">
                  <div class="mad-testimonial">
                    <div class="mad-testimonial-rating">
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                    </div>
                    <div class="mad-testimonial-info">
                      <blockquote>
                        <p>
                          “Food - check. Accommodation - check. Scenery - check.
                          Yes I think this could be the most perfect place to be
                          in the world!”
                        </p>
                      </blockquote>
                    </div>
                    <div class="mad-author">
                      <div class="mad-author-info">
                        <span class="mad-author-name"
                          >Mark & Rebecca Johnson, CA, USA</span
                        >
                        <a href="#"><img src="images/visor2.png" alt="" /></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / owl item -->
                <!-- owl item -->
                <div class="mad-grid-item">
                  <div class="mad-testimonial">
                    <div class="mad-testimonial-rating">
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                    </div>
                    <div class="mad-testimonial-info">
                      <blockquote>
                        <p>
                          “An amazing location with a wonderful view and
                          first-class accommodation and service. A beautiful
                          landscape to explore.”
                        </p>
                      </blockquote>
                    </div>
                    <div class="mad-author">
                      <div class="mad-author-info">
                        <span class="mad-author-name"
                          >Amanda & Piter Smith, NY, USA</span
                        >
                        <a href="#"><img src="images/visor2.png" alt="" /></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / owl item -->
                <!-- owl item -->
                <div class="mad-grid-item">
                  <div class="mad-testimonial">
                    <div class="mad-testimonial-rating">
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                      <img
                        src="royal_beach_resort_svg/star.svg"
                        alt=""
                        class="svg"
                      />
                    </div>
                    <div class="mad-testimonial-info">
                      <blockquote>
                        <p>
                          “Food - check. Accommodation - check. Scenery - check.
                          Yes I think this could be the most perfect place to be
                          in the world!”
                        </p>
                      </blockquote>
                    </div>
                    <div class="mad-author">
                      <div class="mad-author-info">
                        <span class="mad-author-name"
                          >Mark & Rebecca Johnson, CA, USA</span
                        >
                        <a href="#"><img src="images/visor2.png" alt="" /></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / owl item -->
              </div>
            </div>
            <!--================ End of Testimonials ================-->
          </div>

      <!--================ End of Map==============-->
      <!--================ Footer ================-->
          <div class="mad-section no-pb mad-section--stretched-content-no-px mad-colorizer--scheme-color-">
            <div class="mad-title-wrap align-center">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="mad-pre-title">Packages</div>
                  <h2 class="mad-page-title">Self Catering & Fullboard Package</h2>
                  <p class="mad-text-medium">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse <br> sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet.</p>
                </div>
              </div>
            </div>
<div class="content-element-10">
              <div class="mad-entities type-7 item-col-2">
                <div class="mad-col">
                  <!--================ Entity ================-->
                  <article class="mad-entity">
                    <div class="mad-entity-media">
                      <a href="blog_single_sidebar.html"><img src="images/880x704_img1.jpg" alt=""></a>
                    </div>
                    <div class="mad-entity-content">
                      <h4 class="mad-entity-title">Self Catering Package</h4>
                      <p>
                        Donec porta diam eu massa. Quisque diam lorem, interdum
                        vitae, dapibus ac, scelerisque vitae, pede. Donec eget
                        tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                        Aliquam erat volutpat. Duis ac turpis. Donec sit amet
                        eros.
                      </p>
                      <div class="mad-entity-footer">
                        <div class="mad-pricing-value">
                          <span>From</span>
                          <span class="mad-pricing-value-num">ksh 75,000/<span>night</span></span>
                        </div>
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
                      <a href="blog_single_sidebar.html"><img src="images/880x704_img2.jpg" alt=""></a>
                    </div>
                    <div class="mad-entity-content">
                      <h4 class="mad-entity-title">Fullboard Package</h4>
                      <p>
                        Donec porta diam eu massa. Quisque diam lorem, interdum
                        vitae, dapibus ac, scelerisque vitae, pede. Donec eget
                        tellus non erat lacinia fermentum. Donec in velit vel
                        ipsum auctor pulvinar. Vestibulum iaculis lacinia est.
                        Aliquam erat volutpat. Duis ac turpis. Donec sit amet
                        eros.
                      </p>
                      <div class="mad-entity-footer">
                        <div class="mad-pricing-value">
                          <span>From</span>
                          <span class="mad-pricing-value-num">ksh 75,000/<span>night</span></span>
                        </div>
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
            </div>
          </div>
      <!--================ End of Map ================-->
      <!--================ Footer ================-->

      <?php include_once 'includes/footer.php';?>

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
    <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="vendors/retina.min.js"></script>
    <script src="vendors/sticky-sidebar.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/mad.customselect.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/countdown/jquery.plugin.min.js"></script>
    <script src="vendors/countdown/jquery.countdown.js"></script>
    <script src="js/modules/mad.alert-box.min.js"></script>
    <script src="js/modules/mad.newsletter-form.min.js"></script>
    <script src="js/modules/mad.sticky-header-section.min.js"></script>
    <script src="js/mad.app.js"></script>
  </body>
</html>

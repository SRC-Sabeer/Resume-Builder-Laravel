<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leven - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Leven - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css2/normalize.css" type="text/css">
    <link rel="stylesheet" href="css2/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css2/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css2/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css2/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body class="page">

    <div class="lm-animated-bg"></div>

    <!-- Loading animation -->
    <!-- <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div> -->
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
      <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        <!-- Header -->
        <header id="site_header" class="header">
          <div class="header-content clearfix">

            <!-- Text Logo -->
            <div class="text-logo">
              <a href="index.html">
                {{-- <div class="logo-symbol">SRC</div> --}}
                <div class="logo-text">{{$data[count($data) - 1]['fullname']}}</div>
              </a>
            </div>
            <!-- /Text Logo -->

            <!-- Navigation -->
            <!-- < -->

            <!-- Mobile Menu Toggle -->
            <a class="menu-toggle mobile-visible">
              <i class="fa fa-bars"></i>
            </a>
            <!-- Mobile Menu Toggle -->
          </div>
        </header>
        <!-- /Header -->
        {{-- @foreach ($data as $value) --}}
        <div id="main" class="site-main">
          <div id="main-content" class="single-page-content">
            <div id="primary" class="content-area">
              <div id="content" class="page-content site-content single-post" role="main">
                <!-- Home Page Top Part -->
                <div class="row">
                  <div class=" col-xs-12 col-sm-12">
                    <div class="home-content">
                      <div class="row flex-v-align">

                        <div class="col-sm-12 col-md-5 col-lg-5">
                          <div class="home-photo">
                            <div class="hp-inner" style="background-image: url(./img2/main_photo.jpg);">
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12 col-md-7 col-lg-7">
                          <div class="home-text hp-left">
                            <div class="owl-carousel text-rotation">
                              <div class="item">
                                <h4>Frontend-developer</h4>
                              </div>

                              <div class="item">
                                <h4>{{$data[count($data) - 1]['jobtitle']}}</h4>
                              </div>
                            </div>

                            <h1>{{$data[count($data) - 1]['fullname']}}</h1>
                            <p>{{$data[count($data) - 1]['description']}}</p>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Home Page Top Part -->

                <!-- Services -->


                </div>

                <div id="content" class="page-content site-content single-post" role="main">

                  <div class="row">

                    <div class=" col-xs-12 col-sm-6 ">
                      <div class="block-title">
                        <h2>Education</h2>
                      </div>

                      <div id="timeline_1" class="timeline clearfix">
                        <div class="timeline-item clearfix">
                            <h5 class="item-period current">{{$data[count($data) - 1]['edufromyear']}} - {{$data[count($data) - 1]['edutoyear']}}</h5>
                          <span class="item-company">{{$data[count($data) - 1]['fieldofstudy']}}</span>
                          <h4 class="item-title">{{$data[count($data) - 1]['school']}}</h4>
                          <p>{{$data[count($data) - 1]['degree']}}</p>
                        </div>


                      </div>
                    </div>

                    <div class=" col-xs-12 col-sm-6 ">
                      <div class="block-title">
                        <h2>Experience</h2>
                      </div>

                      <div id="timeline_2" class="timeline clearfix">
                        <div class="timeline-item clearfix">
                          <h5 class="item-period current">{{$data[count($data) - 1]['fromyear']}} - {{$data[count($data) - 1]['toyear']}}</h5>
                          <span class="item-company">{{$data[count($data) - 1]['experiencetitle']}}</span>
                          <h4 class="item-title">{{$data[count($data) - 1]['company']}}</h4>
                          <p>{{$data[count($data) - 1]['experiencedescription']}}</p>
                        </div>


                      </div>
                    </div>
                  </div>

                  <div class="row" style="justify-content: center;">
                    <div class=" col-xs-12 col-sm-4 ">
                      <div class="block-title">
                        <h2>Contact</h2>
                      </div>

                      <div id="info_list_1" class="info-list-w-icon">

                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="linecons linecons-phone"></i>
                          </div>
                          <div class="ci-text">
                            <h4>Phone</h4>
                            <p>{{$data[count($data) - 1]['phone']}}</p>
                          </div>
                        </div>

                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="linecons linecons-location"></i>
                          </div>
                          <div class="ci-text">
                            <h4>Address</h4>
                            <p>{{$data[count($data) - 1]['address']}}</p>
                          </div>
                        </div>

                        <div class="info-block-w-icon">
                          <div class="ci-icon">
                            <i class="linecons linecons-mail"></i>
                          </div>
                          <div class="ci-text">
                            <h4><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5d35383131321d38253c302d3138733e3230">Email</a></h4>
                            <p>{{$data[count($data) - 1]['email']}}</p>
                          </div>
                        </div>
                      </div>

                    </div>




                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="p-20"></div>

                      <div class="block-title">
                        <h2>Skills</h2>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-6 ">
                      <a href="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/11/1.jpg" class="lightbox">
                        <div class="certificate-item clearfix">
                          <div class="certi-logo">
                            {{-- <img src="./img2/clients/client-7.png" alt="logo"> --}}
                          </div>

                          <div class="certi-content">
                            <div class="certi-title">
                              <h4>Skills In: </h4>
                            </div>

                            <div class="certi-id">
                              <span>{{$data[count($data) - 1]['skill']}}</span>
                            </div>


                            <div class="certi-company">
                              <span></span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>

                    <div class=" col-xs-12 col-sm-6 ">
                      <a href="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/11/1.jpg" class="lightbox">
                        <div class="certificate-item clearfix">
                          <div class="certi-logo">
                            {{-- <img src="//lmpixels.com/wp/leven-wp/wp-content/uploads/2019/12/client-1.png" alt="logo"> --}}
                          </div>

                          <div class="certi-content">
                            <div class="certi-title">
                              <h4>Proficiency: </h4>
                            </div>

                            <div class="certi-id">
                              <span>{{$data[count($data) - 1]['proficiency']}}</span>
                            </div>



                            <div class="certi-company">
                              <span></span>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>

                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="p-40"></div>
                    </div>
                  </div>


                </div>

              </div>
            </div>
          </div>
          {{-- @endforeach --}}
        </div>

        <!-- Footer -->
        <footer class="site-footer clearfix">
          <div class="footer-social">
            <ul class="footer-social-links">
              <li>
                <a href="#" target="_blank">Twitter</a>
              </li>

              <li>
                <a href="#" target="_blank">FB</a>
              </li>

              <li>
                <a href="#" target="_blank">Insta</a>
              </li>
            </ul>
          </div>

          <div class="footer-copyrights">
            <p>© 2020 All rights reserved. Sabeer Faisal.</p>
          </div>
        </footer>
        <!-- /Footer -->

      </div>
    </div>

    <script src="js2/jquery-2.1.3.min.js"></script>
    <script src="js2/imagesloaded.pkgd.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src='js2/jquery.shuffle.min.js'></script>
    <script src='js2/masonry.pkgd.min.js'></script>
    <script src='js2/owl.carousel.min.js'></script>
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js2/jquery.googlemap.js"></script>
    <script src="js2/validator.js"></script>
    <script src="js2/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"8079b4a2bf786bb7","version":"2023.8.0","r":1,"b":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}' crossorigin="anonymous"></script>
</body>
</html>

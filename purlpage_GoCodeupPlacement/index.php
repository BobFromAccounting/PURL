<!-- <?php
  //******* PURL CODE - DO NOT EDIT ************
  $curl = curl_init();curl_setopt ($curl, CURLOPT_URL, 'https://purlapi.com/lp/index.php?ID='.$_GET["ID"].'&name='.$_GET["name"].'&page='.$_GET["page"].'&qr='.$_GET["qr"].'&mobile='.$mobile.'&test='.$_GET["test"].'&domain='.$_SERVER["HTTP_HOST"].'&r='.$_GET['r'].'&s='.$_GET['s'].'&useragent='.urlencode($_SERVER['HTTP_USER_AGENT']).'&uri='.urlencode($_SERVER['REQUEST_URI']).'&ip='.urlencode($_SERVER['REMOTE_ADDR'])); curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); $data = curl_exec ($curl); curl_close ($curl);  if(empty($data)) { echo 'PURL Not Found'; exit; } $visitor = json_decode($data); /*Begin Campaign Redirect*/if($visitor->{'purlpage'} && (!strstr($visitor->{'url'}, str_replace('www.','',$_SERVER['HTTP_HOST'])) || !strstr($_SERVER['REQUEST_URI'], $visitor->{'purlpage'}))) { header('Location: '.$visitor->{'url'}.'/'.$visitor->{'purlpage'}.'?ID='.$_GET["ID"].'&name='.$_GET["name"].'&page='.$_GET["page"].'&test='.$_GET["test"]); exit; } /*End Campaign Redirect*/ @session_start(); if($_GET['username']) $_SESSION['visitor']=$_GET['username']; if($visitor->{'login'} && ($_SESSION['visitor'] != $visitor->{'firstName'}.''.$visitor->{'lastName'})) { echo $visitor->{'login'}; exit; }//******* END PURL CODE ************
?> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Codeup + <?php echo $visitor->firstName; ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="cssload-container">
        <div class="cssload-loader">
          <div class="cssload-ball"></div>
        </div>
        <img src="images/codeup_logo_black.png" alt="" width="106" height="51"/>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <header class="page-header" id="home">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="100px" data-xxl-stick-up-offset="100px">
            <div class="rd-navbar-inner">
              <a class="" href="index.php"><img src="images/OfficialCodeupLogo.svg" alt="" width="200" height="100"/></a>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li><a href="#"><span class="rd-navbar-link-text">Welcome, <?php echo $visitor->{'firstName'}; ?>!</span></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="section parallax-container context-dark" data-parallax-img="images/codeup_leadership.jpg">
        <div class="parallax-content section-lg parallax-content-1 text-center text-md-left">
          <div class="container">
            <div class="row row-50 align-items-center justify-content-center justify-content-md-between">
              <div class="col-md-6 col-lg-5">
                <h2>Need a new job, <?php echo $visitor->{'firstName'}; ?>?</h2>
                <h4>Launch an exciting career in tech!</h4>
                <h6 class="text-width-small">Learn to code from home in just 6 months. Get hired, or your money back</h6>
              </div>
              <div class="col-sm-10 col-md-6">
                <div class="box-form-1">
                  <h5>Have questions, <?php echo $visitor->{'firstName'}; ?>?</h5>
                  <!-- RD Mailform-->
                  <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-20 gutters-30">
                      <div class="col-xl-6">
                        <div class="form-wrap form-wrap_icon linear-icon-envelope">
                          <input class="form-input" id="contact-email-4" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="contact-email-4">Your e-mail</label>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="form-wrap form-wrap_icon linear-icon-phone">
                          <input class="form-input" id="contact-phone-4" type="text" name="phone" data-constraints="@Numeric">
                          <label class="form-label" for="contact-phone-4">Phone number</label>
                        </div>
                      </div>
                    </div>
                    <button class="button button-primary" type="submit">Contact us</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About us-->
      <section class="bg-gray-lighter object-wrap" id="about">
        <div class="section-lg">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-md-6 col-lg-5">
                <h3 class="heading-decorated">Pick Your Next Career Path, <?php echo $visitor->{'firstName'}; ?>!</h3>
                <p class="blockquote">Don’t just get a job, launch a fulfilling career as a data scientist or web developer without even leaving your house. Due to COVID-19, our programs are now 100% virtual!</p>
                <div class="flex-column pb-5">
                  <h4>Full-Stack Web Development</h4>
                  <p class="blockquote">As our world only continues to go more virtual, the need for web developers only increases. Learn front-end design and back-end logic using in-demand technologies. Bring your ideas to life and make your mark on the most in-demand career in the country.</p>
                  <button class="button button-primary w-100" onClick="navigationCallback('https://codeup.com/wd-admissions')">Explore Web Development</button>
                </div>
                <div class="flex-column">
                  <h4>Data Science</h4>
                  <p class="blockquote">Become the expert. Companies have always relied on the numbers, but now, more than ever, they are looking to hire the people who know the numbers best. Learn the most important skills to make data-driven decisions for any company. Find patterns in data and influence business decisions.</p>
                  <button class="button button-primary w-100" onClick="navigationCallback('https://codeup.com/ds-admissions')">Explore Data Science</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-left bg-image" style="background-image: url(images/codeup_problemsolvers.jpg)"></div>
      </section>


      <section class="section section-md bg-default text-center" id="services">
        <div class="container">
          <h3 class="heading-decorated">Why Codeup?</h3>
          <div class="row row-50">
            <div class="col-sm-6 col-lg-3">
              <div class="thumbnail-classic-minimal"><img src="images/codeup_learning.jpg" alt="" width="300" height="225"/>
                <div class="caption">
                  <h5><a class="thumbnail-classic-title" href="#">Start Your Career Faster</a></h5>
                  <p class="blockquote">Spend 670 hours in live, full-time instruction over 22 weeks of full-time, fully immersive learning. That’s the same number of hours you’d spend getting a four year Bachelor’s Degree.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="thumbnail-classic-minimal"><img src="images/codeup_smile.jpg" alt="" width="300" height="225"/>
                <div class="caption">
                  <h5><a class="thumbnail-classic-title" href="#">Learn What Matters</a></h5>
                  <p class="blockquote">Learn the skills that employers are looking for. Expert instructors teach a curriculum that evolves with feedback from hiring managers.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="thumbnail-classic-minimal"><img src="images/codeup_allhands.jpg" alt="" width="300" height="225"/>
                <div class="caption">
                  <h5><a class="thumbnail-classic-title" href="#">Hands-on Experience</a></h5>
                  <p class="blockquote">Become a professional with plenty of hands-on project experience, all while building a portfolio to show employers.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="thumbnail-classic-minimal"><img src="images/codeup_hired.jpg" alt="" width="300" height="225"/>
                <div class="caption">
                  <h5><a class="thumbnail-classic-title" href="#">Get Hired</a></h5>
                  <p class="blockquote">Don’t do the job search alone. Get personalized career coaching, resume feedback, interview practice, access to our employer network, and more, even after graduation.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section-lg bg-image text-center bg-overlay-dark" style="background-image: url(images/codeup_futures.jpg)">
        <div class="container">
          <h3>Our Guarantee To You</h3>
          <p class="blockquote text-white">You will never be just a number to us. We are personally invested in your success before, during, and after Codeup. If you don’t get a job, that means we didn’t do ours.</p>
          <p class="blockquote text-white">So we guarantee that you will be hired within 6 months of graduating, or we will give you 100% of your tuition back.</p>
          <button class="button button-primary" onClick="navToTop()" type="button">Contact us</button>
        </div>
      </section>

      <section class="section section-md bg-default text-center" id="testimonials">
        <div class="container">
          <h3 class="heading-decorated">Testimonials</h3>
          <div class="row row-50">
            <video width="100%" playsinline  controls>
              <source src="assets/AbbyPerezFinal-HD1080p.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </section>

      <!-- Call to Action-->
      <section class="section-sm bg-accent text-center" id="contacts">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-xl-8 text-xl-left">
              <h4 class="heading-decoratedIf"><?php echo $visitor->{'firstName'}; ?>, we'll be there to help at every step toward launching your new career. </h4>
            </div>
            <div class="col-xl-2 text-xl-right"><button class="button button-primary" onClick="navToTop()" type="button">Contact Us</button></div>
          </div>
        </div>
      </section>


      <!-- Page Footer -->
      <footer class="footer-minimal">
        <div class="container">
          <ul class="list-xxs">
            <li>
              <dl class="list-terms-minimal">
                <dt>Phones</dt>
                <dd>
                  <ul class="list-semicolon">
                    <li><a href="tel:#">(210)-802-7289</a></li>
                  </ul>
                </dd>
              </dl>
            </li>
            <li>
              <dl class="list-terms-minimal">
                <dt>E-mail</dt>
                <dd><a href="mailto:#">info@codeup.com</a></dd>
              </dl>
            </li>
          </ul>
          <ul class="list-inline-sm footer-minimal__list">
            <li><a class="icon icon-sm icon-primary fa fa-facebook" href="#"></a></li>
            <li><a class="icon icon-sm icon-primary fa fa-linkedin" href="#"></a></li>
            <li><a class="icon icon-sm icon-primary fa fa-twitter" href="#"></a></li>
            <li><a class="icon icon-sm icon-primary fa fa-youtube" href="#"></a></li>
          </ul>
          <p class="rights"><span>Codeup</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.</p>
        </div>
      </footer>
    </div>

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      const navigationCallback = url => {
        return window.open(url, "_blank");
      }
      const navToTop = () => {
        return window.location.href = "#";
      }
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arches Basic</title>

  <!-- Bootstrap -->
  <link href="style.php/style.scss" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


</head>
<body>
  <header id="header-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="item-container">
            <a id="header-logo" href="/"><img class="center-block" src="assets/images/arches-insurance-logo.png" alt="Arches Insurance Logo" /></a>
          </div>

        </div><!-- end .col-md-2 -->
        <div class="col-md-10">
          <div class="item-container">
            <img id="header-tagline" src="assets/images/tagline.png" alt="Arches Insurance Logo" />
            <h3 id="member-number">Member Support <strong>1-855-488-0620</strong></h3>
          </div>

        </div>
      </div><!-- end .col-md-10 -->
    </div><!-- end .row -->
  </header><!-- end #header-wrapper -->
  <div class="container">
    <div id="side-navigation">

    </div>

  </div>
  <?php include('inc/page-banner.php'); ?>
  <main id="site-main">
    <div class="container">
      <div id="page-content">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
            <div class="row">
              <div class="col-md-4 col-bordered">
                <h2>Already a Member? Login</h2>
                <form id="login-form" class="basic-form" role="form">
                  <div class="form-group">
                    <label class="sr-only" for="username">Username</label>
                    <input id="username" name="username" class="form-control" type="text" placeholder="Username" />
                    <p class="help-block text-right"><a href="">Forgot Your Username?</a></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
                    <p class="help-block text-right"><a href="">Forgot Your Password?</a></p>
                  </div>
                  <div class="arches-actions">
                    <ul class="text-right">
                      <li><a href="">Login</a></li>
                      <li><a href="">Register</a></li>
                      <li><a href="">Want to Enroll Click Here</a></li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="col-md-4 col-bordered">
                <h2>Upcoming Events & Reminders</h2>
                <div id="upcoming events" class="events-date-list">
                  <div class="item">
                    <div class="item-date pull-left"><span class="month">Jan</span><br /><span class="day">10</span></div>
                    <div class="item-event pull-right">
                      <h3><a href="#">Scheduled Surgery</a><br />Jan 10, 2014</h3>
                      <p>A brief description of procedure and what to expect. Link to specialist providing service to get familar <a href="#">more...</a></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="item">
                    <div class="item-date pull-left"><span class="month">Jan</span><br /><span class="day">10</span></div>
                    <div class="item-event pull-right">
                      <h3><a href="#">Scheduled Surgery</a><br />Jan 1, 2014</h3>
                      <p>A brief description of procedure and what to expect. Link to specialist providing service to get familar <a href="#">more...</a></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer id="footer-wrapper">

  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript">
    var elementPosition = jQuery('#side-navigation').offset();

    jQuery(window).scroll(function(){
      if(jQuery(window).scrollTop() > elementPosition.top){
        jQuery('#side-navigation').css('position','fixed').css('top','0');
      } else {
        jQuery('#side-navigation').css('position','absolute').css('top','90px');
      }
    });
  </script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/javascript/bootstrap.js"></script>

</body>
</html>
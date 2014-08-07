    <footer id="footer-wrapper">
      <div id="footer-bar"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <ul id="footer-links" class="list-unstyled">
              <li><a href="#">Members</a></li>
              <li><a href="#">Providers</a></li>
              <li><a href="#">Employers</a></li>
              <li><a href="#">Brokers</a></li>
              <li><a href="#">Quality Assurance</a></li>
              <li><a href="#">Member Engagement</a></li>
              <li><a href="#">Underwriters</a></li>
              <li><a href="#">Executives</a></li>
            </ul>
            <div class="clearfix"></div>
            <p class="copyright">&copy; Copyright 2014 Arches Health Plan All Rights Reserved</p>
          </div>
        </div>
      </div>
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
      jQuery(function($) {
        $('.popover-dismiss').popover({
//          html: true
        })
      });
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/javascript/bootstrap.js"></script>

  </body>
</html>
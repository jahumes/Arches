<?php include('inc/page-head.php'); ?>
<?php include('inc/page-header.php'); ?>
<?php include('inc/page-sidebar.php'); ?>
<?php include('inc/page-banner.php'); ?>
<main id="site-main">
  <div class="container">
    <div id="page-content" class="home font-size-small">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
          <div class="row">
            <div class="col-md-4 col-bordered">
              <h2>Already a Member? Login</h2>
              <?php include('inc/login-form.php'); ?>
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
              <?php include('inc/contact-phones.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include('inc/page-footer.php'); ?>

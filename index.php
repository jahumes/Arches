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
              <div class="box tan-light">
                <h2 class="box-title">For Immediate Assistance</h2>
                <ul class="list-unstyled">
                  <li><span class="pull-left">Sign Up</span><span class="pull-right">801-770-1808</span></li>
                  <li><span class="pull-left">On-Exchange<br />Member Support</span><span class="pull-right"><br />1-855-488-0620</span></li>
                  <li><span class="pull-left">Off-Exchange<br />Member Support</span><span class="pull-right"><br />1-855-488-0619</span></li>
                  <li><span class="pull-left">Provider Support</span><span class="pull-right">1-855-488-0620</span></li>
                  <li><span class="pull-left">Pre-Authorization</span><span class="pull-right">1-800-879-0234</span></li>
                  <li><span class="pull-left">Pharmacy<br />Technical Support</span><span class="pull-right"><br />1-800-922-1557</span></li>
                </ul>
                <div class="clearfix"></div>
<!--                  <h2 class="box-title">Member Toolbox</h2>-->
<!--                  <ul class="list-unstyled">-->
<!--                    <li><h3><a href="#">My Health Guide</a></h3></li>-->
<!--                    <li><h3><a href="#">Calendar</a></h3></li>-->
<!--                    <li><h3><a href="#">Member Guide</a></h3></li>-->
<!--                    <li><h3><a href="#">Wellness Solutions</a></h3></li>-->
<!--                    <li><h3><a href="#">Benefits Usage</a></h3></li>-->
<!--                    <li><h3><a href="#">Prescription Information</a></h3></li>-->
<!--                    <li><h3><a href="#">Documents & Forms (pdf)</a></h3></li>-->
<!--                  </ul>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include('inc/page-footer.php'); ?>

<?php include('../inc/page-head.php'); ?>
<?php include('../inc/page-header.php'); ?>
<?php include('../inc/page-sidebar.php'); ?>
  <main id="site-main">
    <div class="container">
      <div id="page-content">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
            <div class="member-profile text-large">
              <h1 class="page-title">Member Profile</h1>
              <div class="breadcrumbs">
                <ul class="links list-unstyled list-inline pull-left">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Members</a></li>
                  <li><a href="#">Member Health Account</a></li>
                  <li class="current">Member Profile</li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                <div class="col-md-8 col-bordered col-bordered-lg">
                  <div class="box shadowed">
                    <form action="" class="form-horizontal">
                      <div class="form-group">
                        <label for="select-member" class="control-label col-sm-4">Personal Information</label>
                        <div class="col-sm-5">
                          <select id="select-member" class="form-control">
                            <option value="">Select an Member</option>
                            <option value="1">Member 1</option>
                            <option value="2">Member 2</option>
                            <option value="3">Member 3</option>
                          </select>
                        </div>
                      </div>
                    </form>
                    <div class="row">
                      <div class="col-sm-4 col-bordered solid-top col-bordered-sm">
                        <ul class="list-unstyled text-right">
                          <li>Name:</li>
                          <li>Age:</li>
                          <li>Gender:</li>
                          <li>Occupation:</li>
                          <li>Contact:</li>
                          <li>Address:</li>
                          <li>City, State, Zip:</li>
                          <li>E-Mail:</li>
                          <li>Expires On:</li>
                        </ul>
                      </div>
                      <div class="col-sm-8">
                        <ul class="list-unstyled">
                          <li>John Doe</li>
                          <li>30 Years</li>
                          <li>Male</li>
                          <li>Production Director</li>
                          <li>801-000-0000</li>
                          <li>131 Sample Street</li>
                          <li>Some City, State, 55555</li>
                          <li>test@companyname.com</li>
                          <li>12/1/2014</li>
                        </ul>
                      </div>
                    </div>
                    <h3>Emergency Contact Information</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Relation</th>
                          <th>Contact #</th>
                          <th>Address</th>
                        </tr>
                      </thead>
                      <tbody class="font-size-small">
                        <tr>
                          <td>Jane Doe</td>
                          <td>Spouse</td>
                          <td>801-000-0001</td>
                          <td>131 Sample Street, Some City, State, 55555</td>
                        </tr>
                        <tr>
                          <td>Mike Smith</td>
                          <td>Cousin</td>
                          <td>801-000-0001</td>
                          <td>131 Sample Street, Some City, State, 55555</td>
                        </tr>
                      </tbody>
                    </table>
                    <h3>My Team of Doctors</h3>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Speciality</th>
                          <th>Contact #</th>
                          <th>E-Mail Address</th>
                        </tr>
                      </thead>
                      <tbody class="font-size-small">
                        <tr>
                          <td>Jane Doe</td>
                          <td>Spinal</td>
                          <td>801-000-0001</td>
                          <td>131 Sample Street, Some City, State, 55555</td>
                        </tr>
                        <tr>
                          <td>Mike Smith</td>
                          <td>OBGY</td>
                          <td>801-000-0001</td>
                          <td>131 Sample Street, Some City, State, 55555</td>
                        </tr>
                      </tbody>
                    </table>
                    <h3>Medical History</h3>
                    <table class="table table-striped">
                      <tbody class="font-size-small">
                        <tr>
                          <td>Some medical history</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-4">
                  <?php include('../inc/member-toolbox.php'); ?>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include('../inc/page-footer.php'); ?>
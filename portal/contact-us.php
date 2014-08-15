<?php include('../inc/page-head.php'); ?>
<?php include('../inc/page-header.php'); ?>
<?php include('../inc/page-sidebar.php'); ?>
  <main id="site-main">
    <div class="container">
      <div id="page-content">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
            <div class="member-profile">
              <h1 class="page-title">Contact Us</h1>
              <div class="breadcrumbs">
                <ul class="links list-unstyled list-inline pull-left">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Members</a></li>
                  <li><a href="#">Communications</a></li>
                  <li class="current">Contact Us</li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                <div class="col-md-8 col-bordered">

                  <div class="box shadowed">
                    <div class="row">
                      <div class="col-md-10">
                        <h2>Fill in the information and one of our representatives will contact you.</h2>
                        <form action="">
                          <div class="form-group">
                            <input class="form-control" placeholder="Enter entire Conventry ID" type="text" required/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" placeholder="Postal or ZIP Code" type="text" required/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" placeholder="Date of Birth" type="text" required/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" placeholder="E-mail Address" type="text" required/>
                          </div>
                          <div class="form-group">
                            <input class="form-control" placeholder="Confirm E-mail Address" type="text" required/>
                          </div>
                          <div class="phone-number form-group">
                            <h4 class="title">Phone Number (Optional - 10 digits only)</h4>
                            (<input class="form-control" placeholder="###" type="text"/>)
                            <input class="form-control" placeholder="###" type="text"/> -
                            <input class="form-control" placeholder="####" type="text"/>
                          </div>

                          <div class="form-group">
                            <textarea placeholder="Questions or Comments" class="form-control"></textarea>
                          </div>
                          <ul class="list-unstyled action-list text-right">
                            <li><button>Submit</button></li>
                          </ul>
                        </form>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-md-4">
                  <?php include('../inc/contact-phones.php'); ?>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php include('../inc/page-footer.php'); ?>
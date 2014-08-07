<?php include('../inc/page-head.php'); ?>
<?php include('../inc/page-header.php'); ?>
<?php include('../inc/page-sidebar.php'); ?>
<main id="site-main">
    <div class="container">
        <div id="page-content">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
                    <div class="registration-page members-registration">
                      <h1 class="page-title">Members Registration</h2>
                        <div class="breadcrumbs">
                          <ul class="links list-unstyled list-inline pull-left">
                            <li><a href="#">Welcome to Arches Portal</a></li>
                            <li><a href="/registration/">Registration</a></li>
                            <li class="current">Step 2: Create Profile</li>
                          </ul>
                          <p class="message pull-left">(Enter your information)</p>
                          <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 position">
                                <div class="progress-registration">
                                    <div class="steps">
                                        <div class="icon"></div>
                                        <div class="separator"></div>
                                        <div class="icon active">
                                            STEP
                                            <span class="number">02</span>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="icon"></div>
                                    </div>
                                    <div class="step-names">
                                      <div class="name"><h4>Member Validation</h4></div>
                                      <div class="name active"><h4>Create Profile</h4></div>
                                      <div class="name"><h4>Confirm Download Armored App</h4></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 member-validation-form">
                                <form action="">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password"/>
                                    </div>
                                    <a href="">View Registration Demo</a>
                                    <div class="continue">
                                        <a href="confirm-download.php">
                                            <span class="block"></span>
                                            <span>CONTINUE</span>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('../inc/page-footer.php'); ?>
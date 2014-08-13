<?php include('../inc/page-head.php'); ?>
<?php include('../inc/page-header.php'); ?>
<?php include('../inc/page-sidebar.php'); ?>
    <main id="site-main">
        <div class="container">
            <div id="page-content">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
                        <div class="member-login">
                            <h1 class="page-title">Members Login</h1>
                            <div class="breadcrumbs">
                                <ul class="links list-unstyled list-inline pull-left">
                                    <li class="current">Welcome to Arches Portal</li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="box shadowed">
                                        <div class="row">
                                            <div class="col-md-6 member-validation-form col-bordered">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <h2>Already a Member? Login</h2>
                                                        <?php include('../inc/login-form.php'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-10 col-md-offset-1">
                                                      <h2>New User? Register Now</h2>
                                                      <p>Create an account to use the secure features and tools for managing your health information</p>
                                                      <br />
                                                      <ul class="list-unstyled action-list">
                                                        <li><a href="/registration">Register Now</a></li>
                                                        <li><a href="#">Take the Guided Tour</a></li>
                                                      </ul>
                                                      <br />
                                                      <p><a href="#">View the alternate text version</a></p>
                                                      <p><a href="#">View Registration Demo</a></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include('../inc/page-footer.php'); ?>
<?php include('../inc/page-head.php'); ?>
<?php include('../inc/page-header.php'); ?>
<?php include('../inc/page-sidebar.php'); ?>
<main id="site-main">
    <div class="container">
        <div id="page-content">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3">
                    <div class="registration-page members-registration">
                        <div class="row">
                            <h2>Members Registration</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 position">
                                <div class="progress-registration">
                                    <div class="steps">
                                        <div class="icon active">
                                            STEP
                                            <span class="number">01</span>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="icon"></div>
                                        <div class="separator"></div>
                                        <div class="icon"></div>
                                    </div>
                                    <div class="step-names">
                                        <div class="name">Member Validation</div>
                                        <div class="name">Create Profile</div>
                                        <div class="name">Confirm Download Armored App</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 member-validation-form">
                                <form action="">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Enter entire Conventry ID" type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Postal or ZIP Code" type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Date of Birth" type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail Address" type="text"/>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirm E-mail Address" type="text"/>
                                    </div>
                                    <div class="phone-number form-group">
                                        <div class="title">Phone Number (Optional - 10 digits only)</div>
                                        (<input class="form-control" placeholder="###" type="text"/>)
                                        <input class="form-control" placeholder="###" type="text"/> -
                                        <input class="form-control" placeholder="####" type="text"/>
                                    </div>
                                    <div class="help">
                                        <a href="">
                                            <span class="icon"></span>Need Help?
                                        </a>
                                    </div>
                                    <a href="">View Registration Demo</a>
                                    <div class="continue">
                                        <a href="create-profile.php">
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
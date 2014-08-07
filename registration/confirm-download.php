<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arches Basic</title>

    <!-- Bootstrap -->
    <link href="/style.php/style.scss" rel="stylesheet">

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
                    <a id="header-logo" href="/"><img class="center-block" src="/assets/images/arches-insurance-logo.png" alt="Arches Insurance Logo" /></a>
                </div>

            </div><!-- end .col-md-2 -->
            <div class="col-md-10">
                <div class="item-container">
                    <img id="header-tagline" src="/assets/images/tagline.png" alt="Arches Insurance Logo" />
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
<?php //include('inc/page-banner.php'); ?>
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
                                        <div class="icon"></div>
                                        <div class="separator"></div>
                                        <div class="icon"></div>
                                        <div class="separator"></div>
                                        <div class="icon active">
                                            STEP
                                            <span class="number">03</span>
                                        </div>
                                    </div>
                                    <div class="step-names">
                                        <div class="name">Member Validation</div>
                                        <div class="name">Create Profile</div>
                                        <div class="name">Confirm Download Armored App</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 member-validation-form">
                                <div class="congrats-message">
                                    <h3 class="title">Congratulations</h3>
                                    <span class="message">
                                        Your member profile has been created and you have confirmed.
                                        A password has been sent to the email that we have on file and matches the registration form.
                                        In order to view your account and member information,
                                        you will need to take a moment and download the Armor Application.
                                        It only takes a few minutes. Thank You.
                                    </span>
                                    <div class="download">
                                        <a href="#">
                                            <span class="glyphicon glyphicon-cloud-download"></span>
                                            <span>DOWNLOAD</span>
                                        </a>
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
<script src="/assets/javascript/bootstrap.js"></script>

</body>
</html>
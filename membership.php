<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include 'common/css.php'; ?>

    </head>
    <body>
        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">
            <div class="ie-dropdown-fix" >
                <!-- Header -->
                <?php include 'common/header.php'; ?>
                <!-- Header / End -->
                <!-- Navigation -->
                <?php include 'common/navbar.php'; ?>
                <!-- Navigation / End -->
            </div>
            <div class="row-fluid">
                <!-- Page Title -->
                <div id="page-title">
                    <h2>Membership</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid">
                <div class="span8">
                    <div class="headline"><h4>How to join</h4></div>
                    <p>You can join Grantham Running Club for just £20.00
                        If you join now you won't have to renew your membership until 31 March 2015</p>
                    
                    <p>We are affiliated to the Association of Running Clubs (ARC) which means:</p>
                    <ul class="arrow_list">
                        <li>You get £2 discount for most Road Races.</li>
                        <li>Access to all our training sessions.</li>
                        <li>You can compete on the Road, at X/C and Multi Terrain events.</li>
                        <li>You are covered under ARC's insurance policy for Legal Liability.</li>
                    </ul>
                    <p>England Athletics Competition License worth £10.00 included for 2014/15</p>
                    <p>
                    <p>Please download a membership form and either hand it to a club officer at a training session, 
                        or else post it to the address below. Please don't forget to include your payment. 
                        (cheques made payable to Grantham Running Club).</p>
                    <p>Post to:      
                        Membership Secretary, PO Box 6628, Grantham, Lincs, NG31 8TR</p>

                    <div class="headline"><h4>Our membership process</h4></div>
                    <p>Once we have your completed membership form and fee, either by hand or by post, you are deemed to be a member of GRC - simple. You can then enjoy all the benefits shown above and much more.</p>
                    <p>If you have put your email address on the membership form you will get confirmation of membership via an email from us.</p>
                    <p>Please note, as we are a low cost, light touch club we don't currently issue membership cards. Grantham Running Club is independent of any other clubs in the area with similar names.</p>
                    <p>We will contact you again just before your membership expires giving you the opportunity to maintain unbroken club benefits.</p>

                </div>

                <div class="span4">
                    <!-- Large Notice -->
                    <div class="well">
                        <h2>Membership form</h2>
                        <a href="docs/GRC_Membership_form_2014.pdf" target="_blank"><button type="button" class="btn">Download it here</button></a>
                        <a href="docs/GRC_Membership_form_2014.pdf" target="_blank"><img class="" src="images/icons/1391980583_pdf-16.png"></a>
                        <a href="docs/GRC_Membership_form_2014.doc" target="_blank"><img class="" src="images/icons/1391980675_Microsoft_Word-16.png"></a>
                    </div>
                    <div class="img-thumbnail">
                        <a href="docs/EnglandAthleticsCert2014.pdf"><img src="images/logos/EnglandAthletics445.jpg" target="_blank" /></a>
                    </div>
                </div>
                <!-- Standard Structure End -->
            </div>
        </div>
        <!-- Wrapper / End -->


        <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();
                
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");
            });
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
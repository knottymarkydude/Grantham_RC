<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include 'common/css.php'; ?>
        <?php include 'common/js.php'; ?>
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

            <!-- Content -->
            <div class="row-fluid">
                <!-- Page Title -->
                <div id="page-title">
                    <h2>About</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid">

                <!-- Standard Structure -->
                <div class="span8">
                    <div class="headline"><h4>Who we are?</h4></div>
                    <p>Grantham Running Club is a road and cross country running club for all abilities of adults. 
                        Since forming in 2010, we have been a vibrant, growing club with almost 100 members and six UKA trained coaches. 
                        We hope that joining not only improves the times and enjoyment from your running but also introduces you to new 
                        friends and the activities we take part in. In addition to training together five times a week and both organising and 
                        competing in many local events, we also host numerous social activities. If you want to come and run with us of find 
                        out more about what we do please email us.
                    </p>
                </div>

                <div class="span4">
                    <div class="headline "><h4>Join our Club</h4></div>

                    <!-- Large Notice -->
                    <div class="well">
                        <h4>We're looking for new members</h4>

                        <p>Do you want to start running? Looking for a friendly club, some moral support, and friendly faces?</p>

                        <a href="membership.php"><button type="button" class="btn">Come and join us now!</button></a>
                    </div>

                </div>
                <!-- Standard Structure End -->


            </div>
            <div class="row-fluid">
                <div class="headline marginbottom"><h4>The Club Board Members</h4></div>
            </div>
            <div class="row-fluid">
                <!-- About -->
                <div class="span3">
                    <img src="images/members/helen.jpg" alt="Helen" class="img-circle"/>
                    <div class="staff"><h5>Helen Brown</h5> <span>Chairperson</span><span><i class="icon-envelope"></i>&nbsp;chairperson@granthamrunningclub.co.uk</span></div>
                </div>

                <!-- About -->
                <div class="span3">
                    <div class="clear"></div>
                    <img src="images/members/lucy.jpg" alt="Lucy" class="img-circle" />
                    <div class="staff"><h5>Lucy Roberts</h5> <span>Vice Chairman</span><span><i class="icon-envelope"></i>&nbsp;vicechairperson@granthamrunningclub.co.uk</span></div>
                </div>

                <!-- About -->
                <div class="span3">
                    <img src="images/members/robert.jpg" alt="Robert" class="img-circle"/>
                    <div class="staff"><h5>Rob McArdle</h5> <span>Treasurer</span><span><i class="icon-envelope"></i>&nbsp;treasurer@granthamrunningclub.co.uk</span></div>
                </div>
                <!-- About -->
                <div class="span3">
                    <img src="images/members/gordon.jpg" alt="Gordon" class="img-circle"/>
                    <div class="staff"><h5>Gordon Geach</h5> <span>Secretary</span><span><i class="icon-envelope"></i>&nbsp;secretary@granthamrunningclub.co.uk</span></div>
                </div>

                <!-- About -->
                <div class="span3">
                    <img src="images/members/sarah.jpg" alt="Sarah" class="img-circle"/>
                    <div class="staff"><h5>Sarah High</h5> <span>Cross Country Captain</span><span><i class="icon-envelope"></i>&nbsp;xcc@granthamrunningclub.co.uk</span></div>
                </div>

                <!-- About -->
                <div class="span3">
                    <img src="images/members/matt.png" alt="Matt" class="img-circle"/>
                    <div class="staff"><h5>Matthew Kingston-Lee</h5> <span>Committee Member</span><span><i class="icon-envelope"></i>&nbsp;mkl@granthamrunningclub.co.uk</span></div>
                </div>    
            </div>

        </div>

        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();
                console.log(str);
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });

            })
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
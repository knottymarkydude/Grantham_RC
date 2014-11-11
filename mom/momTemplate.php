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
            <!-- Content -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title" >
                    <h2>October 2013 - </h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>October, 2013</span> <span><i class="icon-user"></i>Gwenda Williams</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <li><strong>Age:</strong>FV35</li>
                                    <li><strong>Occupation</strong>Community Nurse</li>
                                    <li><strong>Years Running:</strong></li>
                                    <li><strong>Favourite race:</strong></li>
                                    <li><strong>Least Favourite Race:</strong></li>
                                    <li><strong>Why did you start running?</strong></li>
                                    <li><strong>Injuries received?</strong></li>
                                    <li><strong>Furthest Distance ran?</strong></li>
                                    <li><strong>Trainers worn:</strong> </li>
                                    <li><strong>Favourite running kit?</strong> </li>
                                    <li><strong>Top tip from your experience:</strong></li>
                                    <li><strong>How many miles do you run per week?</strong></li>
                                    <li><strong>Other hobbies?</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201310_large.jpg" rel="image" title="Gwenda Williams"><img class="img-polaroid" src="../images/mom/201310_large.jpg" alt="Gwenda Williams" /><div class="image-overlay-zoom"></div></a></div>
                </div>
            </div>
            <!-- Wrapper / End -->
            <!-- Footer   -->
            <!-- Footer Start -->
            <div id="footer" class="container-fluid paddingbottom" >
                <div class="row-fluid">
                    <!-- About -->
                    <div class="span3">
                        <div class="footer-headline"><h4>About Us</h4></div>
                        <p>GRC was formed during the summer of 2010 by a group of runners 
                            ranging from the complete novice to the seasoned club runner.</p>
                        <p>
                            Since forming we have been a vibrant, growing club with almost 
                            100 members and six UKA trained coaches. We hope that joining not only 
                            improves the times and enjoyment from your running but also introduces 
                            you to new friends and the activities we take part in.
                        </p>
                    </div>
                    <!-- Photo Stream -->
                    <div class="span3">
                        <div class="footer-headline"><h4>Photo Stream</h4></div>
                        <div class="flickr-widget">
                            <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=103414438@N03"></script>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="span3">
                        <div class="footer-headline"><h4>Social</h4></div>
                        <div id="social">
                            <a href="https://www.facebook.com/GranthamRunningClub" title="Facebook" class="facebook">Facebook</a>
                            <a href="https://twitter.com/GranthamRC" title="Twitter" class="twitter">Twitter</a>
                        </div>
                    </div>
                    <!-- Footer / Bottom -->
                </div>
            </div>
            <div id="footer-copyright" class="container-fluid" style="background: #111;">
                <div class="row-fluid">
                    <div class="span12">
                        <div id="footer-bottom">
                            Grantham Running Club © Copyright 2014. All rights reserved.
                            <div id="scroll-top-top"><a href="#" title="Go to Top"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Javascript -->
            <?php include '../common/js.php'; ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    var str = location.href.toLowerCase();
                    console.log(str);
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
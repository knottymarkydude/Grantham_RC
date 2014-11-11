<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include '../common/css.php'; ?>
        <link rel="stylesheet" type="text/css" href="../css/table_themes/green/style.css">

    </head>
    <body>

        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">

            <div class="ie-dropdown-fix" >

                <!-- Header -->
                <?php include '../common/header.php'; ?>
                <!-- Header / End -->

                <!-- Navigation -->
                <?php include '../common/navbar.php'; ?>
                <!-- Navigation / End -->
            </div>

            <!-- Content -->


            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title" >
                    <h2>Coventry’s Half Marathon, Coventry, West Midlands</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >

                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On Sunday 23rd March 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>
                                    Matthew Kingston-Lee clocked the fastest half marathon time by a Grantham Running Club member in 2014 
                                    when he ran 1:17:32 at Coventry’s Half Marathon, held on Sunday 23rd March.</p>
                                <p>
                                    Returning to the city where he had lived for thirteen years before moving to Grantham in 2013, Matthew finished 
                                    fourteenth in a field of 2000 runners, who enjoyed a new traffic-free course and generally favourable weather 
                                    conditions, save for a stiff head wind for much of the opening half of the race.</p>
                                <p>
                                    It was a successful race for East Midlands based runners - the race was won by Notts AC / Nene Valley Harriers’ 
                                    Aaron Scott in 1:08:50. The winning lady was fellow Nene Valley Harrier Philippa Taylor, who finished in 1:21:53 
                                    and cemented her reputation as one of the fastest V45 runners in the country.</p>
                                </p>
                            </div>
                            <div class="post-content">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <!--<div class="thumbnail"><a href="../images/news/Abi-Parkrun-Newark-large.jpg" rel="image" title="Newark Parkrun Feb 1st 2014"><img class="img-polaroid" src="../images/news/Abi-Parkrun-Newark-small.jpg" alt="" /><div class="image-overlay-zoom"></div></a></div>-->
                </div>
            </div>
            <!-- Wrapper / End -->
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
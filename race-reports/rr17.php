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
                    <h2>Rotterdam Marathon, Rotterdam, The Netherlands</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 13 April, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        Matthew Kingston-Lee set the fastest time over the marathon distance this century by a Grantham club 
                                        athlete and a new Grantham Running Club record when he clocked 2:46:38 at the Rotterdam Marathon on 
                                        Sunday 13th April 2014. His time was a new personal best, bettering his old time, set when he finished 
                                        third in the 2011 Taunton Marathon, by nearly four minutes.
                                    </p>
                                    <p>
                                        On a sunny but windy day in the Netherlands second largest city, Matthew shrugged off recent injury 
                                        concerns and set about running an even 
                                        paced marathon, clocking the second half just 34 seconds slower than the opening 13.1 miles. His 
                                        hopes of a sub 2:45 time were tempered by 
                                        some injury niggles and the troublesome wind, which was in the runners faces for much of the second 
                                        half of the race. Matthew finished 180th 
                                        overall in a race with over 14,000 entrants and climbed to 11th in the UK rankings. The race was won 
                                        by Kenya’s Eliud Kipchoge in 2:05:00. </p> 
                                    <p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Rotterdam_Expocrop_2014_large.jpg" rel="image" title="Matthew Kingston-Lee at Rotterdam Marathon">
                            <img class="img-polaroid" src="../images/race-reports/Rotterdam_Expocrop_2014_small.jpg" alt="Matthew Kingston-Lee atRotterdam Marathon" />
                            <div class="image-overlay-zoom"></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Wrapper / End -->
            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Javascript -->
            <?php include '../common/js.php'; ?>
            <script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var str = location.href.toLowerCase();
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });

                    // extend the default setting to always include the zebra widget.
                    $.tablesorter.defaults.widgets = ['zebra'];
                    // extend the default setting to always sort on the first column
                    $.tablesorter.defaults.sortList = [[1, 0]];
                    // call the tablesorter plugin
                    $("table").tablesorter();
                    $("#race-reports").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
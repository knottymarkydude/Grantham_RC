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
                    <h2></h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >

                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>Robin Hood Marathon/ Half Marathon 2014</span></div>
                            <div class="post-description">
                                <h4>Nottingham</h4>
                                <p>Grantham Running Club’s Matthew Kingston-Lee smashed his long standing PB and set a new club record when 
                                    he finished 21st out of 7246 finishers at the Robin Hood (Nottingham) Half Marathon on Sunday 28th 
                                    September 2014. Crossing the finish line in a time of 1:15:29 he bettered his old PB, set at Milton Keynes 
                                    in 2010, by 1 minute 18 seconds, and bettered his old club record, set at Keyworth in December 2013, 
                                    by 1 minute 32 seconds. </p>
                                <p>The fast, mostly flat course, is ideal for fast times. It was a still day, but sunny and unseasonably warm, with temperatures soon rising to 
                                    20 degrees Celsius and higher. This made the going tough in the closing stages of the half marathon and for much of the race for those 
                                    electing to run the marathon.  </p>
                                <p>Stuart Sinclair had a fine run to break 90 minutes, clocking 1:29:36 to finish 259th. 
                                    Dean Riggall, Andrew Spencer, and Warren Stark also ran PB's. see table below for details</p>

                                <p>Suffering from injury it was a tough day for Wendy Tremain, who valiantly finished in 2:47:16, with husband Marc running 
                                    alongside in support, who was credited with a 2:51:33 finishing time.</p>
                                <p>Opting to take part in the marathon, Scott Jones had a cracking run in less than ideal conditions to finish in 3:26:27, bettering his 
                                    old PB, set earlier this year, also at Milton Keynes, by over 13 minutes, finishing a highly creditable 169th, with 1495 finishers.
                                </p> 
                                <p>The winner of the half marathon was Matthew Kimutai in 1:04:21; Gladys Kwambai the winning woman in 1:14:22. The marathon was won by 
                                    Peter Capdevila in 2:28:33, with Kay Walsha the winning lady in 2:54:06. </p>
                                </p>

                                <div class="thumbnail"><img class="img-polaroid" src="../images/race-reports/robinhoodhalfresults.png" /></div>

                                <p><a href="http://www.robinhoodhalfmarathon.co.uk/">Visit the site for more details</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/race-reports/rr30800.jpg" rel="image" title="Matt"><img class="img-polaroid" src="../images/race-reports/rr30270.jpg" alt="Matt" /><div class="image-overlay-zoom"></div></a></div>
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
                    $("#race-reports").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
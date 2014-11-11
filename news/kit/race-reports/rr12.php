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
                    <h2>Ashby 20 mile Road Race</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 09 March, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>
                                    A dozen athletes from Grantham Running Club took part in the 25th anniversary race in the Leicestershire Countryside on 
                                    Sunday, although it is normally regarded by many as the last warm-up race before the London Marathon changes in the 
                                    athletics calendar meant that it could only be used as a training run by those hoping to do the 26.2 miles in the next few weeks. 
                                    First home Paul Rushworth eased back a full five and a half minutes from his 2013 pace. Ben Hatherley was almost back to 
                                    his old form after an ankle injury as second GRC runner to finish followed by Andrew Pask enjoying one of his easier runs 
                                    after throttling back for the first ten miles. The ladies section was led home by Holly Durham standing in at the last minute 
                                    for her sister Penny, who had to withdraw with a knee injury, closely follow by Abi Schofield who became the first GRC runner 
                                    to top the UKA rankings as the fastest U23 in the country this year at 20 miles. Catherine Payne distance completed the 
                                    ladies team who were runners-up in the team event behind Bedford Harriers.  Here are some of the runners after the finish 
                                    (Left to Right) Catherine Payne, Ben Hatherley, Robert McArdle, Paul Rushworth, Ben Mason, Andrew Pask, Scott Jones 
                                    and Holly Durham
                                </p>
                            </div>
                            <div>
                                <?php include '../common/csvToTable.php'; ?>
                                <?php
                                jj_readcsv('../docs/Ashby_2014_Results.csv', true);
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Ashby_Finish_2014_large.jpg" rel="image" title="Ashby 20 mile Road Race">
                            <img class="img-polaroid" src="../images/race-reports/Ashby_Finish_2014_small.jpg" alt="Ashby 20 mile Road Race" />
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
                    console.log(str);
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });
                });

                // extend the default setting to always include the zebra widget. 
                $.tablesorter.defaults.widgets = ['zebra'];
                // extend the default setting to always sort on the first column 
                $.tablesorter.defaults.sortList = [[1, 0]];
                // call the tablesorter plugin 
                $("table").tablesorter();
                $("#race-reports").addClass("active");
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
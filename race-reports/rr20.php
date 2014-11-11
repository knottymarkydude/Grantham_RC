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
                    <h2>Horst Duathlon 2014</h2>
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
                                        Gerry Hyde of GRC was in action in Horst, Holland last week at the 
                                        <a href="http://www.triathlon.org/results/result/2014_horst_etu_powerman_long_distance_and_sprint_duathlon_european_champion/266894">2014 ETU Powerman Sprint Duathlon European Championships</a>. 
                                        This annual event comprises 5km run/20km bike/2.5km run with athletes from 28 nations competing for European Age Group medals. 
                                        Great Britain was represented by far the largest team with nearly 300 duathletes attending. On a tight but pan-flat course, 
                                        Gerry finished in a creditable 14th place in the 50-54 age group competing in a quality field of 22.
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Horst2_2014_gerry_large.jpg" rel="image" title="Gerry at Horst">
                            <img class="img-polaroid" src="../images/race-reports/Horst2_2014_gerry_small.jpg" alt="Gerry Hyde at Horst" />
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
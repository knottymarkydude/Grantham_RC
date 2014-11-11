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
                    <h2>Manchester Marathon 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 6 April, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        Around 7,000 ran in the marathon with thousands of others lining the course to cheer them on.
                                    </p>
                                    <p>
                                        Grantham Running Club’s Chairwoman Helen Brown praised the members who ran in their first major 
                                        marathon of this season in Manchester and thanked them for their hard work in winter training that 
                                        allowed them to achieve these times. All three seniors set substantial personal bests with first 
                                        home Andrew Past actually overtaking the 3:15 pace runner in the final mile. She also expressed 
                                        her pride in GRC having two ladies in the top 100 marathon runners in the UK rankings for the first 
                                        time with Catherine Payne also inside the top ten for her age group.
                                    </p>
                                </div>
                                <div>
                                    <?php include '../common/csvToTable.php'; ?>
                                    <?php
                                    jj_readcsv('../docs/Manchester_Results_2014.csv', true);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/ManchesterMarathon2014_large.jpg" rel="image" title="The photograph taken after the race at Old Trafford has (left to right) Catherine Payne, Robert McArdle, Ben Mason, Andrew Pask and Holly Durham">
                            <img class="img-polaroid" src="../images/race-reports/ManchesterMarathon2014_small.jpg" alt="Manchester Marathon 2014" />
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
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
                    <h2>Newton Faction 2014 Road Race</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 16 March, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <iframe width="560" height="315" src="//www.youtube.com/embed/2ekggXlHJ8E" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div>
                                    <p>
                                        Attracted by the biggest ever field of almost 500 starters and an unseasonably warm day Grantham Running Club had thirteen 
                                        runners in this local 13.1 mile race starting and finishing at the Grantham Sports Stadium. </p>
                                    <p>Despite a strong headwind in 
                                        the outward canal section good times were recorded by many of the runners with club claiming both individual and team prizes. 
                                        First of the GRC men home was Tom Fowler in just over 90 minutes follow by Ben Mason in a season’s best with the improving Rob 
                                        Howbrook setting a personal best to grab the third place in the men’s team race.</p>
                                    <p>The GRC ladies team went even better winning 
                                        the first prize with a team of Abi Schofield, who finished third lady overall, Penny Hodges, third in her age category and setting 
                                        her second PB in two days after running the Newark Parkrun the day before, and team Captain Sarah High. In his first time at the 
                                        distance Andrew MacAllister manage to beat his target of two hours and Wendy Tremain was almost five minutes inside her previous record.
                                    </p>
                                </div>
                                <div>
                                    <?php include '../common/csvToTable.php'; ?>
                                    <?php
                                    jj_readcsv('../docs/NewtonFractionResults.csv', true);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/NewtonFaction2014_large.jpg" rel="image" title="Newton Faction 2014">
                            <img class="img-polaroid" src="../images/race-reports/NewtonFaction2014_small.jpg" alt="Newton Faction 2014" />
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
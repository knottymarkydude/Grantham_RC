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
                    <h2>Equinox 24 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>Equinox 24, Belvoir Castle Estate, 20-21 September 2014</span> <span><i class="icon-user"></i>By <a href="#">Matthew</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        Grantham Running Club A Team were thrilled to finish second in their category and fourth overall at 
                                        Equinox 24, a 24 hour endurance race held on the Belvoir Castle Estate over the weekend of the 20th 
                                        and 21st September. 
                                    </p>
                                    <p>
                                        Although only its second year, Equinox 24 has already established itself as one of the country’s most popular endurance events. 
                                        Competitors try to complete as many laps of the approximately 10km multi-terrain course as possible from Midday on the Saturday 
                                        through to Midday on the Sunday. Entrants could choose whether to compete solo, or as pairs, or small or large teams. Grantham 
                                        Running Club entered two large mixed sex teams, each comprising eight runners. 
                                    </p>
                                    <p>
                                        Conditions were initially good for the early laps of the race, but those running through the night were 
                                        hampered initially by rain and then by mist, with only head torches to help navigate through the darkness. 
                                        Thankfully come dawn the mist cleared and runners enjoyed a sunny conclusion to the race.
                                    </p>
                                    <p>
                                        Grantham Running Club A Team, comprising: Jeremy Page; Stuart Sinclair; Mark Wilson; Gerry Hyde; Rob Howbrook; 
                                        Matthew Kingston-Lee; Holly Durham; and Ben Mason, overcame the challenging course and night time conditions, 
                                        sleep deprivation, numerous injuries, and general fatigue to complete 33 laps (approximately 190 miles), finishing 
                                        second in the Large Team Category behind overall winners Stilton Striders Team A, who amassed an impressive 35 laps. 
                                    </p>
                                    <p>
                                        Grantham Running Club B Team, comprising: Mark Hillson; Marc Tremain; Gordon Geach; Sarah High; John Bainbridge; 
                                        Helen Brown; Sam Bainbridge; and Lucy Roberts, performed equally admirably to finish eighth in the Large Team 
                                        Category, completing 29 laps and ending up just 25 seconds behind the seventh placed finishers. 
                                        There were 46 large teams taking part in the race; 37 small teams; 12 pairs; 25 solo females and 49 solo males. 
                                        The winning small team (the all-female Har-Kiss Honeys) completed 34 laps; the best pairs (RAF Lossiemouth A) 
                                        completed 26 laps; Kate Jayden was the winning solo lady with seventeen laps; and Steve Salter was the winning 
                                        male with 20 laps (over 115 miles) covered in 24 hours.
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/rr28800.jpg" rel="image" title="Equinox 2014">
                            <img class="img-polaroid" src="../images/race-reports/rr28270.jpg" alt="Equinox 2014" />
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
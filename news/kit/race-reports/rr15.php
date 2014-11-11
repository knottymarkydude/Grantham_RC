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
                    <h2>Lincoln 10k 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 6 April, 2014</span> <span><i class="icon-user"></i>By <a href="#">Mark</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        The 18th Active Nation City of Lincoln 10k Road Race began at Yarborough Leisure Centre and 
                                        ended at Lincoln Castle.</p>
                                    <p>
                                        Around 5,000 ran in the race with thousands of others lining the course to cheer them on.
                                        For more info click <a href="http://www.lincolnshireecho.co.uk/Lincoln-10K-results-race-round/story-20920291-detail/story.html#ixzz2yEWlJK3W" target="_blank">here</a>
                                    </p>

                                    <p>
                                        Four of Grantham Running Club’s athletes took part in the largest race in the county round the streets of Lincoln, 
                                        Despite a strong headwind in the last 2km both Paul Durham and Gwenda Williams set personal bests over the distance.
                                    </p>
                                    
                                    <p>
                                        Gerry Hyde came 2nd in the vets category, with a great time of 39:25, which puts him in a good position 
                                        to represent Team GB in <a href="http://www.britishtriathlon.org/ge-gb-teams/age-group/detail/2014-Horst-ETU-Sprint-Distance-Duathlon-European-Championships_3260" target="_blank">Horst</a> next weekend at the European Championships.
                                    </p> 
                                    <p>I quote "The wind was strong and straight in the face for the last mile or so, with an inclined, it hurt everyone I think".
                                    </p>

                                </div>
                                <div>
                                    <?php include '../common/csvToTable.php'; ?>
                                    <?php
                                    jj_readcsv('../docs/Lincoln_Results_2014.csv', true);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Lincoln10k_2014_large.jpg" rel="image" title="Lincoln 10k 2014">
                            <img class="img-polaroid" src="../images/race-reports/Lincoln10k_2014_small.jpg" alt="Lincoln 10k 2014" />
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
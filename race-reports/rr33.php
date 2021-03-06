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
                    <h2>Great Eastern Run 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 12 October, 2014</span><span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>
                                    In this year's Peterborough Half Marathon sponsored by Perkins, Abi Schofield led home over twenty members 
                                    of Grantham Running Club in a club ladies record time of 1:25:21. The attached photograph shows Abi with a 
                                    few metres to go at the finish. The large turnout from GRC to this popular local race produced a number of 
                                    other performances with eleven other personal best's including Rob Howbrook taking almost ten minutes off 
                                    his best time during the course of this year and Penny Hodges reducing hers by close to five.
                                </p>
                                
                                
                            </div>
                            
                             <div>
                                    <?php include '../common/csvToTable.php'; ?>
                                    <?php
                                    jj_readcsv('../docs/PerkinsGreatEasternRun2014.csv', true);
                                    ?>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/rr33800.jpg" rel="image" title="GRC at Peterborough">
                            <img class="img-polaroid" src="../images/race-reports/rr33270.jpg" alt="Desc" />
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
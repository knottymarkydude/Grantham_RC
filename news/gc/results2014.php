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
                <div id="page-title">
                    <h2>Results</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span10">

                    <div class="headline"><h4>2014 Final Results</h4></div>
                    <div class="pricing-table span12 ">                    
                            <?php include '../common/csvToTable.php'; ?>
                            <?php
                            jj_readcsv('../docs/Grantham_Cup_Results_2014_Final.csv', true);
                            ?>
                    </div>

                </div>
                <div class="span2">
                    <?php include '../common/gcmenu.php'; ?>
                    <hr />
                    <div class="picture">
                        <a href="../images/events/GC_Winner_2014_Man_large.jpg" rel="image" title="2014 Mens Winner - Ben Livesey">
                            <img src="../images/events/GC_Winner_2014_Man_small.jpg" alt="2014 Mens Winner - Ben Livesey"/>
                            <div class="image-overlay-zoom"></div></a>
                    </div>
                    <div class="picture">
                        <a href="../images/events/GC_Winner_2014_Lady_small.jpg" rel="image" title="2014 Ladies Winner - Lorraine Porter">
                            <img src="../images/events/GC_Winner_2014_Lady_large.jpg" alt="2014 Ladies Winner - Lorraine Porter"/>
                            <div class="image-overlay-zoom"></div></a>
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
                    $.tablesorter.defaults.sortList = [[7, 0]];
                    // call the tablesorter plugin 
                    $("table").tablesorter();

                });
            </script>
            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Summer Solstice Results 2014</title>
        <?php include '../common/css.php'; ?>
        <link rel="stylesheet" type="text/css" href="../css/table_themes/green/style.css">
    </head>
    <body>

        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">

            <div class="ie-dropdown-fix" >

                <?php include '../common/header.php'; ?>

                <?php include '../common/navbar.php'; ?>
                <!-- Navigation / End -->
            </div>

            <div class="row-fluid">
                <div id="page-title" >
                    <h2>Summer Solstice Results 2014</h2>
                </div>

            </div>

            <div class="row-fluid " >
                <div class="span12">

                    <div>
                        <p>Thank you all who entered the race, and I hope you enjoyed it as much as we did.</p>

                        <p>We have the finalised results out now.</p>
                        <p>Please note that the division relates to prize category not age.</p>
                    </div>


                    <div class="headline"><h4>2014 Final Results</h4></div>
                    <div class="pricing-table">                    
                        <?php include '../common/csvToTable.php'; ?>
                        <?php
                        jj_readcsv('../docs/sumsol/SummerSolFinalResults2014.csv', true);
                        ?>
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
                        $("#sumsol").addClass("active");
                    });

                    // extend the default setting to always include the zebra widget. 
                    $.tablesorter.defaults.widgets = ['zebra'];
                    // extend the default setting to always sort on the first column 
                    $.tablesorter.defaults.sortList = [[0, 0]];
                    // call the tablesorter plugin 
                    $("table").tablesorter();

                });
            </script>
            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
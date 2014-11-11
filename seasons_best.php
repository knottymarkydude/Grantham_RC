<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include 'common/css.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/table_themes/green/style.css">

    </head>
    <body>

        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">

            <div class="ie-dropdown-fix" >

                <!-- Header -->
                <?php include 'common/header.php'; ?>
                <!-- Header / End -->

                <!-- Navigation -->
                <?php include 'common/navbar.php'; ?>
                <!-- Navigation / End -->

            </div>

            <!-- Fluid  Container -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title">
                    <h2>Seasons Best</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <!-- 9 Columns -->
            <div class="span9">
                <div class="headline"><h4>Marathon</h4></div>
                <div id="portfolio-wrapper">

                    <?php include 'common/csvToTable.php'; ?>
                    <?php
                    jj_readcsv('docs/SeasonsBestMarathon2014.csv', true);
                    ?>

                </div>
            </div>




            <!-- 9 Columns End -->
        </div>

        <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();

                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");

                // extend the default setting to always include the zebra widget.
                $.tablesorter.defaults.widgets = ['zebra'];
                // extend the default setting to always sort on the first column
                $.tablesorter.defaults.sortList = [[1, 0]];
                // call the tablesorter plugin
                $("table").tablesorter();
            });
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
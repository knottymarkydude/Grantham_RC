<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include '../common/css.php'; ?>

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
                    <h2>Grantham Cup</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span10">

                    <div class="headline"><a id="gc"><h4>Grantham Cup Maps</h4></a></div>

                    <div id="portfolio-wrapper">

                        <!-- 1/2 Column -->
                        <div class="span4 portfolio-item race-reports">
                            <div class="picture">
                                <a href="../images/events/grantham-cup-course-map.jpg" rel="image" title="Grantham Cup course">
                                    <img src="../images/events/grantham-cup-course-map.jpg" alt="Grantham Cup course"/>
                                    <div class="image-overlay-zoom"></div></a>
                            </div>
                            <div class="item-description alt">
                                <h5>Grantham Cup course map</h5>

                            </div>
                        </div>

                        <!-- 1/2 Column -->
                        <div class="span4 portfolio-item race-reports">
                            <div class="picture">
                                <a href="../images/events/gc_location_map.jpg" rel="image" title="Grantham Cup Location Map">
                                    <img src="../images/events/gc_location_map.jpg" alt="Grantham Cup Location Map"/>
                                    <div class="image-overlay-zoom"></div></a>
                            </div>
                            <div class="item-description alt">
                                <h5>Grantham Cup location map</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="span2">
                    <?php include '../common/gcmenu.php'; ?>
                </div>
            </div>
            <!-- Wrapper / End -->
            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Javascript -->
            <?php include '../common/js.php'; ?>
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
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
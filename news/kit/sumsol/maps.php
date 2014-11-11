<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Summer Solstice</title>
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

            <div class="row-fluid " >
                <div class="span10">

                    <div id="portfolio-wrapper">
                        <div class="span4 portfolio-item">
                            <div class="picture">
                                <a href="../images/events/New_Solstice_Course_large.jpg" rel="image" title="Summer Solstice course">
                                    <img src="../images/events/New_Solstice_Course_large.jpg" alt="Summer Solstice course"/>
                                    <div class="image-overlay-zoom"></div></a>
                            </div>
                            <div class="item-description alt">
                                <h5>Summer Solstice course map</h5>
                            </div>
                        </div>
                        <div class="span4 portfolio-item">
                            <div class="picture">
                                <a href="../images/events/solstice-car-park-map.png" rel="image" title="Summer Solstice Car Park">
                                    <img src="../images/events/solstice-car-park-map.png" alt="Summer Solstice Car Park"/>
                                    <div class="image-overlay-zoom"></div></a>
                            </div>
                            <div class="item-description alt">
                                <h5>Summer Solstice Car Park</h5>
                            </div>
                        </div>
                    </div>


                </div>
                 <div class="span2">
                    <?php include '../common/sumsolmenu.php'; ?>
                </div>
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
                c
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#sumsol").addClass("active");
            });
        </script>

        <!-- Piwik --> 
        <?php include '../common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
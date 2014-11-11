<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include 'common/css.php'; ?>

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


            <!-- Content -->

            <!-- Fluid  Container -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title">
                    <h2>Gallery </h2>
                </div>
                <!-- Page Title / End -->


            </div>

            <!-- Fluid  Container -->
            <!-- Small images 150 x 150, Large images 640 x 425 -->

            <div class="row-fluid">

                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/gg1.jpg" rel="image" title="Arthur Short"><img src="images/gallery/small/gg1.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Arthur</a></h5>
                        <p>at Grace's Gallop</p>
                    </div>
                </div>
                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/gg2.jpg" rel="image" title="Gerry Hyde"><img src="images/gallery/small/gg2.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Gerry</a></h5>
                        <p>at Grace's Gallop</p>
                    </div>
                </div>
                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/ce2013.jpg" rel="image" title="Gerry Hyde"><img src="images/gallery/small/ce2013.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Christmas Eve 2013</a></h5>
                    </div>
                </div>
                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/ce2013pr.jpg" rel="image" title="Gerry Hyde"><img src="images/gallery/small/ce2013pr.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Paul (I think)</a></h5>
                        <p><a href="#">at the Christmas Eve run</a></p>
                    </div>
                </div>
                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/grc_cc_ladies.jpg" rel="image" title="Ladies Cross Country"><img src="images/gallery/small/grc_cc_ladies.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Ladies cross country team</a></h5>

                    </div>
                </div>
                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/tr2013_team.jpg" rel="image" title="Thunder Run Team"><img src="images/gallery/small/tr2013_team.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Thunder Run Team 2013</a></h5>

                    </div>
                </div>
                <div class="span2">
                    <div class="picture"><a href="images/gallery/large/tr2013_scott.jpg" rel="image" title="Thunder Run - Scott"><img src="images/gallery/small/tr2013_scott.jpg" alt=""/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description">
                        <h5><a href="#">Scott</a></h5>
                        <p><a href="#">at the Thunder Run</a></p>
                    </div>
                </div>

            </div>
            <!-- Fluid  Container End -->

        </div>
               <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
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
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
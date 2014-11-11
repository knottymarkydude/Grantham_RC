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
                    <h2></h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >

                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 28th Sept, 2014</span> <span><i class="icon-user"></i>By <a href="#">Mark</a></span></div>
                                 <div class="post-description">
                                <h4>West Pinchbeck 10k</h4>
                                <p>A fast flat 10k course situated somewhere near Spalding.</p>
                                
                                <p>It was an unusually warm and sunny day, in the early twenties, by the time the race started on a narrow lane by the 
                                primary school, where 224 people pressed their timers and off they went</p>
                                
                                <p>Ben Hatherley set a good early pace, and came in 25th with a time of 40:22, a Seasons Best. Holly Durham paced herself
                                well, to come in 40th place, with a time of 42:29, followed by Mark Wilson in 45th place with a time of 42:48 (PB). </p>
                                
                                <p>Nick Payne ran a PB to come in 77th, in a time of 45:40, followed by Louise Payne in 136th place with a time of 
                                52:25. Paul Durham came in 141st place with a fast sprint finish, in a time of 53:05.</p>
                                
                                <div class="thumbnail"><img class="img-polaroid" src="../images/race-reports/WestPinchbeck10kResults2014.png" /></div>

                                
                                <p><a href="http://www.spaldingtri.co.uk/cms/cmsfiles/WEST%20PINCHBECK%2010k%202014%20Results.pdf">Full results here</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/race-reports/rr31800.jpg" rel="image" title="Ben"><img class="img-polaroid" src="../images/race-reports/rr31270.jpg" alt="Ben" /><div class="image-overlay-zoom"></div></a></div>
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
                    $("#race-reports").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
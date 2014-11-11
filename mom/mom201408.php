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
                <div id="page-title" >
                    <h2>August 2014 - Matthew Kingston-Lee</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>August, 2014</span> <span><i class="icon-user"></i>Matthew Kingston-Lee</span></div>
                            <div class="post-description">
                                <p>Matthew Kingston-Lee is the Grantham Running Club Member of the Month for August after he broke 
                                    two Personal Bests and set two new club records at races in July.</p>

                                <p>At the Notts AC Five Mile race on July 20th, Matthew took 26 seconds off his old personal best, clocking 27:53. 
                                    Better was to come six days later on July 26th at the third race of the Lincoln 
                                    Wellington AC 5K series, when he knocked 50 seconds off his old PB, breaking the 17 minute barrier with 16:55. 
                                </p>
                                <p>The results came as a pleasant surprise for Matthew who, at the start of the month, had no intention of racing in July. 
                                    Should he beat his half marathon personal best of 1:16:47 at the forthcoming Robin Hood Half Marathon, he will have set 
                                    personal bests (and Grantham Running Club records) at every distance he has raced over in the past 12 months 
                                    (5k, 5 miles, 10k, 10 miles, 15 miles, 30k and the Marathon). 
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201408_large.jpg" rel="image" title="Matthew Kingston-Lee"><img class="img-polaroid" src="../images/mom/201408_small.jpg" alt="Matthew Kingston-Lee"/><div class="image-overlay-zoom"></div></a></div>

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
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });
                    $("#about").addClass("active");
                    $("#moms").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
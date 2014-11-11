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
                    <h2>Belvoir Challenge 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 01 March, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>
                                    A crisp blue sky and some early spring sun welcomed the competitors to this year’s Belvoir Challenge.  
                                    Seven members from Grantham Running Club joined the several hundred runners and walkers gathered outside 
                                    Harby School on Saturday 1 March for the start of this event, now in its 24th year.  The 16 and 26 mile routes 
                                    provide some challenging terrain and the expectation of shin deep mud.  The wet winter meant that this year’s 
                                    event did not disappoint in that respect.  First home for Grantham in the 16 mile race was GB triathlete 
                                    Gerry Hyde with a commendable 23rd place.  This was despite him losing his trainers in the mud several times 
                                    on the course.  Gerry was followed in by Marc Tremain, competing in his first Challenge, who narrowly missed 
                                    out on a top 100 finish. In the 26 mile race, Paul Rushworth was first home in 30th position.  Marathon 
                                    centurion Jez Page, returning for his first Challenge since major knee surgery, continued to defy medical 
                                    science finishing in 80th.  Also running in the 16 mile race were Mark Hillson, Penny Hodges and Louise Hyde. 
                                </p>
                                <p>
                                    Results:<br/>
                                    16 mile Gerry Hyde 2:12:39, Marc Tremain 2:39:12, Mark Hillson 2:41:46, Penny Hodges 2:56:28, Louise Hyde 3:04:22<br/>
                                    26 mile Paul Rushworth 4:08:25, Jez Page 4:35:32<br/>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Jez_Belvoir_large.jpg" rel="image" title="Jez Page">
                            <img class="img-polaroid" src="../images/race-reports/Jez_Belvoir_small.jpg" alt="Jez Page" />
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
                $("#race-reports").addClass("active");
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
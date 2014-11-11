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
                    <h2>Nos Galan 10k Race</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 31 December, 2013</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>On New Years Eve Grantham RC runner, Andrew Pask took part in the historic Nos Galan Races. 
                                    10,000 spectators lined the streets of the small South Wales town of Mountain Ash for this year’s 5K Races. 
                                    The event commemorates the life of legendary Welsh runner Guto Nyth Bran, who died in 1737 from an over 
                                    zealous congratulatory slap on the back. Each year this race is attended by a mystery runner, who this year 
                                    turned out to be Wales and Lions Rugby captain Alun Wyn Jones. Before the race the a torch lighting ceremony, 
                                    fireworks and a funfair helped keep the spectators entertained during a cold and rainy evening.</p>

                                <p>This year 1200 runners took part in the races which consist of Juniors, Elite and Fun runners. Andrew's official time for the 
                                    Nos Galan Elite race was a speedy 20:06 and placed him 110th in his first ever 5K race.</p>
                                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Andrew_Nos_Race_large.jpg" rel="image" title="Andrew Pask just before the historic Nos Galan Race">
                            <img class="img-polaroid" src="../images/race-reports/Andrew_Nos_Race_large.jpg" alt="" />
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
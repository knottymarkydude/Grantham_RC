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
                    <h2>Grace’s Gallop 10k Race</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 24 November, 2013</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>The UK Chasers Cross Country course at Great Ponton was the venue for this memorial race that attracted most of the 
                                    greats from Grantham running over the past 40 years to pay tribute to Grace Plant, a popular runner and coach who 
                                    passed away this autumn.</p>

                                <p>Despite being organised at short notice the event attracted just under 200 entries with a starting line up including the legendary Ian Fisher putting 
                                    on a Grantham Vest for the first time in 15 years for this run. Also coaxed out of retirement were Jan Anderson, one of the best veteran female runners 
                                    the town has ever seen and Dave Madge who wasn’t that far off the pace.  For those who no longer ran such as Chris Cant and Sue Britain there was the 
                                    option of the walk whilst teammates who were injured or caught up in the organisation such as Tony, Madge, Paul Davidson, John Bainbridge and John 
                                    Ellerby had to be content with cheering on from the side of the course.</p>

                                <p>As you would expect many of Grace’s close friends finished at the sharp end of the field with Vicki Greenhall finishing as first lady and Sarah Walker 
                                    as first Female Veteran. Local ladies Emma Johnston and Penny Hodges finished second and third. In the men’s race we saw the promising Junior, Jake 
                                    Richardson superbly represent the next generation of local runners with an outright win, Matthew Kingston-Lee was runner up and first senior with the 
                                    evergreen Arthur Short in third place as first veteran. Steve Gould, now representing Wigan Phoenix was first MV50 just a few paces in front of Grace’s 
                                    brother, Dave Philp, representing East Cornwall Harriers. In 13th place overall and first MV60 was Steve “Bunny” Bunn now running for Harborough A C. 
                                    Also running were 1980’s marathon star Phil Hall, Grace’s training partner Caryn Garner and Marathon de Sable finisher Adam Foyster.</p>

                                <p>Race Director, Gordon Geach, commented that he was astounded by the quality of the field and thanked those track and road runners for risking their 
                                    fitness in a hard cross country event.</p>

                                <p>The photos are (Left to right) Matthew Kingston-Lee, Jake Richardson, and Arthur Short. The other is a group photo of some of the Athletes and 
                                    helpers after the presentation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/First_three_large.jpg" rel="image" title="(Left to right) Matthew Kingston-Lee, Jake Richardson, and Arthur Short">
                            <img class="img-polaroid" src="../images/race-reports/First_three_large.jpg" alt="" />
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
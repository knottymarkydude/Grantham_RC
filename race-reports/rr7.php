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
                    <h2>England Athletics National Cross Country Championships</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 22 February, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>
                                    Grantham Running Club made its first appearance at the National Cross Country Championships last Saturday.  
                                    The event, held at Wollaton Park in Nottingham, was host to nearly 8,000 runners from clubs around the country who were taking 
                                    part in the world's oldest and biggest event of its kind. There were championship races for under 13s through to seniors, and 
                                    GRC entered both a senior women’s team and a senior men’s team. It was sunny but windy day and there was a great atmosphere.  
                                    The huge field that lined up for the senior men’s race was spectacular to see, with 1657 finishers and in the senior women’s championship 
                                    708 ladies completed the distance.  Despite a course that was quite testing in places, good performances were put in by all the Grantham 
                                    runners – for the women’s team, Abi Schofield (finishing 220th), Emma Johnston, Sarah High, Lucy Roberts, Suzanne Britz and Wendy 
                                    Tremain, and for the men,  Scott Jones, Gordon Geach, Ben Mason, Jez Page, Mark Tremain and Andrew Pask.  
                                    The women’s team finished 63rd overall and both teams enjoyed the experience of competing in such a fantastic event. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/LadiesTeamCrossCountry-large.jpg" rel="image" title="Ladies Team Cross Country">
                            <img class="img-polaroid" src="../images/race-reports/LadiesTeamCrossCountry-small.jpg" alt="Ladies Team Cross Country" />
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
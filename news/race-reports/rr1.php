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
                    <h2>Lincolnshire Cross Country Championships 2013</h2>
                </div>
                <!-- Page Title / End -->
            </div>


            <div class="row-fluid " >


                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 8 December, 2013</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>Grantham Running Club’s Abi Schofield came 3rd in the 
                                    Senior Women’s category in a time of 24:51 at the Lincolnshire Cross Country Champions event in Louth on the 8th December. 
                                    The course was challenging being mostly around the edge of fields with long uphill slopes and a final uphill section 
                                    at the end to the finish line. This secured Abi an overall 2nd place tie in the 2013 Championships 
                                    with two 3rd places and one 4th place in the qualifying events.</p>

                                <p>The Senior Woman’s Team finished 3rd overall in the same championships and comprised of Sarah High, 
                                    Abi Schofield, Wendy Tremain, Gwenda Williams, Catherine Payne, Rebecca Jones and Jessica Glading</p>
                                <br/><br/><br/><br/><br/><br/><br/><br/><br/>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/race-reports/Abi_Cross_Country_large.jpg" rel="image" title="Abi Schofield at Lincolnshire Cross Country Championships 2013"><img class="img-polaroid" src="../images/race-reports/Abi_Cross_Country_large.jpg" alt="" /><div class="image-overlay-zoom"></div></a></div>

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
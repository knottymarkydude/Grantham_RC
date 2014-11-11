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
                    <h2>GRC&apos;s New Committee</h2>
                </div>
                <!-- Page Title / End -->
            </div>


            <div class="row-fluid " >


                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 23 October, 2013</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>Following our AGM we are delighted to welcome some new faces to our team. Matt Kingston-Lee (pictured right) will bring with him a wealth of running 
                                    experience as a top class club athlete and also has previously help organise a running club. With a 77 minute recent half Matt is in good racing form.</p>

                                <p>We have also drafted in Mark Wilson (Pictured right) to give us fresh ideas on how to handle the results data we generate and how we use our website / blog to communicate to our members. 
                                    He is currently testing a new website which you can get a preview of if you click on the diary link to the right of this page. Mark is currently out 
                                    with a foot injury that refuses to clear up but prior to that he was in good shape with a sub 12 hour Ironman and cycling coast to coast in a day during 2013.
                                    Ben Mason has been elected auditor for next year's accounts.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/news/MattKL.jpg" rel="image" title="Matthew"><img class="img-polaroid" src="../images/news/MattKL.jpg" alt="" /><div class="image-overlay-zoom"></div></a></div>
                    <div class="thumbnail"><a href="../images/news/mw_im_run_large.jpg" rel="image" title="Mark"><img class="img-polaroid" src="../images/news/mw_im_run_small.jpg" alt="" /><div class="image-overlay-zoom"></div></a></div>
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
                    $("#news").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
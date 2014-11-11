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
                    <h2>September 2014 - Ruth Dunstan</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>September, 2014</span> <span><i class="icon-user"></i>Ruth Dunstan</span></div>
                            <div class="post-description">
                                <p>Ruth Dunstan has been selected as Member of the Month for September
                                    following her recent sharp improvement in performances. Although Ruth has
                                    been running for six years 2014 it was at the Bassingham Bash that she took
                                    a major step forward</p>
                                <ul class="star_list">                           
                                    <li><strong>Age:</strong>FV35</li>
                                    <li><strong>Occupation</strong>Cognitive Behavioural Therapist/Mental health nurse</li>
                                    <li><strong>Years Running</strong>6</li>
                                    <li><strong>Favourite race</strong>  Eye 10k</li>
                                    <li><strong>Least favourite race</strong>:  Taunton half marathon - went with wrong attitude and inadequate preparation.</li>
                                    <li><strong>Why did you start running.</strong>?  To help improve my sanity after having babies and to improve health and fitness.</li>
                                    <li><strong>Injuries</strong> too many to mention!</li>
                                    <li><strong>Trainers worn.</strong>: Nike air icarus+</li>
                                    <li><strong>Favourite running kit?</strong> Decathlon underwear and any dry fit or breathable race t-shirt.</li>
                                    <li><strong>Top tips from my experience.</strong> keep setting goals and next steps, vary your training, don't worry about what anyone else is doing - do your thing and enjoy it!</li>
                                    <li> <strong>How many miles per week running</strong> about 20 at the moment</li>
                                    <li><strong>Other hobbies?</strong>  Swimming, drinking beer and dancing! </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201409_large.jpg" rel="image" title="Ruth Dunstan"><img class="img-polaroid" src="../images/mom/201409_small.jpg" alt="Ruth Dunstan"/><div class="image-overlay-zoom"></div></a></div>
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
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
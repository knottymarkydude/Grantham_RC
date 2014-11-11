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
            <!-- Navigation / End -->
            <!-- Content -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title" >
                    <h2>September 2013 - </h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>September, 2013</span> <span><i class="icon-user"></i>Gerry Hyde</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <li><strong>Age:</strong>MV50</li>
                                    <li><strong>Occupation</strong>Community Nurse</li>
                                    <li><strong>Years Running:</strong></li>
                                    <li><strong>Favourite race:</strong></li>
                                    <li><strong>Least Favourite Race:</strong></li>
                                    <li><strong>Why did you start running?</strong></li>
                                    <li><strong>Injuries received?</strong></li>
                                    <li><strong>Furthest Distance ran?</strong></li>
                                    <li><strong>Trainers worn:</strong> </li>
                                    <li><strong>Favourite running kit?</strong> </li>
                                    <li><strong>Top tip from your experience:</strong></li>
                                    <li><strong>How many miles do you run per week?</strong></li>
                                    <li><strong>Other hobbies?</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201308_large.jpg" rel="image" title="Gerry Hyde"><img class="img-polaroid" src="../images/mom/201308_large.jpg" alt="Gerry Hyde" /><div class="image-overlay-zoom"></div></a></div>
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
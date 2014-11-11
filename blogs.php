<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Members Blogs</title>
        <?php include 'common/css.php'; ?>

    </head>
    <body>

        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">

            <div class="ie-dropdown-fix" >

                <!-- Header -->
                <?php include 'common/header.php'; ?>
                <!-- Header / End -->

                <!-- Navigation -->
                <?php include 'common/navbar.php'; ?>
                <!-- Navigation / End -->

            </div>

            <!-- Content -->

            <div class="row-fluid">
                <!-- Page Title -->
                <div id="page-title">
                    <h2>Members <span>Blogs</span></h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <!-- Portfolio Content -->
            <div id="portfolio-wrapper">

                <div class="span2">
                    <a href="http://rushirushworth.blogspot.co.uk/" target="_blank"><img src="images/members/PaulRushworth.png" alt="Paul Rushworth" class="img-circle"/></a>
                    <div class="staff"><h5><a href="http://rushirushworth.blogspot.co.uk/" target="_blank">Paul Rushworth</a></h5> </div>
                    <div>View Paul's Blog <a href="http://rushirushworth.blogspot.co.uk/" target="_blank">here</a></div>
                </div>
                
                <div class="span2">
                    <a href="http://projectsub245.co.uk/" target="_blank"><img src="images/members/MattKingstonLee.png" alt="Matt Kingston-Lee" class="img-circle"/></a>
                    <div class="staff"><h5><a href="http://projectsub245.co.uk/" target="_blank">Matt Kingston-Lee</a></h5> </div>
                    <div>View Matt's Blog <a href="http://projectsub245.co.uk/" target="_blank">here</a></div>
                </div>
                
            </div>
        </div>
        
        <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();
                console.log(str);
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");
            })
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
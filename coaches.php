<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Coaches</title>
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
                    <h2>Meet the <span>Coaches</span></h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <!-- Portfolio Content -->
            <div id="portfolio-wrapper">

                <div class="span2">
                    <img src="images/members/robert.jpg" alt="Robert" class="img-circle"/>
                    <div class="staff"><h5>Rob McArdle</h5> <span>Run leader</span><span><i class="icon-envelope"></i>&nbsp;robert@granthamrunningclub.co.uk</span></div>
                </div>
                
                <div class="span2">
                    <img src="images/members/lucy.jpg" alt="Lucy" class="img-circle"/>
                    <div class="staff"><h5>Lucy</h5> <span>Run leader</span><span><i class="icon-envelope"></i>&nbsp;lucy@granthamrunningclub.co.uk</span></div>
                </div>

               <div class="span2">
                    <img src="images/members/helen.jpg" alt="Helen" class="img-circle"/>
                    <div class="staff"><h5>Helen</h5> <span>Run leader</span><span><i class="icon-envelope"></i>&nbsp;helen@granthamrunningclub.co.uk</span></div>
                </div>
                
                <div class="span2">
                    <img src="images/members/sarah.jpg" alt="Sarah" class="img-circle"/>
                    <div class="staff"><h5>Sarah</h5> <span>Run leader</span><span><i class="icon-envelope"></i>&nbsp;sarah@granthamrunningclub.co.uk</span></div>
                </div>
                
                <div class="span2">
                    <img src="images/members/gordon.jpg" alt="Gordon" class="img-circle"/>
                    <div class="staff"><h5>Gordon</h5> <span>Run leader</span><span><i class="icon-envelope"></i>&nbsp;gordon@granthamrunningclub.co.uk</span></div>
                </div>
             

            </div>
            <!-- End Portfolio Content -->

        </div>
        <!-- Wrapper / End -->


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
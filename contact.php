<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
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
                    <h2>Contact Us</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid">
                <!-- Standard Structure -->
                <div class="span8">
                    <div class='well'>
                        <p>Postal Address<br/>
                            P.O. Box 6628, Grantham, Lincs, NG31 8TR</p>

                        <p>Need to contact us? No problem, email us and we will get back to you.</p>
                        <span><i class="icon-envelope"></i>&nbsp;<a href="mailto:admin@granthamrunningclub.co.uk" target="_blank">admin@granthamrunningclub.co.uk</a></span>
                    </div>



                </div>

                
                <!-- Standard Structure End -->
            </div>


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
            });
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Diary</title>
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

            <!-- Fluid  Container -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title">
                    <h2>Diary</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <!-- Fluid  Container -->
            <div class="row-fluid">
                <div class="span12">                    
                    <iframe src="https://www.google.com/calendar/embed?src=granthamrc%40gmail.com&ctz=Europe/London" style="border: 0" width="100%" height="500" frameborder="0" scrolling="no"></iframe>

                </div>
            </div>
            <!-- Fluid  Container End -->

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
            });
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
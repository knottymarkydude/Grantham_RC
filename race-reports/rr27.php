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
                    <h2>Weekend Racing 2/3 September</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 4th September, 2014</span> 
                                <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <h2>Caythorpe 10k</h2>

                                    <p>Four members of Grantham Running Club took part in the tough off road event with its picturesque 10.7k 
                                        oute mostly on trail taking in quite a few hills. First home was Stuart Sinclair in 8th place with a 
                                        time of 46:57. Next back was Mark Wilson in 50:41 followed by Nick Day in 61:18 and Chris England in 67:23. 
                                        (Photo shows L to R, Mark Wilson, Stuart Sinclair and Chris England)
                                    </p>


                                    <h2>Lincoln Wellington Road Race 5k</h2>
                                    <p>The two Grantham Running Club members competing in the final race of this series starting from the Yarborough 
                                        Leisure centre in Lincoln, both had good runs with Gerry Hyde finishing as sixth veteran in a quality field 
                                        in a time of 18:52 and Mark Wilson setting a personal best to come home in 20:19
                                    </p>

                                    <h2>Parkrun Newark</h2>
                                    <p>GRC’s Chris Armstrong produced a stunning performance to set a new parkrun PB with a time of 19:04.
                                    </p>


                                </div>    
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/rr27800.jpg" rel="image" title="Caythorpe 10k">
                            <img class="img-polaroid" src="../images/race-reports/rr27270.jpg" alt="Caythorpe 10k" />
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
            <script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var str = location.href.toLowerCase();
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });

                    // extend the default setting to always include the zebra widget.
                    $.tablesorter.defaults.widgets = ['zebra'];
                    // extend the default setting to always sort on the first column
                    $.tablesorter.defaults.sortList = [[1, 0]];
                    // call the tablesorter plugin
                    $("table").tablesorter();
                    $("#race-reports").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
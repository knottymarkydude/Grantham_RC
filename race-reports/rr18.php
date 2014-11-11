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
                    <h2>Belvoir Half Marathon</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 30 March, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        Grantham Running Club had five runners taking part in the 32nd Belvoir Half Marathon last Sunday. 
                                        The perfect conditions were rewarded with three personal bests and two season’s best recorded in 
                                        the light winds round this fast course near Hose. First home was Tom Fowler in his second fastest 
                                        ever run going sub 88 minutes with his wife Rachel also setting a great time beating the two hour mark. 
                                        The second GRC husband and wife team, Nick and Louise Payne both set PB by minutes and were delighted 
                                        with their continued good form. Full GRC results below;
                                    </p>
                                    
                                    <div>
                                        <table class="tablesorter">
                                            <thead>
                                                <tr>
                                                    <td class="header">Position</td>
                                                    <td class="header">Name</td>
                                                    <td class="header"></td>
                                                    <td class="header">Time</td>
                                                    <td class="header">Gender</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td>38</td>
                                                    <td>Tom Fowler</td>
                                                    <td>SB</td>
                                                    <td>01:27:23</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr class="even">
                                                    <td>65</td>
                                                    <td>Iain Brown</td>
                                                    <td>SB</td>
                                                    <td>01:31:02</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>162</td>
                                                    <td>Nick Payne</td>
                                                    <td>PB</td>
                                                    <td>01:41:00</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr class="even">
                                                    <td>237</td>
                                                    <td>Louise Payne</td>
                                                    <td>PB</td>
                                                    <td>01:50:04</td>
                                                    <td>Female</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>276</td>
                                                    <td>Rachel Fowler</td>
                                                    <td>PB</td>
                                                    <td>01:55:54</td>
                                                    <td>Female</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                           
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Belvoir_Tom_Fowler_large.jpg" rel="image" title="Tom Fowler">
                            <img class="img-polaroid" src="../images/race-reports/Belvoir_Tom_Fowler_small.jpg" alt="Tom Fowler" />
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
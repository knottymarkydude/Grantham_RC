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
                    <h2></h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >

                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 4th Oct, 2014</span></div>
                            <div class="post-description">
                                <h4>Lisbon Marathon</h4>
                                <p> 
                                    GRC members Iain Brown, Kevin Baker and Wendy Hobson were among a group of workmates who travelled to Lisbon to participate in the Rock and Roll marathon and half marathon series event. Iain and Kevin were up before dawn for the marathon which travelled along the coast from Cascais to towards the famous Vasco De Gama bridge. In warm temperatures, both recorded personal bests of 3.14 and 3.53 respectively. Wendy raced in the half which actually started on the bridge before joining the marathon at 8 miles and in hotter conditions recorded a highly creditable 2.10
                                </p>
                                <h4>Kosice Peace Marathon</h4>
                                <p>
                                    GRC Gordon Geach travelled to Slovakia for his annual continental marathon, competing in the 90th Kosice Peace Marathon. Hoping to put London and Edinburgh marathons behind him. He said the course covered two laps, but when running it you get the impression that a lot of the course is downhill! Weather-wise it was almost ideal, cloud cover kept it cool for the first lap and temperatures rose to 16’c for the second. Unfortunately his 2014 marathon annus horribilis continued by him posting a time of 3:57:58 well outside his personal best of 3:20:53 set at Berlin in 2012. He came 716th out of a men's field of 1188, but still managed to beat 58 teams (teams of 4 runners) also covering the marathon distance. His next challenge is London 2015 and hoping to put 2014 behind him.
                                </p>
                                <h4>Parkruns</h4>
                                <p>
                                    There were 4 GRC runners out at the Newark parkrun this Saturday. Robert Howbrook, Christopher Armstrong, Warren Stark and Ruth Dunstan,  Robert and Ruth recorded new PB in times of 20:33 and 24:14 respectively. Wendy Tremain also from GRC volunteered at the parkrun ensuring everyone got round safely and was accounted for (sweep walker). In Peterborough Abi Schofield set a new PB to finish as first lady
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/race-reports/rr32800.jpg" rel="image" title="Gordon"><img class="img-polaroid" src="../images/race-reports/rr32270.jpg" alt="Ben" /><div class="image-overlay-zoom"></div></a></div>
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
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });
                    $("#race-reports").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
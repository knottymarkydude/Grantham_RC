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
                    <h2>Weekend Racing 2/3 August</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 4th August, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <h2>Dovedale Dipper</h2>

                                    <p>Grantham Running Club’s Mark Hillson and Gordon Geach took part in this year’s 
                                        Dovedale Dipper now in its twelfth year through the Derbyshire Peak District, both successfully 
                                        completed the tough hilly 16 mile course in 3 hours and twenty two minutes. 
                                        (Photo enclosed Mark Hillson left and Gordon Geach right)
                                    </p>


                                    <h2>Lincoln Wellington 5k Series, Lincoln, Lincolnshire, Tuesday 29th July 2014.</h2>
                                    <p>Grantham Running Club’s Matthew Kingston-Lee and Ben Mason headed to Lincoln on the evening of 
                                        Tuesday 29th July 2014 to take part in the third race of the Lincoln Wellington 5k Series. 
                                        The race attracts a small but fairly high quality field who enjoy a flat, multiple lap, 
                                        traffic free, course. In near ideal conditions for racing save for a strengthening breeze, 
                                        Matthew made a swift, yet controlled start. Trying his best to ignore the swelling mass of 
                                        runners sheltering from the wind in his tow, he pushed on in the closing stages of the race aware that a big Personal Best was within his grasp, regardless of whether any of his competitors were willing to do any work to assist him.
                                        With a closing sprint, determined to break the 17 minute barrier for the first time, Matthew 
                                        came home eighth in a new Grantham RC club record of 16:55, bettering his old 5k PB by 49 seconds. 
                                        Ben, returning to the Lincoln race for the first time in six years, had an excellent run to finish 
                                        44th in 20:35, bettering his old best over 5km by over a minute. The race winner was Alan Oliver of 
                                        Sleaford who finished in 16:22; the first woman to finish was Beverley Wilson of Cleethorpes, who ran 19:04.
                                    </p>

                                    <h2>Parkrun Newark</h2>
                                    <p>Despite losing their fastest entrant Stuart Sinclair in the warm-up the seven runners 
                                        from GRC who completed this week’s Newark Parkrun managed four PB’s between them with 
                                        Holly Durham setting a new course record for a woman in her age Group.
                                    </p>

                                    Position
                                    Time
                                    10
                                    Chris ARMSTRONG
                                    20:20
                                    PB!
                                    15
                                    Holly DURHAM
                                    21:10
                                    PB!
                                    20
                                    Mark WILSON
                                    22:27
                                    23
                                    Warren STARK
                                    22:49
                                    62
                                    Ruth DUNSTAN
                                    25:55
                                    74
                                    Nikki CARR
                                    27:19
                                    PB!
                                    103
                                    Julie WILSON
                                    30:38
                                    PB!
                                    </p>

                                    <h2>Parkrun Peterborough</h2>

                                    <p>Andrew MacAllister was the Sole GRC runner at the Peterborough parkrun where he set a new best time of 24:29</p>

                                    <h2>Parkrun Tollcross</h2>
                                    Grantham Running Club members Catherine Payne and Robert McArdle were joined by the inspirational 
                                    Team England athlete Steve Way fresh from breaking the British Masters Record at the Commonwealth 
                                    games, on a very wet and hilly course Steve was able to transform a Saturday morning in the park 
                                    to something special spending almost two hours answering question from everyone about running and 
                                    what it is like to be part of a major games. Catherine Payne’s time of 21:42 was quick enough to 
                                    move her into the all-time list of UK athlete her age at this discipline.
                                    </p>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/rr26800.jpg" rel="image" title="Mark and Gordon">
                            <img class="img-polaroid" src="../images/race-reports/rr26270.jpg" alt="Mark and Gordon" />
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
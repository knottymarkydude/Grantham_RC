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
                    <h2>Cross Country 2014/2015 Season</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span12">

                    <div>
                        <p>The Lincolnshire Cross Country League gets under way again in October. 
                            This season’s races are scheduled to take place on:  

                        <ul>
                            <li>Race 1 - Sunday 26 October at Louth</li>
                            <li>Race 2 – Sunday 2 November at Boston</li>
                            <li>Race 3 – Sunday 16 November at Riseholme (Lincoln)</li>
                            <li>Race 4 – Sunday 7 December at Louth</li>
                            <li>Lincolnshire Cross Country Championships – Sunday 4 January 2015 at Riseholme (Lincoln)</li>
                        </ul>                       
                        </p>

                        <p>Last year was the first season that the club has participated in the Cross Country League and after a slow start the club’s achievements improved, culminating in the Ladies Team coming third in league.  The club also participated in the National Cross Country Championships which were held in February at Wollaton Park in Nottingham.  
                            Following on from our experiences last season when interest in this event increased as the season progressed, we would like to achieve ‘bigger and better things’. The club would like to enter full Men’s and Ladies’ Teams at each of the races.  The men typically run a 10k course and the ladies approximately 5K.  Each race last year was held at a different location and the courses varied with some being more hilly than others but generally involved running on grass, through woodland, some mud but only one water crossing! There is minimal running on roads and part of the appeal of cross country is the natural and distinct characteristics of each venue’s terrain and the weather.  The courses are clearly marked and consist of one or more laps. Runners are judged on individual times which contribute to the overall score each team achieves.  As such, the emphasis is on this being a team sport – the more runners we have the better chance the team has of doing well in the scoring. Three ladies and four men are required to qualify as a team.  
                            It is an advantage to wear cross country spikes or trail/fell shoes especially when the going is likely to be wet and muddy and club vests/t-shirts must also be worn (otherwise you will be disqualified).  If you need to buy a club shirt please let us know so that we can sort one out for you. 
                        <p>

                        <p>Come and join us.</p>

                        <p>Please put the race dates in your diary and let Sarah High (Ladies Captain) 
                            or Matthew Kingston –Lee (Men’s Captain) which races you are available for.  
                            The club will be paying the race entry fees for all those who participate.</p>
                        <p>
                            P.S. If you are interested in being a vice-captain please let one of us know.</p>

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
                $(document).ready(function () {
                    var str = location.href.toLowerCase();
                    $('#nav li a').each(function () {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                        $("#news").addClass("active");
                    });

                    // extend the default setting to always include the zebra widget. 
                    $.tablesorter.defaults.widgets = ['zebra'];
                    // extend the default setting to always sort on the first column 
                    $.tablesorter.defaults.sortList = [[7, 1]];
                    // call the tablesorter plugin 
                    $("table").tablesorter();

                });
            </script>
            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
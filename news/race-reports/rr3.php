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

            <!-- Content -->


            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title" >
                    <h2>Keyworth Turkey Trot Half Marathon, Keyworth, Nottinghamshire</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid" >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 8 December, 2013</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>Grantham Running Club’s Matthew Kingston-Lee bettered his own club half marathon record when he finished eighth at the 
                                    Keyworth Turkey Trot on Sunday 8th December.  Behind Matthew, fellow club mates Ben Hatherley and Kevin Baker (see photo) 
                                    set impressive personal bests on a tough hilly course.</p>


                                <p>The 31st Keyworth Turkey Trot Half Marathon was a remarkably popular event with its entry limit of 1000 runners filled 
                                    this year in just nine hours. With funds raised going to the 1st Keyworth Scouts Group, the event is a fine example of a 
                                    slickly organised community supported race, with generous crowd support on what was a near entirely rural course. Weather 
                                    conditions were fine for a December event: sunny and relatively mild, with just a stiffening breeze hampering runners at times 
                                    on a fairly exposed hilly route. Finishers of the race were rewarded with a memento mug - presented by none other than Father 
                                    Christmas himself - with free soup and other hot beverages offered for the weary runners.</p>

                                <p>First home for Grantham Running Club was Matthew Kingston-Lee. A swift opening downhill mile saw him lie in around twelfth place when he struggled badly on the 
                                    first climbs of the race at around three miles. He rallied well though in the middle section of the race when he began to haul in runners ahead of him and at 
                                    ten miles found himself eighth and around 30 seconds up on his schedule to break his existing half marathon PB of 1:16:46, set at Milton Keynes in 2010. Some 
                                    tough climbs in the final miles however saw him finish just outside his best, albeit in a season’s half marathon best of 1:17:01. This bettered his old club 
                                    record set at this year’s Robin Hood Half Marathon by eleven seconds.</p>


                                <p>Behind Matthew, Ben Hatherley was pleased and somewhat surprised, considering a distinct lack of recent training, to clock a new PB of 1:29:06, bettering his 
                                    old best, set at the Newton’s Fraction Half Marathon in 2012, by seventeen seconds. Behind Ben Mason (1:38:00), Kevin Baker was delighted to take two minutes 
                                    off his old PB, clocking 1:38:47. He credited the improvement to the club’s Tuesday night hills and interval sessions which he has been excelling at in recent weeks.</p>


                                <p>Robert Howbrook, taking part in only his second half marathon, found the course tougher than his debut at Peterborough in October, nevertheless he ran well to 
                                    finish just over a minute slower than his best with 1:42:36.</p>


                                <p>Behind Nick Payne (1:45:18), Lucy Roberts was the first of two GRC ladies to finish, coming home in 2:09:36. Yvonne Taylor showed considerable 
                                    determination with a finishing time of 2:30:36.</p>

                                <div class="hero-unit margintop">
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <td>Position</td>
                                                <td>Name</td>
                                                <td>Gender</td>
                                                <td>Time</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>8</td>
                                                <td>Matthew Kingston-Lee</td>
                                                <td>M</td>
                                                <td>1:17:01</td>
                                            </tr>
                                            <tr>
                                                <td>88</td>
                                                <td>Ben Hatherley</td>
                                                <td>M</td>
                                                <td>1:29:06</td>
                                            </tr>
                                            <tr>
                                                <td>236</td>
                                                <td>Ben Mason</td>
                                                <td>M</td>
                                                <td>01:38:00</td>
                                            </tr>
                                            <tr>
                                                <td>253</td>
                                                <td>Kevin Baker</td>
                                                <td>M</td>
                                                <td>01:38:47</td>
                                            </tr>
                                            <tr>
                                                <td>315</td>
                                                <td>Robert Howbrook</td>
                                                <td>M</td>
                                                <td>01:42:36</td>
                                            </tr>
                                            <tr>
                                                <td>381</td>
                                                <td>Nick Payne</td>
                                                <td>M</td>
                                                <td>01:45:18</td>
                                            </tr>
                                            <tr>
                                                <td>779</td>
                                                <td>Lucy Roberts</td>
                                                <td>F</td>
                                                <td>02:09:18</td>
                                            </tr>
                                            <tr>
                                                <td>858</td>
                                                <td>Yvonne Taylor</td>
                                                <td>F</td>
                                                <td>02:30:36</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/race-reports/Kevin_large.jpg" rel="image" title="Kevin"><img class="img-polaroid" src="../images/race-reports/Kevin_large.jpg" alt="" /><div class="image-overlay-zoom"></div></a></div>

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
                $("#race-reports").addClass("active");
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
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
                    <h2>April 2014 - Holly Durham</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>April, 2014</span> <span><i class="icon-user"></i>Holly Durham</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <p>
                                        This month's member of the month is Holly following a successful period of
                                        spring training which she extended her range of distances upwards from the
                                        half marathon to a powerful performance at the Ashby 20 mile race. In this
                                        form a late entry to the Manchester Marathon was inevitable where we are all
                                        confident she will be recording a PB.
                                    </p>
                                    <li><strong>Age:</strong>32</li>
                                    <li><strong>Occupation</strong>Speech and Language Therapist at Peterborough City Hospital</li>
                                    <li><strong>Years Running</strong>9</li>
                                    <li><strong>Favourite race</strong>The Great North Run. The atmosphere is amazing and I always love the Red Arrows fly over and display at the end.    Apart from the year I gave birth to my son I’ve always got a PB there, and although it can be tricky dodging the crowds of runners, I personally think that the amount of people running for all kinds of causes and reasons makes it extra special. </li>
                                    <li><strong>Least favourite race</strong>:  The Stamford 30k valentines run 2014.  My target time was unrealistic and I consequently paced the whole thing wrong, going out too quickly and paying the price later on.  I hadn’t even got half way round when I started to struggle and one by one, the runners I had passed at the beginning started to overtake me.  There’s nothing more demoralising than seeing people skip by you with endless energy whilst I could barely put one foot in front of the other!  I well and truly hit the wall that day.</li>
                                    <li><strong>Why did you start running.</strong>?  I started running when I was at university in Newcastle and got a place in the Great North Run through the university. I had no idea how much I’d love it and how addicted I would become. Back then it was easy to fit in runs around university, now it takes a bit more planning due to work and family commitments, but I’m generally an early bird and will often get up whilst everyone else is still sleeping to get the miles in.  I quite like the sense of achievement after an early long run as it’s so peaceful when you’re out and you still have the rest of the day to do what you want with. </li>
                                    <li><strong>Injuries</strong>The injury that kept me out for the longest was a metatarsal stress fracture.  It was in November 2010 with a particularly snowy winter.  After several attempts of running, slipping and sliding in the snow I decided to stay in and do one of my long forgotten workout dvds in a poor attempt to get some exercise in if I couldn’t run.  I stupidly chose not to wear my trainers though as we lived in a 2nd floor flat and I didn’t want to disturb the neighbours too much.  The following week the pain became progressively worse to the point I could barely walk on it.  I ended up taking 3 months off in the run up to the Edinburgh Marathon and the ultra run that I had planned in June 2011 and was miserable during that time!  Other than that, my knee seems to be a constant niggle as soon as I increase the mileage and has been particularly problematic with anything involving hills.</li>
                                    <li><strong>Trainers worn.</strong>: Asics Gel Nimbus 15.</li>
                                    <li><strong>Favourite running kit?</strong>My Garmin forerunner 405.  I literally can’t leave the house without it when I go for a run and my virtual pacer becomes my best friend when I’m out running (or my worst enemy if I’m not keeping up!)</li>
                                    <li><strong>Top tips from my experience.</strong>Pace yourself properly and don’t go out too quickly.  Also, for longer runs break them down mentally into more manageable chunks so they seem more achievable.</li>
                                    <li> <strong>How many miles per week running</strong>Usually around 35 but at the moment it’s more like 55 as I’ve been training for the Manchester Marathon and The Wall, in June.</li>
                                    <li><strong>Other hobbies?</strong>  I enjoy swimming, reading and spending quality time with my son and husband.  Oh, and I shouldn’t forget ‘wine nights’ with my Penny!</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201404_large.jpg" rel="image" title="Holly Durham"><img class="img-polaroid" src="../images/mom/201404_small.jpg" alt="Rob Howbrook"/><div class="image-overlay-zoom"></div></a></div>

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
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
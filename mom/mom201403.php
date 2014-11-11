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
                    <h2>March 2014 - Rob Howbrook</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>March, 2014</span> <span><i class="icon-user"></i>Rob Howbrook</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <p>
                                        Rob Howbrook has been selected as member of the month for March following
                                        his recent half Rob Howbrookmarathon performances at Sleaford and Grantham.</p>

                                    <p>In Sleaford he was the only member to PB in the mud and high winds and in
                                        the hills of Grantham not only did he lop minutes of his previous best but
                                        he was the only runner to break 70% on the WMA scoring.</p>

                                    <p>With a background in cycling Rob has always been fast at the Parkrun
                                        distance but a winter of hard work since he joined the club has seen him add
                                        stamina to his natural speed. If this rate of progress continues he could be
                                        challenging for prizes in one of the toughest vet categories around.
                                    </p>
                                    <li><strong>Age:</strong>MV55</li>

                                    <li><strong>Occupation</strong> I am a principal building control officer at south kesteven district council</li>
                                    <li><strong>Years Running</strong> About a year and a half.</li>
                                    <li><strong>Favourite race</strong> The Sleaford half was a nice race</li>
                                    <li><strong>Least favourite race</strong> I have not run in to many races yet to have an opinion. All are different with challenge to prepare for.</li>
                                    <li><strong>Why did you start running.</strong> 
                                        I enjoy being outside in the wind rain and sunshine and compliments other interest walking trips hill walks etc. which are far more interesting than being in a gym. 
                                        The run to the gym would be more fun than using some of the machines. In fact I have never been on a running machine. Thinking back to school and college days I ran 
                                        cross country at school and some orienteering later that may have some bearing on starting running. In 2012 I purchased some running shoes of the internet with the 
                                        intention of doing some running for training and fitness and have gradually built up from then. The first runs were from home about once a week and then to Belton 
                                        park and out into the Vale of Belvoir and various routes using local knowledge of paths and lanes. At Christmas 2012 I went running with my daughter Anna home from 
                                        university and nephew Tom works abroad. From last summer I joined Grantham running club and enjoyed the company and training sessions since then. There have been 
                                        some odd reactions from some quarters to my running one being my sister who phone Kate my wife to tell her to talk me out of running the Peterborough half marathon 
                                        much to her amusement. Note from this she did not speak to me!</li>
                                    <li><strong>Injuries</strong> This seems to be a subject that is raised in conversation about running and many other sports. In taking up running the possibility of 
                                        injury to joints etc did give me some thought for concern and comments from non-runners. The running up to now has not caused any problem other than aching 
                                        muscles and sometimes a foot or a joint but so far no injuries. I did take a tumble out running in the dark and ended up on the floor by treading on a branch 
                                        where a street light was out which resulted minor grazing. I aim to remain healthy and will try to avoid injury as much as possible. My philosophy on this is 
                                        if you have an injury rest recover and gradually resume training.</li>
                                    <li><strong>Trainers worn.</strong> 
                                        My running shoes are Asics chosen because I used their indoor court shoes that have been very good over many years. 
                                        Sports shoes for most sports are an extremely important piece of equipment. In running they stop us sliding about and give a cushion from the ground. 
                                        My opinion has changed on preferred choice of shoe design since running races over the last 6 months. A thick sole and heel with plenty of cushioning 
                                        effect would have been a preferred choice then but consider the thinner sole and heal a better choice now. A lower centre of gravity and good foot 
                                        placement seem to be the factors</li>
                                    <li><strong>Top tips from my experience.</strong> 
                                        Keep training on a regular basis as there is always something to aim at.</li>
                                    <li> <strong>How many miles per week running</strong> about 20</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201403_large.jpg" rel="image" title="Rob Howbrook"><img class="img-polaroid" src="../images/mom/201403_small.jpg" alt="Rob Howbrook"/><div class="image-overlay-zoom"></div></a></div>

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
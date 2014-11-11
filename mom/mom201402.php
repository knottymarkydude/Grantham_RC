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
                    <h2>February 2014 - Sarah High</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>February, 2014</span> <span><i class="icon-user"></i>Sarah High</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <li><strong>Age:</strong>FV50</li>
                                    <li><strong>Occupation</strong>Manager of a local charity, Home-Start Grantham – a charity that recruits and trains volunteers to support parents with young children at home with situations as diverse as isolation, bereavement, multiple births, illness, disability, mental health or who are just finding parenting a struggle.  Previously I was a teacher.</li>
                                    <li><strong>Years Running:</strong>In competitions, just over 20 years.</li>
                                    <li><strong>Favourite race:</strong>Some of my favourite races remain ones from a long time ago when I achieved various PBs.   When my eldest daughter was just a few months old I ran my first 10K ever, the RAF Laarbruch 10K, and did so in 39.41.  Whilst also living in Germany in the 1990s I ran in the ARRC Half Marathon a couple of times, which was quite a good cross country course, achieving a time of 1.34.25, and, at my fourth time of competing in the RAF Bruggen 10 annual road race got a PB of just over 67 minutes (cant’ remember the seconds).  I think it’s the fact that I will never again get even close to these times that makes me look back on them fondly as favourites.  More recently I have enjoyed competing in the Thunder Run and this year’s Caythorpe Dash.</li>
                                    <li><strong>Least Favourite Race:</strong>I actually found the National Cross Country Championships race a real struggle the whole way round – don’t know why, but I did not enjoy the actual race and was glad to get to the finish.</li>
                                    <li><strong>Why did you start running?</strong>I was always active in sport right from junior school and played in the netball, tennis, rounders and hockey teams and did athletics. I started going out for a ‘run’ when I was in the 6th Form, found that I enjoyed it and felt good having done so, and did that on an individual basis for several years whilst hockey remained my main sport.  When my first daughter was one I was roped into making up the RAF Bruggen women’s cross country team for a league race and that was it….  I really enjoyed it, did well, which was really motivating and went on to be a member of the team in the military XC league for the next 6 years, becoming the ladies champion four times – it was quite addictive. Involvement in the cross country lead to me taking up road running more competitively.</li>
                                    <li><strong>Injuries received?</strong>Most of the injuries I have had have been related to Achilles and feet issues – they’re my weak spot.  Having had the best part of a year suffering from an Achilles injury not so long ago I am currently as back to normal as I ever will be.    </li>
                                    <li><strong>Furthest Distance ran?</strong>Furthest distance and one of the most enjoyable races that I have done was an Isle of Wight north to south run in Sept 2012 which was just under 20 miles.  After an awful week preceding the race in terms of the weather, the day of the race was glorious – a fantastic sunny September day and it was a great way to see the island and some of its scenery.</li>
                                    <li><strong>Trainers worn:</strong>Brooks have been a favourite brand over recent years but I also currently have a pair of Zeets which are a bit different looking in their style but really comfortable.</li>
                                    <li><strong>Favourite running kit?</strong>I seem to favour layers - a running vest plus a t shirt, which I then have to take off and tie round my waist.</li>
                                    <li><strong>Top tip from your experience:</strong>Listen to your body and know when to rest/vary your exercise particularly as you get a bit older.</li><li><strong>How many miles do you run per week?</strong>It varies but an average of 25-30 miles. I tend to intersperse my running with going to the gym three times/week where I do other CV exercises, some weights and core work.</li>
                                    <li><strong>Other hobbies?</strong>I like to be active – other hobbies include skiing, cycle rides with my family, fitness classes such as Bodypump and Pilates, reading.</li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201402_large.jpg" rel="image" title="Sarah High"><img class="img-polaroid" src="../images/mom/201402_large.jpg" alt="Sarah High"/><div class="image-overlay-zoom"></div></a></div>

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
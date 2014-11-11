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
                    <h2>May 2014 - Andrew Spencer</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>May, 2014</span> <span><i class="icon-user"></i>Andrew Spencer</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <p>
                                        This month's member of the month is Andrew following a successful period for performances 
                                        at the London Marathon in April and the Langtoft 10k during May
                                    </p>
                                    <li><strong>Age:</strong>A young 52</li>
                                    <li><strong>Occupation:</strong>Sales director at UPN which is a national pallet network of 70+ hauliers in the UK</li>
                                    <li><strong>Years Running:</strong>I ran quite competitively 11-years ago (for Wirral AC) for about 2-years but let this 
                                        slip through work and living away commitments until 2-years ago when a colleague was granted a bond place at 
                                        the VLM 2013, I heard that they could offer a 2014 place so that was it for me, I wish I had done it in the earlier years.</li>
                                    <li><strong>Favourite race:</strong>Favourite race is the last one of each discipline as they are both PB (Chester) and SB (Langtoft). I doubt I will ever beat my PB of 39:11 in Haydock back in 2003? Does that even still count?</li>
                                    <li><strong>Least favourite race:</strong>Not really got one, I am fortunate that I haven't ever had to retire which answers one of your next questions in that I haven't had a serious injury (touch wood)!</li>
                                    <li><strong>Why did you start running:</strong>I started running when I met my brother at the end of the inaugural mersey tunnel 10k race from Liverpool to New Brighton in 1999, I was 16-stone eating a burger as he finished the race. He said why do you give it a go next year, I said only if I could beat him! I started training on 1/1/2000 and ran 52:03 in May that year, and yes I beat him! It's the rivalry that keeps me going. I'm running the same race on Sunday looking for 43:00?</li>
                                    <li><strong>Injuries:</strong>I haven't had a serious injury (touch wood)! </li>
                                    <li><strong>Trainers worn:</strong>: Trainers are not for the purest I use Adidas Boost which I have worn since they came out, love them. I do have Asics too but just as spare.</li>
                                    <li><strong>Favourite running kit:</strong>Kit, I'm a bit particular on brands, and it is Adidas for me but I love running in club colours as it's great to hear the 'go Grantham' support, our top looks great, people have commented on it in races.</li>
                                    <li><strong>Top tips from my experience:</strong>My top tip is to keep smooth and tidy when running, run a diagnoses on yourself, don't over cook it or be cavalier early on and get into a groove to finish with a flourish. Also a race day diet and routine I think helps.</li>
                                    <li> <strong>How many miles per week running:</strong>I feel guilty on the question of miles per week as I should come to the club more but recent events are making that difficult but I will be there again soon. I have a long run HM or 15 every Saturday, and an 8 and a 6 mile during the week.</li>
                                    <li><strong>Other hobbies:</strong> Other hobbies include triathlons but I love cycling which has taken a back seat in the last year. A keen Leicester Tigers fan and (don't laugh) an Everton supporter! </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201405_small.jpg" rel="image" title="Andrew Spencer"><img class="img-polaroid" src="../images/mom/201405_small.jpg" alt="Andrew Spencer"/><div class="image-overlay-zoom"></div></a></div>

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
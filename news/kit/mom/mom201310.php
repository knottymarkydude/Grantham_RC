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
                    <h2>October 2013 - Gwenda Williams</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>October, 2013</span> <span><i class="icon-user"></i>Gwenda Williams</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <li><strong>Age:</strong>FV35</li>
                                    <li><strong>Occupation</strong>Community Nurse</li>
                                    <li><strong>Years Running:</strong>Less than one year.</li>
                                    <li><strong>Favourite race:</strong>So far I’ve only participated in 3 races and enjoyed them all. 
                                        I found the support received from the crowds during a race very special. I have been amazed at 
                                        how many different events there are available in the running calendar. 
                                        I hope now that with more confidence and experience to be able to participate in more events.</li>
                                    <li><strong>Least Favourite Race:</strong>None yet!</li>
                                    <li><strong>Why did you start running?</strong>I decided to take up running as an alternative to the gym 
                                        and allows me to get fit while exercising the dog. Plus it has got my husband out on his bike now too!
                                        Joining the running club provided motivation and support, while meeting new runners whose achievements are inspirational.</li>
                                    <li><strong>Injuries received?</strong>Nothing major – hope it stays that way! </li>
                                    <li><strong>Furthest Distance ran?</strong>13.1 miles, a half marathon</li>
                                    <li><strong>Trainers worn:</strong>A very bright blue pair? The salesman spent that long helping me get a comfortable pair, 
                                        I did not have the heart to complain about the colour.</li>
                                    <li><strong>Favourite running kit?</strong>Got a running watch for my birthday – still not sure how to use it! It appears to 
                                        tell me everything except to remember to breathe!  </li>
                                    <li><strong>Top tip from your experience:</strong>No matter what your ability you can still enjoy the sport. 
                                        I found that the advice and tips received from other runners invaluable.</li>
                                    <li><strong>How many miles do you run per week?</strong>Not enough? - by completing my first half I hope it gives me motivation to work towards completing a marathon.</li>
                                    <li><strong>Other hobbies?</strong> Golf, Geocaching, pub quizzes.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201310_large.jpg" rel="image" title="Gwenda Williams"><img class="img-polaroid" src="../images/mom/201310_large.jpg" alt="Gwenda Williams" /><div class="image-overlay-zoom"></div></a></div>
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
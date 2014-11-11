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
                    <h2>November 2013 - </h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>November, 2013</span> <span><i class="icon-user"></i>Chris England</span></div>
                            <div class="post-description">
                                <ul class="star_list">
                                    <li><strong>Age:</strong> MS</li>
                                    <li><strong>Years Running:</strong>less than 1</li>
                                    <li><strong>Favourite race:</strong>Sleaford 10k was my best official 10k effort of the 
                                        season - I ran a PB at the club's handicap race and was disappointed not to have 
                                        crossed the line first but there is always next year. 
                                        I also very much enjoyed the Belvoir 10k despite the terrible weather conditions 
                                        and the final 1k being a steep uphill climb! </li>
                                    <li><strong>Least Favourite Race:</strong>Belton cup my first race it hurt so bad! I was conned into doing it and instantly regretted it after mile one cross country and uphill. I recorded a very poor time around 1 hr 25 minutes - but it didn't put me off and in fairness it gave me the confidence that I could run 6 miles without dying and gave me a time to beat</li>
                                    <li><strong>Why did you start running?</strong>I was bullied into it by my dear friend Paul 'Rushy' Rushworth not sure how he convinced me - I think he wanted to get me back for beating him handsomely on the squash court. </li>
                                    <li><strong>Injuries received?</strong>Shin splints but fortunately I have worked through it. I hope I can avoid others but am sure something will get me</li>
                                    <li><strong>Furthest Distance ran?</strong>Half marathon at this year's Perkins Great Eastern Run. It was a very long way but again I now know I can run 13 miles without dying so that's a positive - I didn't look too clever at the end though</li>
                                    <li><strong>Trainers worn:</strong>For the half I wore Brooks Vapor 10s which I bought from Lincolnshire Runner in Lincoln. 
                                        I prefer Nike trainers but was given great advice by the staff there who thought that they would be best for me and to 
                                        be fair they have done the trick - much less ache after a few miles and we have bonded now racking up over 100 miles 
                                        together. I will be sad when they wear out but fortunately there are loads of shoes to choose from- you can never have too many! </li>
                                    <li><strong>Favourite running kit?</strong>Karrimor half tights and short shorts and a Nike dri fit top. I do also love my finishers tee from the half marathon not only is comfy but when I am out in it people can see that I went the distance. Of course I love my club colours too.</li>
                                    <li><strong>Top tip from your experience:</strong> just keep going - some people say that they can't run or they are not built for it, the wrong shape or age - I am proof that if you just keep going you will get there. I said to my wife the other day "I am just going to pop out and do a casual 4 miles" she laughed and when I asked her why she said it was funny because in January I couldn't run to the end of the street. She was right but now I am looking forward to next season and smashing my times in the same races as well as adding a few more to the calendar. </li>
                                    <li><strong>How many miles do you run per week?</strong>In the summer I was running around 30 miles per week but am only doing around 20 miles at the moment. I have found the dark nights tough so run three times a week at lunchtimes - you will find me in one of Grantham's lovely parks. I try to get a Linder one in at the weekend 6-8 miles.</li>
                                    <li><strong>Other hobbies?</strong> Squash, cycling, writing, golf, swimming and walking my dog Flash (he comes running with me sometimes too).</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/mom/201311_large.jpg" rel="image" title="Chris England"><img class="img-polaroid" src="../images/mom/201311_large.jpg" alt="Chris England" /><div class="image-overlay-zoom"></div></a></div>
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
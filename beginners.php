<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Beginners</title>
        <?php include 'common/css.php'; ?>
    </head>
    <body>

        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">

            <div class="ie-dropdown-fix" >

                <!-- Header -->
                <?php include 'common/header.php'; ?>
                <!-- Header / End -->

                <!-- Navigation -->
                <?php include 'common/navbar.php'; ?>
                <!-- Navigation / End -->

            </div>

            <!-- Fluid  Container -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title">
                    <h2>Beginners</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <!-- Fluid  Container -->
            <div class="row-fluid">          
                <div class="span10">
                    <p>
                        Grantham Beginners Group are lucky enough to have several new Leaders as well as the four experienced 
                        ones to assist you to either begin running or to train more regularly. Help will never be far away with this 
                        Group and we offer ten sessions worth of tips from Run in England to all newcomers. Our leaders are trained 
                        by UK Athletics and are all CRB checked. You set the pace and the distance so don't be put off if you are still 
                        at the "run, walk, run" stage as that is a great starting point. Our goal is to let you set your own targets and 
                        then to help you achieve them in an enjoyable way without getting an injury. You don't have to race but getting 
                        fitter is inevitable if you keep on coming.
                    </p>
                    <p>Our Beginners sessions are always spilt into 3 distinct phases:</p>

                    <ul class="arrow_list">
                        <li>We always start with a gentle dynamic warm up with various drills to get the muscles and heart ready f
                            or the main session.</li>
                        <li>We then go and do the main run session. We will tailor this to your ability.</li>
                        <li>When we get back - we spend 5  to 10 minutes doing a few stretches. These will help to prevent you feeling the 
                            after effects of your run and hopefully prevent injury.</li>
                    </ul>
                    <p>
                        Meet us in the foyer of Meres Leisure Centre, Trent Road, Grantham NG31 7XQ on Monday at 18:35 for initial 
                        registration and a discussion of your starting point. We begin the warm-up at 18:45. If you want more 
                        information please phone 0788 7796 991 or
                        <a href="mailto:admin@granthamrunningclub.co.uk" target="_blank">email us</a>
                    </p>
                    <p>Please complete the short questionnaire <a href="docs/new-runner-form.pdf">found here</a> and bring it with you.</p>
                </div>
                <div class="span2">

                    <h4>Documents</h4>
                    <ul class="links-list-alt">
                        <li><a href="docs/new-runner-form.pdf"  target="_blank">New Runners Form</a></li>
                        <li><a href="docs/RIE_Log_book.pdf"  target="_blank">New Runners Log Book</a></li>
                        <li><a href="docs/Handout_week_1.pdf" target="_blank">Week 1 Handout</a></li>
                        <li><a href="docs/Handout_week_2.pdf" target="_blank">Week 2 Handout</a></li>
                        <li><a href="docs/Handout_week_3.pdf" target="_blank">Week 3 Handout</a></li>
                        <li><a href="docs/Handout_week_4.pdf" target="_blank">Week 4 Handout</a></li>
                        <li><a href="docs/Handout_week_6.pdf" target="_blank">Week 6 Handout</a></li>
                        <li><a href="docs/Handout_week_7.pdf" target="_blank">Week 7 Handout</a></li>
                        <li><a href="docs/Handout_week_8.pdf" target="_blank">Week 8 Handout</a></li>
                        <li><a href="docs/Handout_week_9.pdf" target="_blank">Week 9 Handout</a></li>
                        <li><a href="docs/Handout_week_10.pdf" target="_blank">Week 10 Handout</a></li>
                    </ul>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span8">
                    <img src="images/beginners-route.jpg" alt="Beginners Route" class="img-polaroid"/>
                    <p>We have seven routes which have passed the risk assessment for use during the winter months which vary 
                        in length from just under a mile through small increments to the sort of distance a first timer might baulk at! 
                        But don't worry because we believe that by sticking to modest increases in distance that you will not only get 
                        stronger but will remain injury free. An example of our second route is shown below, we like it because it is a
                        loop that avoids hills and passes the start point every 2km (1.25 miles) which means you are never too far from 
                        the car park where you start. If you are at the walk run phase this route could take you 20 - 25 minutes.</p>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <img src="images/members/NikolaMarshall.jpg" alt="Nicki Marshall" class="img-polaroid"/>
                        <div class="caption">
                            <p>Age and previous experience are not a barrier as shown by our Nicky, who recently ran her first 10k, and then 
                                a 10 mile race in the same week as a Female Veteran of 60. (With an eight mile training run in between)</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fluid  Container End -->
        </div>

        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();
                console.log(str);
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
            })
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
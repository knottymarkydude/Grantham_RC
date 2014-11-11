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

            <div class="row-fluid " >
                <div class="span12">

                    <div class="headline"><h3>Grantham Cup 10K 2015</h3></div>

                    <div class="span9"> 

                        <p><img class="thumbnail" src="../images/events/gc/gc_home.jpg" align="right" alt="Grantham Cup 2015" />

                        <h4>Sunday April 19th 2015 at 11:30am</h4>

                        <p>Grantham's premier cross country challenge at <a href="http://belton-horse.co.uk/">Belton International Horse Trials</a></p>

                        <p>Fast becoming a firm favourite within the race calendar, come and experience this annual 10K off road run.</p>

                        <p>The course starts and finishes right at the heart of the action of the world renowned Belton International Horse Trials. Its route takes in the sweeping slopes of the deer park, rising to the splendid Belmont Tower where the panoramic views are amongst the most dramatic in Lincolnshire.</p>

                        <p>After your run, spend the day soaking up the atmosphere and enjoying a range of attractions including food courts, local produce, shopping tents, a fun fair, dog shows and of course, the world class horse trials.</p>

                        <p>Share in the continued success of this fantastic event and bring your friends and family for a fantastic day out in beautiful surroundings in the heart of Lincolnshire.</p>

                        <p>Profits are donated to <a href="http://www.kestevenrda.co.uk/">Kesteven RiDeAbility</a>, a fantastic organisation operating locally at Hough on the Hill, offering disabled adults and children the opportunity to experience equestrian disciplines such as Dressage, Showjumping and Endurance, all in a welcoming and supportive atmosphere.</p>

                        <p>With free day entry to the Horse Trials and a bottle of specially commissioned commemorative Trail Ale places are obviously very sought after. So enter today via <a href="http://www.runnersworld.co.uk/events/viewevent.asp?sp=&v=2&EN=87059&ms=" target="_blank">Runners World</a> or download the <a href="../docs/Grantham_Cup_2015.pdf">Entry form</a>.</p>
                    </div>
                    <div class="span2">
                        <div class="widget-alt">
                            <a href="http://www.runnersworld.co.uk/events/viewevent.asp?sp=&v=2&EN=87059&ms=" target="_blank">
                                <img class="thumbnail" src="../images/events/gc/rw200.jpg" align="left" alt="Enter at Runners World" />
                            </a>
                        </div>
                        <button type="button" class="btn btn-large" id="form-dl">Download Postal Entry Form</button>
                        <div class="widget-alt">
                            <a href="http://www.kestevenrda.co.uk/" target="_blank">
                                <img class="thumbnail" src="../images/events/gc/kesteven_reliability.jpg" alt="Supporting Kesteven RiDeAbility" />
                            </a>
                        </div>
                        <div class="widget-alt">
                            <a href="http://www.runningclubs.org.uk/" target="_blank">
                                <img class="thumbnail" src="../images/events/gc/arc.png" alt="ARC - Freedom to run" title="ARC is the fully democratic and accountable governing body for running clubs, providing what they need at lower cost and without unnecessary regulation or paper heavy systems" />
                            </a>
                        </div>


                    </div>
                </div>

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
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
            });

            $('#form-dl').click(function() {
                window.location.href = '../docs/Grantham_Cup_2015.pdf';
            })

        </script>

        <!-- Piwik --> 
        <?php include '../common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
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

            <!-- Content -->

            <!-- Fluid  Container -->
            <div class="row-fluid">

                <!-- Page Title -->
                <div id="page-title">
                    <h2>Training</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <!-- Fluid  Container -->
            <div class="row-fluid">          
                <div class="span12">

                    <p>
                        We offer a wide range of training options ideal for the novice jogger 
                        right up to club athlete standard. Grantham Running Club have six UKA 
                        licenced coaches who structure and oversee these workouts. As sessions 
                        may be subject to a late change due to races or weather conditions 
                        please e-mail us us before your initial visit.
                    </p>
                    <p>
                        We run promptly at the times stated. Please arrive early to change/warm-up etc. 
                        Our novice sessions on a Monday are particularly suitable for those who are completely new to running. 
                        They are also ideal for those people who may want to enter their first charity run eg a Race For Life event.
                    </p>
                </div>
            </div>
            <!-- Fluid  Container End -->

            <!-- 6 Columns -->
            <div class="span2">
                <div class="headline"><h4>Monday</h4></div>
                <p>A number of club members turn out to support the beginners on their run at 18:45 from the Meres. 
                    It is an ideal workout to loosen off your legs after a Sunday race.</p>
            </div>

            <div class="span2">
                <div class="headline"><h4>Tuesday</h4></div>
                <p>Quality not Quantity night - suitable for most. This session is for runners who want to improve their race times by working harder for shorter periods. Expect either hill efforts or interval training such as a pyramid workout. Railway Club - 18:45 (meet in car park)</p>
            </div>

            <div class="span2">
                <div class="headline"><h4>Wednesday</h4></div>
                <p>For improvers and those wanting to add an extra night. This session will benefit sub 65 minute 10k runners and will be 5 - 6½ miles at a comfortable pace. Meres Leisure Centre - 18:45 (meet in outer reception area)</p>
            </div>

            <div class="span2">
                <div class="headline"><h4>Thursday</h4></div>
                <p>Endurance night 9 miles+ - not suitable for novices. This session will benefit sub 45 minute 10k runners. Head-torch and Hi-Viz required during the winter. If your 10k time is over 40 minutes we recommend you are fully warmed up before we start. This may be changed to a taper run if we have runners competing on the Sunday. Railway Club - 18:45 (meet in car park)</p>
            </div>
            <div class="span2">
                <div class="headline"><h4>Friday</h4></div>
                <p>Suitable for all abilities and during the winter months an ideal session for those wanting to see the countryside during daylight. The route will often include the canal tow path. Meres Leisure Centre 10:00am.</p>
            </div>
            <div class="span2">
                <div class="headline"><h4>Sunday</h4></div>
                <p>Normally races take place on a Sunday morning but on the weekends there aren&apos;t any races and you don't fancy a hard road run why not try hashing?</p>
            </div>
            <!-- 6 Columns End -->
        </div>

   <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();
                
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");
            });
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
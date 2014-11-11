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
                <div id="page-title">
                    <h2>Grantham Cup Race Information</h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid" >
                <div class="span10">

                    <div class="headline"><a id="gc"><h4>Getting there</h4></a></div>
                    <p><img class="thumbnail" src="../images/events/grantham_cup.jpg" align="right" alt="Grantham Cup" />
                        There will be NO access into Belton Park from the usual entrance in Belton village.  All cars must enter via the 
                        Lion Gates, which are situated on Belton Lane. See map.   The postcode for the Lion Gates is NG31 9SH.
                    </p>

                    <div class="headline"><a id="gc"><h4>Race Day Information</h4></a></div>
                    <div class="alpha">
                        <p>There are plenty of toilets but only four showers.  Please leave your bags in your car; the car park will be 
                            conveniently close to the start of the race.  Medical cover will be first rate as we are using the Horse Trials 
                            infrastructure.  Refreshments will be widely available to suit all palates and thirsts!</p>
                    </div>

                    <div class="headline"><a id="gc"><h4>The Race</h4></a></div>
                    <div class="alpha">
                        <p>The course is approximately 10k and runs mostly over old turf with some tracks.  There is a short steep hill, 
                            a road crossing and a couple of stiles.  Please can spectators respect that there are sheep and deer within the 
                            park and it is their breeding season. Both the start and the finish take place at the red England Athletics inflatable 
                            gantry, which is to your front right as you enter the grounds of Belton House. The course will not be exactly 10k 
                            as we will wait until the Saturday before deciding on the final route which will take into account the positioning of 
                            the jumps, the weather both in the lead up affecting underfoot conditions and the wind on the day as we pass 
                            close to some elderly trees. I would expect it to be around 10.4k. There is one road crossing which you will use 
                            twice and will be marshalled, there will be a couple of stiles in the course around the 6k mark. After the drinks 
                            station we will put a limit marker to drop your bottle, if you have not finished it by that point can you please 
                            carry it to the finish line with you for the welfare of the animals using the fields. If you witness a fellow runner 
                            being injured make sure a marshal has been informed before you continue your run.</p>
                    </div>

                    <div class="headline"><a id="gc"><h4>The Start and Finish</h4></a></div>
                    <div class="alpha">
                        <p>Please be ready close to the start by 11.25am for the start at 11.30 prompt. At the end please move 
                            along the funnel and ensure you maintain your position as you collect your goody bag and drink.</p>
                    </div>

                    <div class="headline"><a id="gc"><h4>Prizes and presentation</h4></a></div>
                    <div class="alpha">
                        <p>Prizes will be awarded to first three places for men, women, vet men and vet women.  NB, one award per 
                            individual.  Presentation will be at approximately 12.45 outside the Horse Trials Secretaries Tent in the 
                            main body of the horse trials. </p>
                    </div>

                    <div class="headline"><a id="gc"><h4>Results</h4></a></div>
                    <div class="alpha">
                        <p>These will be e-mailed to all entrants and also posted  <a href="results.html">here</a></p>
                    </div>

                    <div class="headline"><a id="gc"><h4>Nottingham Hospitals Charity</h4></a></div>
                    <div class="alpha">
                        <p>Nottingham Hospitals Charity helps to save lives, build a better NHS or support research at Nottingham University Hospitals NHS Trust. 
                                   The Trust is made up of local hospitals - Nottingham City Hospital, the Queen's Medical Centre, and Ropewalk House.</p>

                        <h5>We are supporting the Nottingham Hospitals Charity</h5>
                        <div>
                            <a href="http://www.nottinghamhospitalscharity.org.uk/About+us" target="_blank">
                                <img src="../images/events/nottsHospCharity.png" />
                            </a>
                        </div>
                        <p>Nottingham Hospitals Charity are the only charity that is 100% dedicated to 
                            Nottingham local hospitals. By working with us at Nottingham Hospitals Charity, 
                            the money you donate 
                            goes directly to support NHS care in Nottingham. Together we are improving the 
                            things that matter to our patients, carers, visitors and staff. 
                            <a href="http://www.nottinghamhospitalscharity.org.uk/About+us" target="_blank">Nottingham Hospitals Charity</a>

                            Nottingham Hospitals Charity helps to save lives, build a better NHS or support research at Nottingham University Hospitals NHS Trust. 
                            The Trust is made up of local hospitals - 
                            Nottingham City Hospital, the Queen's Medical Centre, and Ropewalk House.</p>
                        <p>
                            We are the only charity that is 100% dedicated to Nottingham local hospitals. By working with us 
                            at Nottingham Hospitals Charity, the money you donate goes directly to support NHS care in Nottingham. 
                            Together we are improving the things that matter to our patients, carers, visitors and staff.
                        </p>
                    </div>


                </div>
                <div class="span2">
                    <?php include '../common/gcmenu.php'; ?>
                    <div class='widget-alt'>
                        <a href="http://www.runnersworld.co.uk/events/viewevent.asp?sp=&v=2&EN=81348&ms=" target="_blank">
                            <img class="thumbnail" src="../images/events/gc_enter_rw.jpg" align="left" alt="Enter at Runners World" />
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
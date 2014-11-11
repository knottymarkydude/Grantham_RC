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
                <div class="span10">

                    <div class="headline"><a id="gc"><h4>Grantham Cup 2014</h4></a></div>
                    <p><img class="thumbnail" src="../images/events/GC_2014_Start.jpg" align="right" alt="Grantham Cup 2014" />

                    <p>This 10k trail race took place on 6th April 2014 at Belton House, Grantham, starting at 11:30am.</p>

                    <p>Congratulations to Ben Livesey for coming in first place with a time of 40:09, and Laraine Porter as first woman with
                        a time of 51.29. Full results are available <a href="gc/results2014.php">here</a></p>
                    
                    <p>The race started in front of the fantastic <a href="https://www.nationaltrust.org.uk/belton-house/" target="_blank">Belton House</a>
                        and as you run through the deer park you will encounter some rough terrain., across old turf and a steep climb through sheep field's
                        to Belmont tower and further on to the woods. You may even encounter the odd obstacle along the way.<br />
                        You may even enjoy the view before you turn back to towards <a href="https://www.nationaltrust.org.uk/belton-house/" target="_blank">Belton House</a>.
                    </p>

                    

                    <p>Share the secret and bring your friends and family for a great day out in beautiful surroundings in the heart of Lincolnshire.</p>

                    <p><Nottingham Hospitals Charity helps to save lives, build a better NHS or support research at Nottingham University Hospitals NHS Trust. 
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
                <div class="span2">
                    <?php include '../common/gcmenu.php'; ?>
                    <!--<div class='widget-alt'>
                        <a href="http://www.runnersworld.co.uk/events/viewevent.asp?sp=&v=2&EN=81348&ms=" target="_blank">
                            <img class="thumbnail" src="../images/events/gc_enter_rw.jpg" align="left" alt="Enter at Runners World" />
                    </div>-->
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
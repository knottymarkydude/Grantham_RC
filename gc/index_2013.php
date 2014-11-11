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

                    <div class="headline"><a id="gc"><h4>Grantham Cup</h4></a></div>
                    <p><img class="thumbnail" src="../images/events/grantham_cup.jpg" align="right" alt="" />We would like to thank 
                        all you runners who tried so hard on this testing course that our results team were struggling to separate the many sprint finishes for position. 
                        We would also like to thank our marshals who did a great job coping with re-routing the course at the last minute to avoid the 
                        risk of falling branches as well as for the tremendous support they gave all the runners, our thanks also go to Steph, our 
                        lead horse rider.</p>
                    <p>Unfortunately our race HQ like the gantry was blown down even as we put it up so we apologise for any problems caused in 
                        finding the start and trying to read our signs which ended up at jaunty angles. As well as the wind to contend with the 
                        runners may also have noticed it slightly damp underfoot in places. We certainly noticed at as our four by four laying 
                        out the course became bogged down several times, we are grateful to Mark Phillips for towing it out one of the many occasions 
                        it got stuck. Finally thank you for your donations to the Grantham Foodbank, we will be handing them over with a cheque to help 
                        the important work that they do.</p>
                    <p>This 10k trail race takes place on 14th April 2013 at Belton House Grantham starting at 11:30. Entry is for attached entries and 
                        for un-affiliated runners for advance entries only, this allows entry to the horse show for you and a friend, children under 14 
                        go free. There is no race entry on the day. Below is a photograph of the runners at the start waiting to be led round the course 
                        by the one of our four legged runners but don't be misled by the smooth flat grassy surface in the picture, once you leave the 
                        show jumping ring and run through the deer park you will encounter some rough terrain across old turf and some steep climbs 
                        through the sheep fields to the Tower and the woods, there may even be a stile or two in your way. We are able to have access 
                        this unique course and run up that fantastic hill by kind permission of The National Trust to whom we are very grateful for 
                        also allowing us all into the beautiful parkland which surrounds Belton House. This race is part of the Belton Horse trials 
                        festival so we have ample and well organised car parking, superb catering choices and enough toilets. Belton Horse Trials is 
                        perhaps eventings best kept secret? big enough to give you all the thrills and spills of international sport and a wide 
                        array of trade stands, yet small enough to feel you are really up close and personal with the stars of the sport!</p>

                    <p>There is something for everyone, with our popular Ladies Charity Lunch, Experts Eye Lunch with Course Walk and Judges.
                        View Dressage Commentary, Stallion Parade, Classic Cars, Pony Club Games and much more.</p>

                    <p>Share the secret and bring your friends and family for a great day out in beautiful surroundings in the heart of Lincolnshire.</p>

                    <p><Nottingham Hospitals Charity helps to save lives, build a better NHS or support research at Nottingham University Hospitals NHS Trust. 
                    The Trust is made up of local hospitals - Nottingham City Hospital, the Queen's Medical Centre, and Ropewalk House.</p>

                    <p>We are the only charity that is 100% dedicated to Nottingham local hospitals. By working with us at Nottingham Hospitals Charity, the money you donate 
                    goes directly to support NHS care in Nottingham. Together we are improving the things that matter to our patients, carers, visitors and staff. 
                    <a hreh="http://www.nottinghamhospitalscharity.org.uk/About+us">Nottingham Hospitals Charity</a></p>

                        <br/><br/>

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
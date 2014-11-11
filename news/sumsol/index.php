<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Summer Solstice</title>
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

                    <div class="headline"><a id="gc"><h4>Summer Solstice 2014</h4></a></div>
                    <p>
                        <img class="thumbnail" src="../images/events/Solstice10k_small.jpg" align="right" alt="Solstice 10k" />
                    <p>The race takes place on Friday 20th June at 7:15pm. Previous years have sold out so don't delay if you wish to enter.</p>

                    <p>This will be the fourth year of this midsummer evening 10km road race organised by Grantham Running Club in the quiet lanes around Long Bennington. 
                        It promises to be an even bigger event than last year with the race having a larger 400 runner limit, and chip timing by 
                        <a href="http://www.jaguartiming.co.uk/" target="_blank"> Jaguar Timing.</a>
                    </p>

                    <p>The accurately measured course whilst not pancake flat has delivered many 'seasons best' and a few elusive pb's.
                    This is also an ideal course to attempt your first 10k race.</p>

                    <p>
                        For the 2012 race the HQ was re-located to the Long Bennington Sports Pavilion which offers better facilities with more toilets, changing rooms and off 
                        road car parking.
                    </p>
                    
                    <p>The race starts 432 metres from  the  'Race HQ' and finishes at the entrance to the playing fields. 
                        The location is conveniently located off the A1 just north of Grantham.
                    </p>
                    <img class="thumbnail" src="../images/events/summersolstice.png" align="left" alt="Solstice 10k" width="100" />
                    <p>Sleaford Brewery will be supplying the Specially Labelled Summer Solstice Ale for all finishers PLUS a Real Ale Bar 
                        featuring cask Best Bitter, Pale Ale, Meadowbrook Cider and even their own Pilsner Lager, so you can hang about after the race 
                        and make it a social night! Food and soft drinks will also be available.
                    </p>
                    
                    <p>The Lincolnshire Runner will also be attending the event with its mobile retail stall with plenty of offers on running shoes and running clothing. 
                        If any one wants anything specific bringing to the race just get in touch by phone (01522 523326) or email info@lincolnshirerunner.co.uk by 12 
                        noon on the day of the race. Any shops friends, please come across and say hello.</p>
                    
                    <p>
                        Every finisher received a specially commissioned bottle of Summer Solstice Ale produced by the Sleaford brewery Hop Me Up Ltd, 
                        and a commemorative glass to go with it.
                    </p>

                    <div class="hero-unit margintop">
                        <h2>Prizes</h2>
                        <p>1st £30, 2nd £25, 3rd £20 overall and 1st vet £15 (MV40, MV50, MV60 and FV35, FV45, FV55) - 
                            only 1 prize per person.</p>
                        <p>Team Prize (Male & Female)</p>
                        <p>Entry limit 500 </p>
                        <p>Entry limit reached, entries now closed. Thank you to everyone that has entered.</p>
                    </div>


                </div>
                <div class="span2">
                    <?php include '../common/sumsolmenu.php'; ?>
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
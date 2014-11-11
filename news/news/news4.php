<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club</title>
        <?php include '../common/css.php'; ?>
        <link rel="stylesheet" type="text/css" href="../css/table_themes/green/style.css">

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
                    <h2></h2>
                </div>
                <!-- Page Title / End -->
            </div>
            <div class="row-fluid " >

                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>Weekend of 24th May 2014</span></div>
                            <div class="post-description">
                                <h4>Deeping Rotary 10k</h4>
                                <p>
                                    Workmates Chris England and Paul Rushworth teamed up to enter the Deeping St James 10k race in aid of local charities, 
                                    despite being run on the hottest day of the year so far Paul managed to finish 27th in a time of 40:53 with Chris struggling 
                                    in the heat from 6k onwards to finish in 60:45
                                </p>
                                <h4>Liverpool Marathon</h4>
                                <p>On a course ill-suited to fast times with too many twists and turns which seemed more interested in taking in the landmarks 
                                    than helping the runners get into their stride GRC’s Iain Brown managed to record a personal best crossing the line in a 
                                    time of 3:22:29
                                </p>
                                <h4>Leiden Marathon</h4>
                                <p>
                                    Catherine Payne represented Grantham Running Club at the Leiden Marathon in the Netherland last weekend. This race was an International Association of Marathon 
                                    Races event and attracted a high quality field from round the world. Unfortunately for most of the runners a freak heat wave meant that temperatures were a full 
                                    ten degrees higher than average which resulted in over 50% either not starting or failing to beat the 6 hour cut-off to have their result recorded. The heat suited 
                                    some with the course record being broken as the podium was dominated by Kenyan and Ethiopian runners. On a flat course which offered little shade the times of the 
                                    European runners were slowing as the afternoon wore on but despite recording one of her slowest marathon times of 3:29:00 Catherine was able to work her way through 
                                    the field to finish as forth lady and first veteran. This is highest placing in an overseas marathon by a Grantham runner. Fellow GRC runner Robert McArdle found 
                                    the heat not to his liking and faded to 3:45:50 in 141st position
                                </p>
                                
                                <h4>Edinburgh Marathon</h4>
                                <p>
                                    The six runners from Grantham who took part in this year’s Edinburgh Marathon claimed five Personal best’s between them as 
                                    Ben Hatherley running his second full marathon this month was first home in just over three and a quarter hours despite issues 
                                    with cramp in the last mile. Husband and wife team Nick and Louise Payne both had great times in their first outing at Edinburgh
                                </p>
                                <img src="../images/events/EdinburghResults.png" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail"><a href="../images/events/Paul_Chris_large.jpg" rel="image" title="Deeping 10k"><img class="img-polaroid" src="../images/events/Paul_Chris_small.jpg" alt="" /><div class="image-overlay-zoom"></div></a></div>
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
                    $("#news").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
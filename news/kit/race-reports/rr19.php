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
                    <h2>London Marathon 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 13 April, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        With most of Grantham Running Club’s members opting for more runner friendly challenges this spring 
                                        it was left to the trio of Paul Rushworth, Gordon Geach and Andy Spencer to represent the club in the 
                                        capital. In his 9th outing on this course Paul managed to hit his target time of three hours and seven 
                                        minutes although he had to call on his considerable experience in the final three miles. In his first 
                                        London Marathon after racing in the Berlin, Paris and Amsterdam marathons Gordon Geach found the 
                                        overcrowded streets not to his liking and was unable to get into a rhythm but was pleased to eventually 
                                        finish in 3:55:38.
                                    </p>

                                    <p>
                                        First time marathon runner Andy Spencer marked the occasion by raising £7,000 for the Motor Neurone Disease 
                                        Association and finished in a time of 4:05:39, here he is pictured celebrating with his friends at MNDA after 
                                        the race.
                                    </p>

                                    <div>
                                        <table border="1" cellpadding="0" cellspacing="1" id="results_table" class="tablesorter">
                                            <thead>
                                            <th>Name</th>
                                            <th>Time</th>
                                            <th>Gender</th>
                                            </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Paul Rushworth</td>
                                                    <td>03:07:00</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <td>Gordon Geach</td>
                                                    <td>3:55:38</td>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <td>Andy Spencer</td>
                                                    <td>4:05:39</td>
                                                    <td>Male</td>
                                                </tr>

                                            </tbody>
                                        </table>


                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/LM2014-Andy-mnd-large.jpg" rel="image" title="Andy Spencer marked the occasion by raising £7,000 for the Motor Neurone Disease Association">
                            <img class="img-polaroid" src="../images/race-reports/LM2014-Andy-mnd-small.jpg" alt="Andy Spencer" />
                            <div class="image-overlay-zoom"></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Wrapper / End -->
            <!-- Footer   -->
            <?php include '../common/footer.php'; ?>
            <!-- Javascript -->
            <?php include '../common/js.php'; ?>
            <script type="text/javascript" src="../js/jquery.tablesorter.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    var str = location.href.toLowerCase();
                    $('#nav li a').each(function() {
                        if (str.indexOf(this.href.toLowerCase()) > -1) {
                            $(this).addClass("active");
                        }
                    });

                    // extend the default setting to always include the zebra widget.
                    $.tablesorter.defaults.widgets = ['zebra'];
                    // extend the default setting to always sort on the first column
                    $.tablesorter.defaults.sortList = [[1, 0]];
                    // call the tablesorter plugin
                    $("table").tablesorter();
                    $("#race-reports").addClass("active");
                });
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
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
                    <h2>Sleaford Half Marathon</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 23 February, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <p>
                                    In a record field of 750 entrants at the Sleaford Half Marathon Grantham Running Club had a strong representation despite fielding full teams in both 
                                    the male and female national cross country championships the previous day. On an exposed course in near gale force conditions times were slower 
                                    than normal but despite this Rob Howbrook manage to carve out another PB for himself. Rob is pictured here battling into a powerful headwind in the 
                                    final half mile. There was also a strong performance from Abi Schofield who had raced the previous day. The women’s team were place second with 
                                    all three runners finishing in the top twenty ladies. Full club results shown below. For full race results <a href="http://www.chiptiminguk.co.uk/ps/results/Sleaford%20Half%20Marathon/30126" target="_blank">click here...</a>
                                </p>
                                <div class="margintop">
                                    <table border="1" cellpadding="0" cellspacing="1" id="results_table" class="tablesorter">
                                        <thead>
                                            <tr>
                                                <th>Position</th>
                                                <th>Name</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>76</td>
                                                <td>Iain Brown</td>
                                                <td>01:33:57</td>
                                            </tr>
                                            <tr>
                                                <td>85</td>
                                                <td>Abi Schofield</td>
                                                <td>01:35:20</td>
                                            </tr>
                                            <tr>
                                                <td>110</td>
                                                <td>Holly Durham</td>
                                                <td>01:38:19</td>
                                            </tr>
                                            <tr>
                                                <td>132</td>
                                                <td>Rob Howbrook</td>
                                                <td>01:40:16</td>
                                            </tr>
                                            <tr>
                                                <td>162</td>
                                                <td>Catherine Payne</td>
                                                <td>01:42:14</td>
                                            </tr>
                                            <tr>
                                                <td>173</td>
                                                <td>Robert McArdle</td>
                                                <td>01:42:54</td>
                                            </tr>
                                            <tr>
                                                <td>532</td>
                                                <td>Chris England</td>
                                                <td>02:23:15</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="thumbnail">
                        <a href="../images/race-reports/Rob-Howbrook-large.jpg" rel="image" title="Rob Howbrook carving out a PB">
                            <img class="img-polaroid" src="../images/race-reports/Rob-Howbrook-small.jpg" alt="Rob Howbrook carving out a PB" />
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
                $("#race-reports").addClass("active");
            </script>

            <!-- Piwik --> 
            <?php include '../common/piwik.php'; ?>
            <!-- End Piwik Tracking Code -->
    </body>
</html>
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

                    <div class="headline"><a id="gc"><h4>Grantham Cup Prize Winners</h4></a></div>

                    <div id="portfolio-wrapper">
                        <!-- 1/2 Column -->
                        <div class="span6 portfolio-item">
                            <div class="item-description alt">
                                <h4>2013</h4>
                                <div class="team-about">
                                    <h5>Men’s Open Race</h5>
                                    <ul>
                                        <li> 1 41.54 589 Mike Chapman  NENE VALEY HARRIERS</li>
                                        <li>2 42.02 496 Tim Clayton  NORTH DERBYSHIRE</li>
                                        <li>3 45.00 595 Olly Slater  NENE VALLEY HARRIERS</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Male Veteran 40</h5>
                                    <ul>
                                        <li>45.16 532 Sandy Telfer  SLEAFORD STRIDERS</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Male Veteran 50</h5>
                                    <ul>
                                        <li>47.55 546 Vaughan Roberts  BOURNE TOWN HARRIERS</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Women’s Open Race</h5>
                                    <ul>
                                        <li>13 47.25 548 Emily Foran  SLEAFORD STRIDERS</li>
                                        <li>33 52.48 534 Holly Durham </li>
                                        <li>39 53.55 511 Laraine Porter  WEST END RUNNERS</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Female Veteran 35</h5>
                                    <ul>
                                        <li>54.48 399 HELEN STOUT</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Female Veteran 45</h5>
                                    <ul>
                                        <li>58.29 560 Amanda Moss  LINCOLN TRI CLUB</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="span6 portfolio-item">
                            <div class="item-description alt">
                                <h4>2012</h4>
                                <div class="team-about">
                                    <h5>Men’s Open Race</h5>
                                    <ul>
                                        <li>1 428 BRETON HOLDSWORTH CLAYTON LE MOORS HARRIERS 00:37:32</li>
                                        <li>2 434 MIKE CHAPMAN NENE VALLEY HARRIERS 00:37:54</li>
                                        <li>3 439 PAUL MASSINGHAM
                                            M STAMFORD STRIDERS 00:38:06</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Male Veteran</h5>
                                    <ul>
                                        <li>7 339 ARTHUR SHORT GRANTHAM AC 00:40:40</li>
                                    </ul>
                                </div>
                                <div class="team-about">
                                    <h5>Womens’s Open Race</h5>
                                    <ul>
                                        <li>16 464 MAGGIE SKINNER
                                            F STAMFORD STRIDERS 00:44:24</li>
                                        <li>23 326 CATHERINE PAYNE
                                            FV GRANTHAM AC 00:46:16</li>
                                        <li>40 317 AMANDA HANNAH
                                            FV STAMFORD STRIDERS 00:49:33</li>
                                    </ul>
                                </div>

                                <div class="team-about">
                                    <h5>Female Veteran</h5>
                                    <ul>
                                        <li>61 335 MARY MILLS HOLME PIERREPONT RC 00:52:09</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="span2">
                   <?php include '../common/gcmenu.php'; ?>
                    <div class='widget-alt'>
                        <a href="http://www.runnersworld.co.uk/events/viewevent.asp?sp=&v=2&EN=81348&ms=" target="_blank"><img class="thumbnail" src="../images/events/gc_enter_rw.jpg" align="left" alt="Enter at Runners World" />
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
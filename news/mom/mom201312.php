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

        </div>

        <!-- Content -->


        <div class="row-fluid">

            <!-- Page Title -->
            <div id="page-title" >
                <h2>December 2013 - Abi Schofield</h2>
            </div>
            <!-- Page Title / End -->
        </div>


        <div class="row-fluid " >


            <div class="span8">
                <div class="post post-page">
                    <div class="post-content">
                        <div class="post-meta"><span><i class="icon-calendar"></i>December, 2013</span> <span><i class="icon-user"></i>Abi Schofield</span></div>
                        <div class="post-description">
                            <ul class="star_list">
                                <li><strong> Age:</strong> 23</li>
                                <li><strong>Years Running:</strong> 2</li>
                                <li><strong>Favourite race:</strong> London marathon 2013, the atmosphere was fantastic and I never thought I'd be able to run a half marathon let alone 
                                    a full one! Despite poor training due to injury I managed it and raised £1300 for NSPCC.</li>
                                <li><strong>Least Favourite Race:</strong> Sleaford half marathon 2013, it was cold, snowing and my IT band hurt so much!</li>
                                <li><strong>Why did you start running?</strong> In my third year if uni I began running to raise money for Great Ormond Street running London 10k, I loved racing so much I carried on..</li>
                                <li><strong>Injuries received?</strong> IT band syndrome has thankfully cleared up and I suffer from plantar fasciatis in my feet.</li>
                                <li><strong>Furthest Distance ran?</strong> One Marathon.</li>
                                <li><strong>Trainers worn:</strong> saucony</li>
                                <li><strong>Favourite running kit?</strong> Compression socks...they are amazing!</li>
                                <li><strong>Top tip from your experience:</strong>  Recently I have found that using another competitor for a good pace during a race, this helped me in Stanwick lakes half and Nene Valley 10m 
                                    to keep a good pace rather than starting too fast.</li>
                                <li><strong>How many miles do you run per week?</strong> Depends on work and other commitments, but currently 30 miles a week.</li>
                                <li><strong>Other hobbies?</strong> I like the cinema and shopping obviously! I love spinning classes and going to the gym as many of my friends also go.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="span4">
                <div class="thumbnail"><a href="../images/mom/201312_large.jpg" rel="image" title="Abi Schofield"><img class="img-polaroid" src="../images/mom/201312_large.jpg" alt="Abi" /><div class="image-overlay-zoom"></div></a></div>

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
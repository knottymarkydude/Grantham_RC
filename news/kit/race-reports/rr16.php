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
                    <h2>Grantham Cup Trail Race 2014</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 6 April, 2014</span> <span><i class="icon-user"></i>By <a href="#">Gordon</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        Grantham Running Club hosted the Grantham Cup 10K Trail Race in association with Belton International Horse Trials. 
                                        The race covers a tough, off road route through the historic grounds of Belton Park.  
                                        The race is one of the most challenging 10k routes in the county and involves two stiff climbs towards Belton Tower 
                                        over terrain that is more usually found in a traditional fell race. In keeping with the equine theme the runners were 
                                        lead from the start and through the park by a lead horse riden by Abi Denny. Profits from the event will be donated to 
                                        the Nottingham Hospital Charity.</p>
                                    <p>
                                        Despite challenges of competing with the Lincoln 10k, Sheffield Half Marathon and the Manchester Marathon, 
                                        there was a respectable field lined up at the start. The men’s race was won by Birchfield Harriers, 
                                        Ben Livesey in a time of in a time of 40:09. Lorraine Porter of West End Runners was first lady home in 51:29.
                                    </p>


                                    <h5>Grantham runners were represented by</h5>
                                    
                                    <table border="1" cellpadding="0" cellspacing="1" id="results_table" class="tablesorter">
                                        <thead>
                                        <th>Name</th>
                                        <th>Time</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tom Fowler</td>
                                                <td>49:07</td>
                                            </tr>
                                            <tr>
                                                <td>Tommy Williamson</td>
                                                <td>51:35</td>
                                            </tr>
                                            <tr>
                                                <td>Stuart Sinclair</td>
                                                <td>53:06</td>
                                            </tr>
                                            <tr>
                                                <td>Ben Harness  </td>
                                                <td>54:13</td>
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
                        <a href="../images/events/GC_Press_Release_large.jpg" rel="image" title="Grantham Cup Trail Race 10k 2014">
                            <img class="img-polaroid" src="../images/events/GC_Press_Release_small.jpg" alt="Grantham Cup Trail Race 10k 2014" />
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
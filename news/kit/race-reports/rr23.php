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
                    <h2>Langtoft 10k</h2>
                </div>
                <!-- Page Title / End -->
            </div>

            <div class="row-fluid " >
                <div class="span8">
                    <div class="post post-page">
                        <div class="post-content">
                            <div class="post-meta"><span><i class="icon-calendar"></i>On 4 May, 2014</span> <span><i class="icon-user"></i>By <a href="#">Robert</a></span></div>
                            <div class="post-description">
                                <div>
                                    <p>
                                        The Langtoft 10k is one of the best established races in South Lincolnshire which has been taking place for 25 years and attracted 
                                        five Grantham Running club members to participate in this year’s race. First home was Tommy Williamson in just over 43 minutes with 
                                        Andrew Spencer winning a close tussle with Mark Hillson a few minutes behind. Sarah High was first of the ladies home in a season’s 
                                        best despite a strong headwind in the first 3k.
                                    </p>                                 
                                </div>
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
                                                <td>Tommy Williamson</td>
                                                <td>43:06</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Andrew Spencer</td>
                                                <td>45:18</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Mark Hillson</td>
                                                <td>45:36</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Sarah High</td>
                                                <td>48:32</td>
                                                <td>Female</td>
                                            </tr>
                                            <tr>
                                                <td>Lucy Robert</td>
                                                <td>52:21</td>
                                                <td>Female</td>
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
                        <a href="../images/race-reports/Andrew-S-Langtoft-10k_large.jpg" rel="image" title="Andrew Spencer">
                            <img class="img-polaroid" src="../images/race-reports/Andrew-S-Langtoft-10k_small.jpg" alt="Andrew Spencer" />
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
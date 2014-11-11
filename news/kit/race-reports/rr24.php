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
                    <h2>Milton Keynes Marathon and Half Marathon</h2>
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
                                        The Milton Keynes Marathon Festival is one of the smaller city marathons winding its way round the woodlands, lakesides and parks within the city boundary. 
                                        Despite being an improved course for 2014 with some underpasses and canal bridges removed from the route it is not yet a first division course with its constant undulations and tight turns.</p>      
                                    <p>
                                        Two of the GRC runners opted for the shorter version of this race with Anthony Burton making his debut at the distance and Andrew Pask stepping down from the full marathon after securing a great 
                                        marathon time a week weeks ago in Manchester. The other four Grantham Running Club athletes took part in the full marathon with both Scott Jones and Ben Hatherley setting Personal bests on a 
                                        course that wasn’t fast and was hot in the second half.</p>      
                                                                
                                </div>
                                
                                <div>
                                    <h3>Marathon</h3>
                                    
                                    <table border="1" cellpadding="0" cellspacing="1" id="results_table" class="tablesorter">
                                        
                                        <thead>
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>Gender</th>
                                        </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Ben Hatherley</td>
                                                <td>3:20:32</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Tom Fowler</td>
                                                <td>3:25:04</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Scott Jones</td>
                                                <td>3:39:29</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Matthew Kingston-Lee</td>
                                                <td>3:39:29</td>
                                                <td>Male</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <h3>Half Marathon</h3>
                                    
                                    <table border="1" cellpadding="0" cellspacing="1" id="results_table" class="tablesorter">
                                        <thead>
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>Gender</th>
                                        </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Andrew Pask</td>
                                                <td>1:34:28</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Andrew Burton</td>
                                                <td>2:10:34</td>
                                                <td>Male</td>
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
                        <a href="../images/race-reports/MK_Marathon_2014_large.jpg" rel="image" title="left to right, Matthew Kingston Lee, Scott Jones, Ben Hatherley and Tom Fowler with their medals after the race">
                            <img class="img-polaroid" src="../images/race-reports/MK_Marathon_2014_small.jpg" alt="left to right, Matthew Kingston Lee, Scott Jones, Ben Hatherley and Tom Fowler with their medals after the race" />
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
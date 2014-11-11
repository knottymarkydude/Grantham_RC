<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Admin - Grantham Running Club</title>
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
                    <h2>Add Race Report</h2>
                </div>
                <!-- Page Title / End -->

                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                    <table width="90%" border="0" cellpadding="1" cellspacing="1" class="box">
                        <tr> 
                            <td>Title: </td>
                            <td><input type="text" name="title" size="200"></td>
                        </tr>
                        <tr> 
                            <td>Author: </td>
                            <td><input type="text" name="author" size="200"></td>
                        </tr>
                        <tr> 
                            <td>Report Date: </td>
                            <td><input type="text" name="report_date" size="200"></td>
                        </tr>
                        
                        <tr> 
                            <td>Race Site: </td>
                            <td><input type="text" name="race_url" size="200"></td>
                        </tr>                     
                        <tr> 
                            <td>Live: </td>
                            <td><input type="checkbox" name="live"></td>
                        </tr>
                        <tr> 
                            <td>Front Page: </td>
                            <td><input type="checkbox" name="frontpage"></td>
                        </tr>                      
                        <tr> 
                            <td>Content: </td>
                            <td><input type="textarea" name="content" rows="4" cols="200"></td>
                        </tr>
                        <tr> 
                            <td>Image: </td>
                            <td><input name="image_file" type="file" id="imagefile"> </td>
                        </tr>
                    </table>
                </form>

            </div>


        </div>
        <!-- Wrapper / End -->
        <!-- Footer   -->
        <?php include '../common/footer.php'; ?>
        <!-- Javascript -->
        <?php include '../common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var str = location.href.toLowerCase();
                console.log(str);
                $('#nav li a').each(function () {
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
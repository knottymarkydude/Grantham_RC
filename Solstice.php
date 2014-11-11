<? ob_start(); ?>
        <?php
        @include("sitefunctions.php");

        /* Move page with 301 http status code */
        movePage(301, "http://www.granthamrunningclub.co.uk/sumsol/index.php");
        ?>
<? ob_flush(); ?>
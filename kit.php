<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Grantham Running Club - Race Reports</title>
        <?php include 'common/css.php'; ?>

    </head>
    <body>

        <!-- Wrapper Start -->
        <div id="wrapper" class="container-fluid">

            <div class="ie-dropdown-fix" >

                <!-- Header -->
                <?php include 'common/header.php'; ?>
                <!-- Header / End -->

                <!-- Navigation -->
                <?php include 'common/navbar.php'; ?>
                <!-- Navigation / End -->

            </div>
            <!-- Content -->
            <div class="row-fluid">
                <!-- Page Title -->
                <div id="page-title">
                    <h2>Club Kit</h2>

                    <!-- Filters -->
                    <div id="filters" class="pull-right">
                        <ul class="option-set" data-option-key="filter">
                            <li><a href="#filter" class="selected" data-option-value="*">All</a></li>
                            <li><a href="#filter" data-option-value=".new">New</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Page Title / End -->

            </div>
      
            <!-- Portfolio Content -->
            <div id="portfolio-wrapper">

              <div class="span3 portfolio-item">
                    <div class="picture"><a href="images/kit/GRC-Shirt.jpg" rel="image" title="Running T-Shirt"><img src="images/kit/GRC-Shirt_small.jpg" alt="Running T-Shirt"/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description alt">
                        <h5>Club T-Shirt</h5>
                        <p>
                            Comes in sizes, Small, Medium and Large.
                        </p>                  
                    </div>
                </div>
                
                <div class="span3 portfolio-item">
                    <div class="picture"><a href="images/kit/GRC-Vest.jpg" rel="image" title="Running Vest"><img src="images/kit/GRC-Vest_small.jpg" alt="Running Vest"/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description alt">
                        <h5>Club Vest</h5>
                        <p>
                            Comes in sizes, Small, Medium and Large.
                        </p>                  
                    </div>
                </div>
                
                <div class="span3 portfolio-item new">
                    <div class="picture"><a href="images/kit/GRC-Hoodie.jpg" rel="image" title="Club Hoodie"><img src="images/kit/GRC-Hoodie_small.jpg" alt="Club Hoodie"/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description alt">
                        <h5>Club Hoodie</h5>
                        <p>
                            Comes in sizes, Small, Medium and Large.
                        </p>                  
                    </div>
                </div>
                
                <div class="span3 portfolio-item">
                    <div class="picture"><a href="images/kit/GRC-HiViz.jpg" rel="image" title="Running Hi Viz"><img src="images/kit/GRC-HiViz_small.jpg" alt="Club Hi Viz"/><div class="image-overlay-zoom"></div></a></div>
                    <div class="item-description alt">
                        <h5>Club Hi Viz</h5>
                        <p>
                            Comes in 1 size.
                        </p>                  
                    </div>
            </div>



            </div>
            <!-- End Portfolio Content -->


            <!-- End 960 Container -->

        </div>
        <!-- Wrapper / End -->


        <!-- Footer   -->
        <?php include 'common/footer.php'; ?>
        <!-- Javascript -->
        <?php include 'common/js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var str = location.href.toLowerCase();
                $('#nav li a').each(function() {
                    if (str.indexOf(this.href.toLowerCase()) > -1) {
                        $(this).addClass("active");
                    }
                });
                $("#about").addClass("active");
            });
        </script>

        <script>
            $(window).load(function() {
                var $container = $('#portfolio-wrapper');
                $select = $('#filters select');

                // initialize Isotope
                $container.isotope({
                    // options...
                    resizable: false, // disable normal resizing
                    // set columnWidth to a percentage of container width

                    masonry: {
                        columnWidth: $container.width() / 12
                    }
                });
                $container.isotope({
                    itemSelector: '.portfolio-item'

                });
                // update columnWidth on window resize
                $(window).smartresize(function() {
                    $container.isotope({
                        // update columnWidth to a percentage of container width
                        masonry: {
                            columnWidth: $container.width() / 12
                        }
                    });
                });




                $select.change(function() {
                    var filters = $(this).val();

                    $container.isotope({
                        filter: filters
                    });
                });

                var $optionSets = $('#filters .option-set'),
                        $optionLinks = $optionSets.find('a');

                $optionLinks.click(function() {
                    var $this = $(this);
                    // don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                            key = $optionSet.attr('data-option-key'),
                            value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[ key ] = value;
                    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                        // changes in layout modes need extra logic
                        changeLayoutMode($this, options);
                    } else {
                        // otherwise, apply new options
                        $container.isotope(options);
                    }

                    return false;
                });
            });
        </script>

        <!-- Piwik --> 
        <?php include 'common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
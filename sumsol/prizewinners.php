<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Summer Solstice 10k 2014 Prize winners</title>
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
                <div id="page-title">
                    <h2>Prize Winners 2014</h2>
                </div>
                <!-- Page Title / End -->

            </div>

            <!-- Portfolio Content -->
            <div id="portfolio-wrapper">


                <div class="span5">

                    <div class="featuresbox">
                        <h5>Mens Prize Winners</h5>
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th class="tb-sumsol">Position</th>
                                    <th class="tb-sumsol">Name</th>
                                    <th class="tb-sumsol">Cat</th>
                                    <th class="tb-sumsol">Time</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="top-left">1</td>
                                    <td class="top-left">Ben Livesey</td>
                                    <td class="top-left">MS</td>
                                    <td class="top-left">31:57</td>

                                </tr>
                                <tr>
                                    <td class="top-left">2</td>
                                    <td class="top-left">Greg Southern</td>
                                    <td class="top-left">MV40</td>
                                    <td class="top-left">34:25</td>

                                </tr>
                                <tr>
                                    <td class="top-left">3</td>
                                    <td class="top-left">Alan Oliver</td>
                                    <td class="top-left">MS</td>
                                    <td class="top-left">35:13</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="featuresbox">
                        <h5>Mens Veteran Winners</h5>
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th class="tb-sumsol">Name</th>
                                    <th class="tb-sumsol">Cat</th>
                                    <th class="tb-sumsol">Time</th>      
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Mark Edmondson-Jones</td>
                                    <td>MV40</td>
                                    <td>35:30</td>

                                </tr>
                                <tr>

                                    <td>Nigel Watkin</td>
                                    <td>MV50</td>
                                    <td>38:06</td>

                                </tr>
                                <tr>

                                    <td>Peter Gooding</td>
                                    <td>MV60</td>
                                    <td>40:56</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="span5">
                    <div class="featuresbox">
                        <h5>Ladies Prize Winners</h5>
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th class="tb-sumsol">Position</th>
                                    <th class="tb-sumsol">Name</th>
                                    <th class="tb-sumsol">Cat</th>
                                    <th class="tb-sumsol">Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Emily Foran</td>
                                    <td>FV35</td>
                                    <td>39:04</td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rebecca Taylor</td>
                                    <td>FS</td>
                                    <td>40:39</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Abi Scofield</td>
                                    <td>FS</td>
                                    <td>41:29</td>

                                </tr>
                            </tbody>
                        </table>               
                    </div>

                    <div class="featuresbox">
                        <h5>Ladies Veteran Winners</h5>
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th class="tb-sumsol">Name</th>
                                    <th class="tb-sumsol">Cat</th>
                                    <th class="tb-sumsol">Time</th>      
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Victoria Old</td>
                                    <td>FV35</td>
                                    <td>43:15</td>

                                </tr>
                                <tr>

                                    <td>Janice Jones</td>
                                    <td>FV45</td>
                                    <td>47:29</td>

                                </tr>
                                <tr>

                                    <td>Paula Speechley</td>
                                    <td>FV55</td>
                                    <td>48:01</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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
                $("#sumsol").addClass("active");
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
        <?php include '../common/piwik.php'; ?>
        <!-- End Piwik Tracking Code -->
    </body>
</html>
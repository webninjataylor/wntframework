<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php //include('../includes/header.php'); ?>
    <?php //include('../includes/menu.php'); ?>
    <?php //include('../includes/leftrail.php'); ?>
    <!--
    <section class="main-content">
        <h1>Tool Tips</h1>
        <span class="tooltiptest" data-id="tip1">Tool-tip Test</span>
        <div id="tip1" class="tooltip">I am the hidden tip</div>
    </section>
    -->
    
    
    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
        <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
        <div class="container">

            <div class="navbar navbar">
                <div class="navbar-inner">
                    <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><img src="../images/camera_d3-1.png" alt="cam logo" class="myImg"> Myscape</a>
                    <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!-- /.navbar-inner -->
            </div><!-- /.navbar -->

        </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <img src="../images/slide-01.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Spectacular Coastlines</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../images/slide-02.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="../images/slide-03.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>One more for good measure.</h1>
                        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="hilite-wrapper">
        <div class="container hilite">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="span4">
                    <img class="img-circle" src="../images/round1.jpg"/>
                    <h2>Waterfalls</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="span4">
                    <img class="img-circle" src="../images/round2.jpg"/>
                    <h2>Beaches</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="span4">
                    <img class="img-circle" src="../images/round3.jpg"/>
                    <h2>Cities</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- /.span4 -->
            </div><!-- /.row -->
        </div><!-- /.container hilite-->
    </div><!-- /.hilite wrapper -->

    <!-- START THE FEATURETTES -->
    <div class="container">
        <div class="featurette">
            <img class="featurette-image pull-right" src="../images/f1.jpg">
            <h2 class="featurette-heading">Amazing Oceans <span class="muted">They'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

        <div class="featurette">
            <img class="featurette-image pull-left" src="../images/f2.jpg">
            <h2 class="featurette-heading">Tranquil Waters <span class="muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>

        <hr class="featurette-divider">

        <div class="featurette">
            <img class="featurette-image pull-right" src="../images/f3.jpg">
            <h2 class="featurette-heading">Landlocked Water <span class="muted">Peaceful and Serene.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <hr class="featurette-divider">
    </div><!-- /.container -->
    <!-- /END THE FEATURETTES -->




    <div class="dropdown">
        <a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown trigger</a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Action</a></li>
            <li><a tabindex="-1" href="#">Another action</a></li>
            <li><a tabindex="-1" href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Separated link</a></li>
        </ul>
    </div>
    <div id="example" class="btn" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" data-placement="top">Example</div>
    <a href="http://twitter.github.io/bootstrap/base-css.html">Base CSS</a>
    <a href="http://twitter.github.io/bootstrap/components.html">Components</a>



    <!-- FOOTER -->
    <div class="hilite-wrapper"><!-- not bootstrap -->
        <div class="container">
            <footer class="footer">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2012 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </div><!-- /.container -->
    </div><!-- /.hilite-wrapper -->



    <?php include('../includes/footer.php'); ?>
</body>
</html>
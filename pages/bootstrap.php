<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span10">
                <!-- CAROUSEL -->
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
                </div>
                <!-- MARKETING MESSAGING AND FEATURETTES -->
                    <div class="container">
                        <div class="row">
                            <div class="span3">
                                <img class="img-circle" src="../images/round1.jpg"/>
                                <h2>Waterfalls</h2>
                                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                                <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                            <div class="span4">
                                <img class="img-circle" src="../images/round2.jpg"/>
                                <h2>Beaches</h2>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                            <div class="span3">
                                <img class="img-circle" src="../images/round3.jpg"/>
                                <h2>Cities</h2>
                                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                                <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span10">
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
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>TEMPLATE</title>
    <?php include('includes/meta.php'); ?>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <?php include('includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('includes/leftrail.php'); ?>
            <section class="span10">
                <p>This project is a framework, intended as a launching point for building a website from scratch.</p>
                <h2>Bootstrap</h2>
                <ul>
                    <li><a href="http://twitter.github.io/bootstrap/scaffolding.html">Scaffolding (layouts)</a></li>
                    <li><a href="http://twitter.github.io/bootstrap/base-css.html">Base CSS</a></li>
                    <li><a href="http://twitter.github.io/bootstrap/components.html">Components</a></li>
                    <li><a href="http://twitter.github.io/bootstrap/javascript.html">JavaScript</a></li>
                </ul>
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
                <div id="example" class="btn" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title" data-placement="top">Bootstrap Tooltip</div>
            </section>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>
</html>
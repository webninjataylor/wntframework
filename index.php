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
    <section class="left-rail">
        <aside class="feature">
            <h3>CSS</h3>
            <p>reset, main</p>
        </aside>
        <aside class="feature">
            <h3>JavaScript</h3>
            <p>jQuery, Modernizr, Underscore, WNT, main</p>
        </aside>
        <aside class="feature">
            <h3>Images</h3>
            <p>logo, social-media-icons</p>
        </aside>
        <aside class="feature">
            <h3>Project Tools</h3>
            <p>Fabric, Grunt</p>
        </aside>
    </section>
    <section class="main-content">
        <p>This project is a framework, intended as a launching point for building a website from scratch.</p>
        <h3>Layouts</h3>
        <ul class="bullets">
            <li><a href="">Three-column with top menu</a></li>
            <li><a href="">xxx</a></li>
            <li><a href="">xxx</a></li>
        </ul>
        <span class="tooltiptest" data-id="tip1">Tool-tip Test</span>
        <div id="tip1" class="tooltip" style="display:none;">I am the hidden tip</div>
    </section>
    <?php include('includes/footer.php'); ?>
</body>
</html>
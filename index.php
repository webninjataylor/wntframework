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
        <div id="tip1" class="tooltip">I am the hidden tip</div>
        <div id="cycler">
            <img src="images/water.jpg" alt="Water">
            <img src="images/sand.jpg" alt="Sand">
            <img src="images/tree.jpg" alt="Tree">
        </div>
        <table id="prices">
            <thead>
                <tr>
                    <th>Lot Number</th>
                    <th>Price</th>
                    <th>Smith Avenue</th>
                    <th>MLS</th>
                    <th>Acreage</th>
                    <th>Lot Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <p>
            <a href="?dcl=water">Show Water via URL</a>
        </p>
        
        <ul>
            <li><a href="#" data-id="water" class="display-layered-content">Show Water</a></li>
            <li><a href="#" data-id="sand" class="display-layered-content">Show Sand</a></li>
            <li><a href="#" data-id="tree" class="display-layered-content">Show Tree</a></li>
        </ul>

        <img id="water" class="layered-content" src="images/water.jpg" alt="Water">
        <img id="sand" class="layered-content" src="images/sand.jpg" alt="Sand">
        <img id="tree" class="layered-content" src="images/tree.jpg" alt="Tree">
    </section>
    <?php include('includes/footer.php'); ?>
</body>
</html>
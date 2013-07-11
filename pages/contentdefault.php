<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Content Default</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span10">
                <h1>Content Default</h1>
                <p>
                    <a href="?dcl=water">Show Water via URL</a>
                </p>
                <ul>
                    <li><a href="#" data-id="water" class="display-layered-content">Show Water</a></li>
                    <li><a href="#" data-id="sand" class="display-layered-content">Show Sand</a></li>
                    <li><a href="#" data-id="tree" class="display-layered-content">Show Tree</a></li>
                </ul>
                <img id="water" class="layered-content" src="/wntframework/images/water.jpg" alt="Water">
                <img id="sand" class="layered-content" src="/wntframework/images/sand.jpg" alt="Sand">
                <img id="tree" class="layered-content" src="/wntframework/images/tree.jpg" alt="Tree">
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Tool Tips</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span10">
                <h1>Tool Tips</h1>
                <span class="tooltiptest" data-id="tip1">Tool-tip Test</span>
                <div id="tip1" class="tooltip">I am the hidden tip</div>
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
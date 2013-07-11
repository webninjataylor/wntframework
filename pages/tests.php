<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>JS Unit Tests</title>
    <?php include('../includes/meta.php'); ?>
    <link rel="stylesheet" href="/wntframework/css/qunit-1.11.0.css">
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span10">
                <h1>JS Unit Tests</h1>
                <div id="qunit"></div>
                <div id="qunit-fixture"></div>
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
    <script type="text/javascript" src="/wntframework/js/qunit-1.11.0.js"></script>
    <script type="text/javascript" src="/wntframework/js/tests.js"></script>
</body>
</html>
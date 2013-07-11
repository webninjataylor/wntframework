<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>JSON Table</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span9">
                <h1>JSON Table</h1>
                <p>NOTE: Need to stop JSON from loading on every page.</p>
                <table id="prices" class="table">
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
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
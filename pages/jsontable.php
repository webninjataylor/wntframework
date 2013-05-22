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
    <?php include('../includes/leftrail.php'); ?>
    <section class="main-content">
        <h1>JSON Table</h1>
        <p>NOTE: Need to stop JSON from loading on every page.</p>
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
    </section>
    <?php include('../includes/footer.php'); ?>
</body>
</html>
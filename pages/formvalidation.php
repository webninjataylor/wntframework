<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span9">
                <h1>Form Validation</h1>
                <form class="cmxform" id="commentForm" method="get" action="">
                    <fieldset>
                        <legend>Please provide your name, email address (won't be published) and a comment</legend>
                        <p>
                            <label for="cname">Name (required, at least 2 characters)</label>
                            <input id="cname" name="name" minlength="2" type="text" required/>
                        </p>
                        <p>
                            <label for="cemail">E-Mail (required)</label>
                            <input id="cemail" type="email" name="email" required/>
                        </p>
                        <p>
                            <label for="curl">URL (optional)</label>
                            <input id="curl" type="url" name="url"/>
                        </p>
                        <p>
                            <label for="ccomment">Your comment (required)</label>
                            <textarea id="ccomment" name="comment" required></textarea>
                        </p>
                        <p>
                            <input class="submit" type="submit" value="Submit"/>
                        </p>
                    </fieldset>
                </form>
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
    <script type="text/javascript" src="/wntframework/js/jquery.validate.min.js"></script>
    <script>
        $("#commentForm").validate({
            debug: true
        });
    </script>
</body>
</html>
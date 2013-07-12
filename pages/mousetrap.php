<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Mousetrap</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/menu.php'); ?>
    <div class="container">
        <div class="row">
            <?php include('../includes/leftrail.php'); ?>
            <section class="span9">
                <h1>Mousetrap</h1>
                <p>
                    // single keys<br>
                    Mousetrap.bind('4', function() { console.log('You typed "4"'); });<br>
                    Mousetrap.bind('x', function() { console.log('You typed and let go of "x"'); }, 'keyup');
                </p>
                <p>
                    // combinations<br>
                    Mousetrap.bind('command+shift+k', function(e) {<br>
                        console.log('You typed "command+shift+k"');<br>
                        return false;<br>
                    });
                </p>
                <p>
                    Mousetrap.bind(['command+k', 'ctrl+k'], function(e) {<br>
                        console.log('You typed "command+k" OR "ctrl+k"');<br>
                        return false;<br>
                    });
                </p>
                <p>
                    // gmail style sequences<br>
                    Mousetrap.bind('g i', function() { console.log('You typed "g" then "i"'); });<br>
                    Mousetrap.bind('* a', function() { console.log('You typed "*" then "a"'); });
                </p>
                <p>
                    // konami code!<br>
                    Mousetrap.bind('up up down down left right left right b a enter', function() {<br>
                        console.log('You typed the sequence!');<br>
                    });
                </p>
            </section>
        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
    <script type="text/javascript" src="/wntframework/js/mousetrap.min.js"></script>
    <script>
        // single keys
        Mousetrap.bind('4', function() { console.log('You typed "4"'); });
        Mousetrap.bind('x', function() { console.log('You typed and let go of "x"'); }, 'keyup');
        // combinations
        Mousetrap.bind('command+shift+k', function(e) {
            console.log('You typed "command+shift+k"');
            return false;
        });

        Mousetrap.bind(['command+k', 'ctrl+k'], function(e) {
            console.log('You typed "command+k" OR "ctrl+k"');
            return false;
        });

        // gmail style sequences
        Mousetrap.bind('g i', function() { console.log('You typed "g" then "i"'); });
        Mousetrap.bind('* a', function() { console.log('You typed "*" then "a"'); });

        // konami code!
        Mousetrap.bind('up up down down left right left right b a enter', function() {
            console.log('You typed the sequence!');
        });
    </script>
</body>
</html>
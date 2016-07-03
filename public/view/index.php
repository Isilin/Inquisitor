<?php
    require_once('../../server/utils/cleaner.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="./">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inquisitor</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </head>

    <body>
        <header>
        </header>

        <nav>
        </nav>

        <nav>
            <ul id="library">
                <?php foreach ($libraries as $library): ?>
                    <li>
                        <?= $library['name'] ?>
                        <ul>
                            <?php foreach ($library['request'] as $request): ?>
                            <li><?= $request['name'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>

        <div id="main">
            <?php foreach ($tabs as $tab): ?>
                <section>
                    <h1><?= $tab['name'] ?></h1>
                    
                </section>
            <?php endforeach ?>
        </div>

        <footer>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
        <title>Oniroccio</title>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?= include('parts/navbar.php'); ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="collection">
                        <a href="#!" class="collection-item"><span class="badge">23</span>Alan</a>
                        <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
                        <a href="#!" class="collection-item">Alan</a>
                        <a href="#!" class="collection-item"><span class="badge blue"><?php echo '14'; ?></span>Alan</a>
                    </div>
                </div>
            </div>
        </main>

        <?= include('parts/footer.php'); ?>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
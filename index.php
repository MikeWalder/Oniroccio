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
        <main id="main">
            <!-- Main content of our page -->
            <div class="row">
                <a class="btn-small">Button</a>
            </div>

            <div class="row">
                <div class="col s6 m4">
                    <div class="card large">
                        <div class="card-image">
                            <img src="content/images/justinien.jpg" alt="Justinien 1er">
                            <span class="card-title flow-text">Justinien 1er</span>
                            <a href="" class="btn-floating btn-large halfway-fab waves-effect waves-light indigo darken-1"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p class="flow-text">Justinien 1st was the most famous byzantine emperor.</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4">
                    <div class="card large">
                        <div class="card-image" >
                            <img src="content/images/basile2.jpg" alt="Basile 2">
                            <span class="card-title flow-text">Basile 2</span>
                            <a href="" class="btn-floating btn-large halfway-fab waves-effect waves-light indigo darken-1" style="overflow: visible"><i class="material-icons" style="overflow: visible">add</i></a>
                        </div>
                        <div class="card-content">
                            <p class="flow-text">Basile 2 was a Byzantine emperor from the 11th century.</p>
                        </div>
                    </div>
                </div>
                <div class="col s6 m4">
                    <div class="card large">
                        <div class="card-image">
                            <img src="content/images/alexis1er.jpg" alt="Alexis 1er Comnène">
                            <span class="card-title flow-text">Alexis 1er Comnène</span>
                            <a href="" class="btn-floating btn-large halfway-fab waves-effect waves-light indigo darken-1">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                        <div class="card-content">
                            <p class="flow-text">Alexis Comnene the first 2 was a Byzantine emperor from the 13th century. 
                                He tried to reform the empire despite the arab attacks and won some successes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>

        <?= include('parts/footer.php'); ?>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
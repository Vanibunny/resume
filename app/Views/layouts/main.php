<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title>
        <!-- Bulma CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha384-rC2HP1kOhk9Umz1MPkFq0IWZQst41Ktx8Jen+9+BoFhFQ9DiHVKK55qVSEfcBbPL" crossorigin="anonymous">
        
    </head>
    <body class="has-background-white">

        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    Get to know me
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarNav">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarNav" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="<?= base_url("index") ?>">
                        Home
                    </a>

                    <a class="navbar-item" href="<?= base_url("about") ?>">
                        About Me
                    </a>

                    <a id="educationButton" class="navbar-item" href="<?= base_url("educ") ?>">
                        Education
                    </a>

                    <a class="navbar-item" href="<?= base_url("hobbies") ?>">
                        Hobbies
                    </a>

                    <a class="navbar-item" href="<?= base_url("future") ?>">
                        Future

                    <a class="navbar-item" href="<?= base_url("movies") ?>">
                        Favorite Movies
                    </a>
                </div>
            </div>
        </nav>
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
    </body>
</html>
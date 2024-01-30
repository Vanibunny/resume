<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About me</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
 
        .container {
            margin-top: 50px;
        }

        /* Update font-family for the "About Me" section */
        .custom-h3-color {
            color: #F0B7A4;
            font-family: Georgia;
        }

        .profile-img {
            max-width: 500px;
            border-radius: 10%;
        }

        p {
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

    <div class="container">
        <div class="columns">
            <div class="column is-half">
                <div>
                    <!-- Add the custom class to the h3 element -->
                    <h3 class="title is-3 custom-h3-color">About Me</h3>
                    <p>Birthday: August 24, 2001
                        <br>
                        MBTI: INTJ
                        <br>
                        <br>
                        I am a 22-year-old 4th-year BSIT student from West Visayas State University.
                        I'm from the City of Beauty & Dance, La Carlota City, Negros Occidental.
                        I am the youngest and only girl among my 4 siblings.
                        <br>
                        <br>
                        My heart belongs to the realm of animals and nature, a fact evident in the lively chaos of my
                        household,
                        where six energetic dogs share their love with us, and various plants add a touch of green to our
                        space.
                        <br>
                        <br>
                        My curiosity has always been piqued by the intricate workings of technology.
                        It's this insatiable interest that led me to pursue a course in IT,
                        a journey aimed at broadening my understanding of the ever-evolving tech landscape.
                        <br>
                        <br>

                    </p>

                    <!-- Add inline CSS to dynamically change the color -->
                    <a href="<?= base_url("educ") ?>" style="background-color: #F0B7A4; color: #fff;" 
                        class="button">Education
                    </a> 
                </div>
            </div>
            <div class="column is-half">
                <div class="has-text-centered">
                    <img src="<?= base_url("assets/profile.jpeg") ?>" class="profile-img" alt="Profile Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Bulma JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bulma@0.9.3/js/all.min.js"></script>

<?= $this->endSection() ?>

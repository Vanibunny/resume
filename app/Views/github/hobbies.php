<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Things I Like</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #F0B7A4;
            font-family: Georgia;
            font-size: 35px
        }

        p {
            font-size: 18px;
        }

        .back-link {
            margin-top: 20px;
        }

        .custom-back-button {
            background-color: #F0B7A4;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .hobbies-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Ensure 4 columns in each row */
            gap: 20px;
            margin-top: 20px;
        }

        .hobby-item {
            text-align: center;
            width: 100%; /* Set a fixed width for each item */
            box-sizing: border-box; /* Include padding and border in the width */
            padding: 10px; /* Add padding for spacing */
        }

        .hobby-image {
            max-width: 100%;
            border-radius: 10px;
        }
    </style>
</head>

    <div class="container">
        <h2>Things I Like</h2>
        <p>Here are my hobbies as well as the things that I like</p>

        <!-- Replace the text content with a container of pictures and descriptions -->
        <div class="hobbies-container">
            <div class="hobby-item">
                <img src="<?= base_url("assets/cat.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>I like playing video games especially when stressed or need to take a break from schoolworks</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/kdrama.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>During the weekend I love watching K-drama, anime, and movies with my family</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/cook.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>I developed the love for cooking as well as baking during the COVID-19 pandemic</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/reading.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>I love reading, drawing/painting as well as arts & crafts</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/blue.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>My favorite color is Blue</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/kopi.png") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>I love coffee</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/jap.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>I wish to visit Japan someday</p>
            </div>
            <div class="hobby-item">
                <img src="<?= base_url("assets/vintage.jpg") ?>" class="profile-img hobby-image" alt="Profile Image">
                <p>I love vintage stuff</p>
            </div>
        </div>

        <!-- Update the link to navigate to the Future page -->
        <p class="back-link"><a href="<?= base_url("future") ?>" style="background-color: #F0B7A4; color: #fff;" 
                class="button">Future</a></p>
    </div>

    <!-- Bulma JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bulma@0.9.3/js/all.min.js"></script>

</body>

<?= $this->endSection() ?>

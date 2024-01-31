<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hobbies</title>
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
            font-size: 35px;
        }

        h4 {
            color: #060606;
            font-size: 25px;
        }

        p {
            font-size: 18px;
        }

        /* Style for the back link at the bottom */
        .back-link {
            margin-top: 20px;
        }

        /* Custom style for the back button */
        .custom-back-button {
            background-color: #F0B7A4;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        /* Style for the image */
        .side-image {
            border-radius: 10px;
            margin-top: 20px;
            margin-right: 20px; 
            margin-left: 100px;
            max-width: 500px; 
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <h2>Me in the future</h2>
                <h4>Professional success</h4>
                <p>I envision myself thriving in a well-established company, contributing my skills and expertise to make a
                    meaningful impact in my chosen field.</p>
                <br>
                <h4>Continuous learning</h4>
                <p>I also envision myself to be committed to a journey of a lifelong learning. I see myself constantly acquiring
                    new knowledge and skills, keeping up with the industry trends and adapting to the ever-evolving IT landscape.</p>
                <br>
                <h4>Entrepreneurial Ventures</h4>
                <p>In addition to corporate success, I dream of venturing into entrepreneurial endeavors.
                    I want to create and manage my own business, combining innovation and passion to make a mark in the business world.</p>
                <br>
                <h4>Providing comfort</h4>
                <p>One of my primary goals is to provide my family with a comfortable and secure life. Through hard work and dedication,
                    I aim to ensure that my loved ones have the resources and opportunities they need.</p>
                <br>
                <h4>Work-Life balance</h4>
                <p>In my future vision, it is important to maintain a healthy work-life balance. I envision a life where professional
                    success harmoniously coexists with personal well-being, allowing to enjoy quality time with family and pursue personal interests.</p>
                <br>
                <!-- Back link to go back to the About Me page with custom styling -->
                <p class="back-link"><a href="<?= base_url("movies") ?>" style="background-color: #F0B7A4; color: #fff;" 
                        class="button">Movies that I like</a>
                </p>
            </div>
            <div class="column is-6">
                <!-- Add your image path or URL here -->
                <img src="<?= base_url("assets/future2.jpg") ?>" class="side-image" alt="Profile Image">
            </div>
        </div>
    </div>

    <!-- Bulma JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bulma@0.9.3/js/all.min.js"></script>

</body>

<?= $this->endSection() ?>

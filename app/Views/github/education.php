<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Education</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        .container {
            margin-top: 50px;
        }

        /* Add a custom class for the title */
        .custom-h2-color {
            color: #F0B7A4;
            font-family: Georgia;
            font-size: 25px;
        }

        p {
            font-size: 18px;
        }

        .back-link {
            margin-top: 20px;
        }

        /* Add a custom class for the back button */
        .custom-back-button {
            background-color: #F0B7A4;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        /* Add custom styles for the hobbies container */
        .hobbies-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        /* Add custom styles for the hobby items */
        .hobby-item {
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        /* Add custom styles for the hobby images */
        .hobby-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10%;
        }

        /* Add custom styles for the hobby info */
        .hobby-info {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(240, 183, 164, 0.8);
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Add the custom class to the h2 element -->
        <h2 class="title is-2 custom-h2-color">Education</h2>
        <p>Here are some snapshots of my educational journey from kindergarten to college.</p>

        <!-- Replace the text content with a container of pictures and descriptions -->
        <div class="hobbies-container">
            <div class="hobby-item" onclick="showInfo('info1')">
                <img src="<?= base_url("assets/mamaslove.jpg") ?>" class="hobby-image" alt="Profile Image">
                <div id="info1" class="hobby-info">I took my nursery, kinder and preparatory education at Mama's love kindergarten school</div>
            </div>
            <!-- Add similar onclick attribute for other hobby items -->
            <div class="hobby-item" onclick="showInfo('info2')">
                <img src="<?= base_url("assets/s1.jpg") ?>" class="hobby-image" alt="Profile Image">
                <div id="info2" class="hobby-info">I had my elementary education at La Carlota south elementary school-1</div>
            </div>
            <div class="hobby-item" onclick="showInfo('info3')">
                <img src="<?= base_url("assets/hs.jpg") ?>" class="hobby-image" alt="Profile Image">
                <div id="info3" class="hobby-info">In junior high, I took the special science class at Doña Hortencia Salas Benidicto National Highschool</div>
            </div>
            <div class="hobby-item" onclick="showInfo('info4')">
                <img src="<?= base_url("assets/sanag.jpg") ?>" class="hobby-image" alt="Profile Image">
                <div id="info4" class="hobby-info">For senior high school, I studied at Colegio San Agustin Bacolod taking up Science Technology Engineering and Mathematics (STEM) track.</div>
            </div>
            <div class="hobby-item" onclick="showInfo('info5')">
                <img src="<?= base_url("assets/west.png") ?>" class="hobby-image" alt="Profile Image">
                <!-- No additional info for this item -->
            </div>
            <div class="hobby-item" onclick="showInfo('info6')">
                <img src="<?= base_url("assets/west.jpg") ?>" class="hobby-image" alt="Profile Image">
                <div id="info6" class="hobby-info">Currently, I'm a 4th year BSIT student at West Visayas State University</div>
            </div>
        </div>

        <!-- Update the link to navigate to the Hobbies page -->
        <p 
            class="back-link"><a href="<?= base_url("hobbies") ?>" style="background-color: #F0B7A4; color: #fff;" 
                class="button">Hobbies</a>
        </p>


    </div>
    <!-- Bulma JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bulma@0.9.3/js/all.min.js"></script>
    <script>
        function showInfo(infoId) {
            // Hide all hobby-info elements
            document.querySelectorAll('.hobby-info').forEach(info => {
                info.style.display = 'none';
            });

            // Show the selected hobby-info
            const selectedInfo = document.getElementById(infoId);
            if (selectedInfo) {
                selectedInfo.style.display = 'block';
            }
        }
    </script>
</body>

<?= $this->endSection() ?>

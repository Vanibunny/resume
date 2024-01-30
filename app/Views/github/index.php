<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
        body {
            height: 100vh;
            background: url('<?= base_url("assets/bb.jpg"); ?>') no-repeat center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            margin-top: 50px;
        }

        /* Add a custom class to set the color */
        .custom-h2-color {
            color: #F0B7A4;
            font-family: Georgia;
        }

        p {
            font-size: 18px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .social-icons {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
    </style>
</head>

    <div class="container">
        <div class="columns">
            <div class="column is-half">
                <div>
                    <!-- Add the custom class to the h2 element -->
                    <h2 class="title is-2 custom-h2-color">Hi! I'm Vanica</h2>
                    <p class="content">I'm thrilled to welcome you to my corner of the internet. Here's a little
                        overview of who I am and what I'm all about
                        <br>
                        <br>
                        Join me as I explore this website, where you can discover all about myself.
                    </p>
                    <a href="<?= base_url("about") ?>" style="background-color: #F0B7A4; color: #fff;" 
                        class="button">About me</a>

                    <div class="social-icons">
                        <a href="https://www.facebook.com/vanica.cabrillos/" target="_blank"><img
                                src="<?= base_url("assets/fb.png") ?> " alt=""></a>
                        <a href="mailto:vanica.cabrillos@wvsu.edu.ph" target="_blank"><img
                                src="<?= base_url("assets/email.png") ?> " alt=""></a>
                        <a href="https://www.linkedin.com/in/vanica-cabrillos-85ba8728b/" target="_blank"><img
                                src="<?= base_url("assets/linkedin.png") ?> " alt=""></a>
                        <a href="https://www.instagram.com/sheminith7/" target="_blank"><img
                                src="<?= base_url("assets/insta.png") ?> " alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bulma JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bulma@0.9.3/js/all.min.js"></script>


<?= $this->endSection() ?>

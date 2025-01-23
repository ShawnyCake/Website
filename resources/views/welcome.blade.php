<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viper Vector</title>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        /* Services Section */
        .services {
            padding: 50px 20px;
            background-color: white;
            text-align: center;
        }

        .services h1 {
            color: #c20000;
            padding: 15px;
            display: inline-block;
            margin: 0;
        }

        .services-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;  /* Ensures content is centered */
        }

        footer p {
            margin: 10px 0;
        }

        /* Social Links Wrapper */
        .social-links {
            display: flex;              /* Display in a row */
            justify-content: center;    /* Center the icons horizontally */
            align-items: center;        /* Align icons vertically */
            gap: 20px;                  /* Add space between icons */
        }

        footer a {
            color: #f9f9f9;
            text-decoration: none;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
        }

        /* Resize Icons */
        footer a .social-icon {
            width: 40px;   /* Adjust the icon size */
            height: 40px;  /* Adjust the icon size */
            margin-right: 8px; /* Space between icon and text */
            object-fit: contain; /* Ensure the image fits properly */
        }

        footer a:hover {
            color: #c20000;
        }

        footer a:hover .social-icon {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div id="app">
        <!-- Vue Banner Component -->
        <banner></banner>

        <!-- Services Section -->
        <section class="services">
            <div class="container">
                <h1> Services we provide</h1>
                <div class="services-container">
                    <service-card
                        title="Web Development"
                        description="We are capable of creating your desired website. With our skilled web developers, your website will be made available in no time."
                        icon="/images/web-dev.png"
                    ></service-card>

                    <service-card
                        title="Mobile Development"
                        description="We at Viper Vectors are capable of creating your application for both Android and IOS platforms. With the combination of our skilled software engineers and UI/UX designers, your application is guaranteed to be functional and aesthetically pleasing."
                        icon="/images/mob-dev.png"
                    ></service-card>

                    <service-card
                        title="Project Management"
                        description="We believe that successful projects are a result of a solid foundation and proper planning. Our project management team will handle your projects with careful planning, increasing the chance of your project succeeding."
                        icon="/images/pro-man.png"
                    ></service-card>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Viper Vectors. All Rights Reserved.</p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank">
                    <img src="/images/facebook.png" alt="Facebook" class="social-icon"> Facebook
                </a>
                <a href="https://twitter.com" target="_blank">
                    <img src="/images/twitter.png" alt="Twitter" class="social-icon"> Twitter
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <img src="/images/linkedin.png" alt="LinkedIn" class="social-icon"> LinkedIn
                </a>
            </div>
        </footer>
    </div>

</body>
</html>

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
        }

        .services h1 {
            color: white;  
            padding: 15px;
            display: inline-block;  
            background-color: #c20000;  

        }
        .services-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .services-container service-card {
        }

        footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: white;
        }

        footer a {
            color: #f9f9f9;
            text-decoration: none;
            margin: 0 10px;
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
            <h1> Services we provide:</h1>

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
</div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Viper Vectors. All Rights Reserved.</p>
            <p>
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://linkedin.com" target="_blank">LinkedIn</a>
            </p>
        </footer>
    </div>

</body>
</html>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/logo.svg" />

</head>

<body class="main-body">

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- header -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title01">Hi, Welcome to eShop</p>
                    </div>
                </div>
            </div>

            <!-- header -->

            <!-- content -->

            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block background"></div>
                    <!-- signupbox -->

                    <div class="col-12 col-lg-6 vh-100 bg-black" id="black">

                        <div class="col-12 col-lg-6 d-grid">
                            <a class="" onclick="changeView();">Already have an account? Sign
                                In</a>
                        </div>

                    </div>

                    <!-- signupbox -->

                    <!-- signinbox -->

                    <div class="col-12 col-lg-6 vh-100 bg-warning d-none" id="yellow">


                        <div class="col-12 col-lg-6   d-grid">
                            <a class="" onclick="changeView();">New to eShop? Join Now</a>
                        </div>
                    </div>

                    <!-- signinbox -->

                </div>
            </div>



        </div>

    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"/>

    <!--bootstrap.css-->
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css"/>
    <!--fontawesome-->
    <link href="/all.css" rel="stylesheet"/>
    <link href="/fontawesome.min.css" rel="stylesheet"/>
    <!--app.css-->
    <link rel="stylesheet" href="/public/app.css"/>
    <!--System-icon-->
    <link rel="icon" href="/favicon.ico">

</head>
<body>
    <!--Navbar start-->
    <nav class="navbar navbar-light fixed-top bg-light shadow-sm">
        <div class="container-lg">
            <a class="navbar-brand text-danger fw-bold fs-4">Laravel Blog</a>
            <div class="dropdown">
                <button class="btn btn-secndary btn-danger px-3" type="button" id="dropDownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#welcome">Home</a></li>
                    <li><a class="dropdown-item" href="/about">About</a></li>
                    <li><a class="dropdown-item" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar end-->

    <!--Jumbotron section start-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron mt-5 pt-5">
                    <h1>Welcome to my Blog</h1>
                    <p class="lead">Thank you for visiting. This is my test Website built with Laravel. Please read my Latest post.</p>
                    <a href="#" class="btn btn-danger btn-lg" role="button">Popular Post</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <div class="post mt-3">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <div class="post mt-3">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <div class="post mt-3">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsa repellendus laboriosam natus commodi temporibus, reprehenderit nihil nemo labore numquam unde, impedit, voluptatem quaerat. Cumque doloremque quis deleniti dolorem fugiat.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h3>Side bar</h3>
            </div>
        </div>
    </div>
    <!--Jumotron section end-->

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery 3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
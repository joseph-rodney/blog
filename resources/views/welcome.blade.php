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
            <a class="navbar-brand text-danger fw-bold fs-4">Blog</a>
            <div class="dropdown">
                <button class="btn btn-secndary btn-danger px-3" type="button" id="dropDownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#home">Home</a></li>
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#services">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar end-->
    <div class="container">
        <div class="content">
            <div class="title">Welcome</div>
            <p> Welcome Everyone!</p>
        </div>
    </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery 3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
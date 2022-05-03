<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Document</title>
</head>
<body class="main-body">

    <!-- Page Heading -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 banner">
                    <img src="{{asset('storage/banner.jpg')}}" width="550px" class="rounded banner-image" alt="banner">
                    <img src="{{asset('storage/musicianlogo.png')}}" class="logo rounded-circle" width="230px" alt="">
                </div>
            </div>
        </div>
    </header>

           <!-- Page Content -->
           <main class="main-body">
            {{ $slot }}
        </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="text-white d-flex justify-content-between footer-banner col-sm-12 bg-dark">
                    <div class="my-2 fs-5">
                        Connect with me on social networks:
                    </div>
                    <div class="my-2 mx-3 fs-5">
                        <i class="fab fa-facebook-f mx-3"></i>
                        <i class="fab fa-linkedin-in mx-3"></i>
                        <i class="fab fa-twitter mx-3"></i>
                        <i class="fab fa-github mx-3"></i>
                        <i class="fab fa-instagram mx-3"></i>
                        <i class="fab fa-linkedin-in mx-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
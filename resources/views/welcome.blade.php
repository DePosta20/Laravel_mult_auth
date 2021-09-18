<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Multi Auth</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="https://res.cloudinary.com/deposta20/image/upload/v1625213374/KatySoft/favicon_hyjdpe.png"
        type="image/x-icon" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 2000;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="">
                        <img src="https://res.cloudinary.com/deposta20/image/upload/v1625213374/KatySoft/favicon_hyjdpe.png"
                            alt="" width="30" height="24">
                    </a>
                    <ul class="mb-2 ml-auto navbar-nav mb-lg-0" style="float: left;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        @if (Route::has('user.login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('user.home') }}" class="nav-link">Home</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('user.login') }}" class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('user.register'))
                                    <li class="nav-item">
                                        <a href="{{ route('user.register') }}" class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container py-5">
            <div class="my-5 bg-image shadow-2-strong">
                <div class="container py-5 text-center d-flex align-items-center justify-content-center h-100">
                    <div class="text-black">
                        <h1 class="mb-3">Here we GO!</h1>
                        <h5 class="mb-4">You can continue now, incase you dont understand about Laravel Follow
                            the Document</h5>
                        <a class="m-2 btn btn-outline-dark btn-lg" href="https://laravel.com/docs/8.x" role="button"
                            rel="nofollow" target="_blank">Start Laravel tutorial</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-white bg-dark text-lg-start fixed-bottom">
        <hr class="m-0" />
        <div class="py-4 text-center align-items-center">
            <p>Follow Me on social media</p>
            <a href="https://www.facebook.com/deposta20" class="m-1 btn btn-primary" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/deposta1998" class="m-1 btn btn-primary" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/DePosta20" class="m-1 btn btn-primary" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <div class="p-3 text-center" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-white" href="https://katysoft.co.tz/">KatySoft</a>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>

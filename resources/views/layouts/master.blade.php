<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <link rel="canonical" href="https://www.mariaegypt.com" />
    <link rel="amphtml" href="https://www.mariaegypt.com/?page=amp">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta property="fb:pages" content="139869103039316" />
    <meta charset="utf-8" />

    <title>{{ env('APP_NAME') }}</title>
    @include('layouts.parts.styles')
</head>

<body>
    @include('layouts.parts.header')





    <script>
        const mobile_nav = document.querySelector(".mobile-navbar-btn");
        const nav_header = document.querySelector(".header");

        const toggleNavbar = () => {
            // alert("Plz Subscribe ");
            nav_header.classList.toggle("active");
        };

        mobile_nav.addEventListener("click", () => toggleNavbar());
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <div class="main-container">

        @yield('content')
    </div>


    @include('layouts.parts.footer')

    @include('layouts.parts.scripts')
</body>
</html>

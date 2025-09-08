<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'AUGMEE')</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/brand/augmee-logo-2.png">
    <link rel="stylesheet" href="assets/css/plugins/gordita.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-pro-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="rt_bg-secondary">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .nav-mobile {
            font-size: 24px;
            gap: 5rem;
        }

        @media only screen and (min-width: 360px) and (max-width: 991px) {
            .nav-mobile-menu {
                display: flex;
                justify-content: start;
                justify-items: start;
                align-items: center;
                gap: 0;
                margin: 0;
            }

            .nav-mobile img {
                display: none;
            }
        }
    </style>
    {{-- Header --}}
    @include('layouts.header')

    <main>
        {{-- Content dari child view --}}
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')
</body>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth"
                });
            }
        });
    });
</script>

</html>

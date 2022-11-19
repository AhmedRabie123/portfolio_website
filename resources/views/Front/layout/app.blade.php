<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('seo_title')</title>

    <meta name="description" value="@yield('seo_meta_description')">

    @yield('open_graph_data')

    @include('Front.layout.styles')


    <link rel="icon" type="image/png" href="{{ asset('uploads/' . $global_setting_data->favicon) }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        nav .nav-item .nav-link.active,
        nav .nav-item .nav-link:hover,
        .home-banner .left .button a,
        .home-about .right h3,
        .home-about .contact-info i,
        .home-skill .heading h2,
        .home-qualification .heading h2,
        .home-qualification h2.title,
        .home-qualification .item:before,
        .service .heading h2,
        .service .item .icon i,
        .portfolio .heading h2,
        .home-testimonial .heading h2,
        .blog .heading h2,
        .home-client .heading h2,
        .footer .social ul li:hover a,
        .sidebar .widget h2,
        .sidebar .widget ul li a:hover,
        .sidebar .widget ul li:hover:before,
        .sidebar .widget .project-detail .item .name,
        .blog-detail .sub .category a,
        .comment h2,
        .comment .comment-box .right .reply a,
        .contact .item .icon {

            color: {{ $global_setting_data->theme_color }} !important;
        }


        .home-banner,
        .home-about .social ul li,
        .home-skill .progress-bar,
        .home-qualification .item .v-line,
        .service .item .button a,
        .portfolio .filter ul li,
        .blog .item .button a,
        .footer .social ul li,
        .scrollup i,
        .sidebar .widget .search button,
        .comment button,
        .contact .form-map button {

            background: {{ $global_setting_data->theme_color }};
        }

        .home-banner .left span {
            background: {{ $global_setting_data->theme_color }} !important;
        }

        .testimonial-carousel .owl-dot.active span,
        .client-carousel .owl-dot.active span {

            background: {{ $global_setting_data->theme_color }} !important;
        }

        .sidebar .widget .search button {

            border-color: {{ $global_setting_data->theme_color }} !important;
        }
    </style>

</head>

<body>

    @if ($global_setting_data->preloader_status == 'Show')
        <div id="preloader">
            <div id="preloader_inner"></div>
        </div>
    @endif


    @include('Front.layout.nav')


    @yield('main_content')



    @include('Front.layout.footer')

    <a href="" class="scrollup">
        <i class="fas fa-chevron-up"></i>
    </a>

    @include('Front.layout.scripts')



    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ $error }}',
                });
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('error') }}',
            });
        </script>
    @endif

    @if (session()->get('success'))
        <script>
            iziToast.success({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('success') }}',
            });
        </script>
    @endif


    @yield('skill_animation')


</body>

</html>

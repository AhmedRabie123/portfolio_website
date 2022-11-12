<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('seo_title')</title>

    <meta name="description" value="@yield('seo_meta_description')">



    @include('Front.layout.styles')


    <link rel="icon" type="image/png" href="{{ asset('dist_front/images/man.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div id="preloader_inner"></div>
    </div>


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

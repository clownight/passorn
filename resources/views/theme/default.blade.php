<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="Passorn Private Pool Villa" />
    <meta name="description" content="ภายใต้การฟอร์มทีมของผู้บริหาร บริษัท อินเตอร์พูลสปา จำกัด จากการสั่งสม ประสบการณ์ยาวนานกว่า20ปีบนถนนธุรกิจอสังหาริมทรัพย์และสระว่ายน้ำ โครงการ ภัสสร พลูวิลล่า (Passorn Pool Villa) จึงถือกำเนิดขึ้นและยังได้รับการตอบรับอย่างท่วมท้น อีกทั้งยังเป็นโครงการที่ผู้บริโภคให้ความไว้วางใจในด้านคุณภาพ การออกแบบ" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>{!! env('APP_NAME') !!}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('img/favicon.ico') !!}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="{!! asset('css/plugins.css') !!}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />
</head>
<body>
    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Loading</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->

        @include('theme.header')
        @include('theme.sidebar')

        @yield('content')

    @include('theme.footer')
    <!-- Placed JS at the end of the document so the pages load faster -->

    <script src="{!! asset('js/jquery-3.0.0.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-migrate-3.0.0.min.js') !!}"></script>
    <!-- plugins -->
    <script src="{!! asset('js/plugins.js') !!}"></script>

    <!-- custom scripts -->
    <script src="{!! asset('js/scripts.js') !!}"></script>

    @yield('script')
</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

   
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <div id="tugas">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm rounded-bottom">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <img src="{{ url('img/gambar.png')}}" width="85" alt="" 
                    class="d-inline-block align-center">&nbsp; 
                    {{ __('SMA NEGERI 1 TALUN') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" d
                ata-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link text-white" href="/home1">
                                <img src="https://img.icons8.com/material-rounded/24/000000/home.png"
                                 width="25" height="25"/>
                                {{ __('Home') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white font-weight-normal" href="/siswa">
                                <img src="https://img.icons8.com/ios-glyphs/30/000000/timeline.png"
                                 width="25" height="25"/>
                                {{ __('Data Siswa') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="/Berita">
                                <img src="https://img.icons8.com/ios-glyphs/30/000000/news.png" 
                                width="25" height="25"/>
                                {{ __('Berita') }}</a>
                            </li>

                            <li class="nav-item pl-4"> 
                            <a class="nav-link text-white btn" href="/login">
                            <img src="https://img.icons8.com/plasticine/100/000000/settings-3.png" 
                            width="25" height="25"/>
                                {{ __('LogOut') }}</a>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="py-4 bg-primary rounded-top">
        <div class="container">
        <p class="card-text text-white"><img src="https://img.icons8.com/office/30/000000/address.png"
         width="25" height="25"/>&nbsp; Jl. Raya Kaweron Kel Kaweron
                            Kec. Talun Kab. Blitar Prov. Jawa Timur<br>
                            <img src="https://img.icons8.com/dusk/30/000000/phone-office.png" width="25"
                             height="25"/>&nbsp; Telp. (0342) 691148 <br>
                            <img src="https://img.icons8.com/cotton/64/000000/email-open.png" width="25"
                             height="25"/>&nbsp; E-mail  : sman1talun_blitar@yahoo.com</p>
        <p class="m-0 text-center text-white">Copyright &copy; SMAN 1 TALUN</p>
        </div>
    </footer>
</body>
</html>
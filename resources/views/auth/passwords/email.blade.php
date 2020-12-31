<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="public/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Şifremi Unuttum - Dernek Otomasyonu</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="public/dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="public/dist/images/logo.svg">
                <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    Bir kaç tıkla
                    <br>
                    Hesabına giriş yapabilirisin.
                </div>
                <div class="-intro-x mt-5 text-lg text-white">Dernek ile ilgili bütün işlemlerini buradan kolayca halledebilirsin.</div>
            </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Giriş Yap
                </h2>
                <form action="{{route("password.email")}}" method="post">
                    @csrf
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Birkaç tık ile hesabına kolayca erişebilirsin.</div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block  @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
                        <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Sıfırla</button>
                        <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Üye Ol</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- END: Login Form -->
    </div>
</div>
<!-- BEGIN: JS Assets-->
<script src="public/dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>

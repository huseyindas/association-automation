

<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Üye OL - Dernek Otomasyonu</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/app.css" />

    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    Birkaç tıkla
                    <br>
                    hızlıca üyelik başvurunu yapabilirsin.
                </div>
                <div class="-intro-x mt-5 text-lg text-white">Üyelik başvurunu hızlıca yapıp, bize katılabilirsin.</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Üye Ol
                </h2>
                <form action="{{route("register")}}" method="post">
                    @csrf
                <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Birkaç tık ile hızlıca kayıt olabilir ve bize katılabilirsin.</div>
                <div class="intro-x mt-8">
                    <input class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Adınız" type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <input class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email Adresiniz" type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                    <input class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Telefon Numaranız" name="phone" type="text" id="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    <input class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Şirket Adınız" type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" required autocomplete="company_name">
                    <input class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Şifreniz" type="password" name="password" id="password" value="{{ old('password') }}" required autocomplete="new-password">
                    <input class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Şifreniz Tekrar" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    <input type="file" class="intro-x login__input input input--lg border border-gray-300 block mt-4" id="inputGroupFile02"></br>
                    <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>Lütfen dosyaları eksiksiz yükleyiniz.</div>
                </div>
                <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                    <input type="checkbox" class="input border mr-2" id="remember-me">
                    <a class="text-theme-1 ml-1" href="">Gizlilik Politikası ve Kurallar</a>
                    <label class="cursor-pointer select-none" for="remember-me">'ı kabul ediyorum.</label>
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Üye Ol</button>
                    <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0"><a href="{{route("login")}}">Giriş Yap</a></button>
                </div>
            </div>
            </form>
        </div>
        <!-- END: Register Form -->
    </div>
</div>
<!-- BEGIN: JS Assets-->
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>
</html>

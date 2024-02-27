<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <title>Авторизация</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_content">
                <a href="{{ route('index.index') }}"><div class="header_logo">
                    <img src="{{ asset('public/assets/image/logo.png') }}" alt="" class="header_img">
                </div></a>
                <nav>
                    <ul class="header_ul">
                        <li class="heade_li"><a href="{{ route('index.catalog') }}" class="header_a">Главная</a></li>
                        <li class="heade_li"><a href="#" class="header_a">О нас</a></li>
                        <li class="heade_li"><a href="{{ route('index.catalog') }}" class="header_a">Каталог</a></li>
                    </ul>
                </nav>
                <div class="header_reg">
                    <div class="header_wr">
                        <div class="header_text">
                            <p class="header_p">Вход</p>
                            <div class="wr"></div>
                            <p class="header_p">Регистрация</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="login">
        <div class="container">
            <div class="login_content">
                <div class="registr_top">
                    <h3 class="registr_h3">
                        Авторизация
                    </h3>
                </div>
                <div class="registr_wrapp">
                    <div class="reg_wr">
                        <form action="{{ route('auth.login') }}" method="POST" class="reg_form">
                            @csrf
                            <input type="email" name="email" placeholder="Почта" class="reg_inp" value="{{ old('email') }}">
                            <input type="password" placeholder="Пароль" name="password" class="reg_inp">
                            <button class="but_wr wrr" type="submit">Вход</button>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </section>
</body>
</html>
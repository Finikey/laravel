<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <title>Chay-ky</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header_content">
                <div class="header_logo">
                    <img src="{{ asset('public/assets/image/logo.png') }}" alt="" class="header_img">
                </div>
                <nav>
                    <ul class="header_ul">
                        <li class="heade_li"><a href="{{ route('index.admin') }}" class="header_a">Главная</a></li>
                        <li class="heade_li"><a href="" class="header_a">О нас</a></li>
                        <li class="heade_li"><a href="{{ route('index.catalog') }}" class="header_a">Каталог</a></li>
                        @auth
                            @if(auth()->user()->role_id === 2)
                                <li><a class="heade_li" href="{{ route('index.admin') }}">Админ панель</a></li>
                            @endif
                        @endauth
                    </ul>
                </nav>
                <div class="header_reg">
                    <div class="header_wr">
                        <div class="header_text">
                            @auth
                                <form action="{{ route('auth.logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="header_p">Выйти</button>
                                </form>
                            @endauth
                            @guest
                            <a href="{{ route('auth.loginPage') }}"><p class="header_p">Вход</p></a>
                            <div class="wr"></div>
                            <a href="{{ route('auth.registerPage') }}"><p class="header_p">Регистрация</p></a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <div class="banner_content">
                <div class="banner_left">
                    <div class="banner_image">
                        <img src="{{asset('public/assets/image/banner.png')}}" alt="banner" class="banner-img">
                    </div>
                </div>
                <div class="banner_right">
                    <div class="banner_text">
                        <h1 class="banner_h1">Лучшие чаи только у нас</h1>
                        <p>&nbsp;</p>
                        <h2 class="banner_h2">Мы предлагаем широкий ассортимент чая, привезенного из разных уголков мира. У нас вы найдете классические черные и <span class="sp">зеленые </span>чаи, а также экзотические белые, <span class="ss">желтые</span> и улуны.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <div class="catalog_content">
                <div class="catalog_top">
                    <h3 class="catalog_h3">
                        Выбор экспертов
                    </h3>
                </div>
                <div class="catalog_wrapp">
                    <div class="catalog_front">
                        <div class="front_top">
                            <img src="{{asset('public/assets/image/green.webp')}}" alt="tea" class="front_img">
                            <div class="front_text">
                                <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                            </div>
                            <div class="front_wr">
                                <div class="wr_text">
                                    <p class="wr_p">1000 ₽</p>
                                </div>
                                <div class="wr_button">
                                    <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="front_top">
                            <img src="{{asset('public/assets/image/green.webp')}}" alt="tea" class="front_img">
                            <div class="front_text">
                                <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                            </div>
                            <div class="front_wr">
                                <div class="wr_text">
                                    <p class="wr_p">1000 ₽</p>
                                </div>
                                <div class="wr_button">
                                    <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="front_top">
                            <img src="{{asset('public/assets/image/green.webp')}}" alt="tea" class="front_img">
                            <div class="front_text">
                                <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                            </div>
                            <div class="front_wr">
                                <div class="wr_text">
                                    <p class="wr_p">1000 ₽</p>
                                </div>
                                <div class="wr_button">
                                    <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                        <div class="front_top">
                            <img src="{{asset('public/assets/image/green.webp')}}" alt="tea" class="front_img">
                            <div class="front_text">
                                <p class="front_p">Чай зеленый Марокканский в пирамидках</p>
                            </div>
                            <div class="front_wr">
                                <div class="wr_text">
                                    <p class="wr_p">1000 ₽</p>
                                </div>
                                <div class="wr_button">
                                    <a href="{{ route('index.tovar') }}"><div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="catalog_bottom">
                    <a href="{{ route('index.catalog') }}"><div class="bot_text">
                        <h4 class="h4_bot">Перейти в каталог</h4>
                    </div></a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <div class="footer_top">
                    <div class="footer_text">
                        <p class="footer_p">Главная</p>
                        <p class="footer_p">О нас</p>
                        <p class="footer_p">Каталог</p>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="footer_copy">
                        <p class="foot_cop">©️ FINIKEY 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
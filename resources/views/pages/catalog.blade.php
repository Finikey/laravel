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
    <title>Каталог</title>
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
                        <li class="heade_li"><a href="{{ route('index.index') }}" class="header_a">Главная</a></li>
                        <li class="heade_li"><a href="#" class="header_a">О нас</a></li>
                        <li class="heade_li"><a href="#" class="header_a">Каталог</a></li>
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
    <section class="catalog">
        <div class="container">
            <div class="catalog_content">
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
                                    <div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div>
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
                                    <div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div>
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
                                    <div class="but_wr">
                                        <p class="but_p">+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
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
    <title>Админ</title>
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
    <section class="managment">
        <div class="container">
            <div class="managment_content">
                <div class="mana_top">
                    <h3 class="mana_h3">Управление товарами</h3>
                </div>
                <div class="mana_wrapp">
                    <div class="mana_tovars">
                        <div class="tovars_wrapp">
                            <div class="tovars_text">
                                <p class="tovars_p">id: 1</p>
                                <p class="tovars_p">name</p>
                            </div>
                            <div class="tovars_update">
                                <p class="update_p">✍️</p>
                                <p class="update_p">🗑️</p>
                            </div>
                        </div>
                    </div>
                    <div class="mana_tovars">
                        <div class="tovars_wrapp">
                            <div class="tovars_text">
                                <p class="tovars_p">id: 1</p>
                                <p class="tovars_p">name</p>
                            </div>
                            <div class="tovars_update">
                                <p class="update_p">✍️</p>
                                <p class="update_p">🗑️</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="add">
        <div class="container">
            <div class="add_content">
                <div class="mana_top">
                    <h3 class="mana_h3">Добавление товара</h3>
                </div>
                <div class="add_wrapp">
                    <div class="add_tovars">
                        <form action="{{ route('product.store') }}" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="name" placeholder="Название" class="inp_tovars" value="{{ old('name') }}">
                            <textarea  name="description" placeholder="Описание" class="inp_tovars">{{ old('description') }}</textarea>
                            <input type="text" name="price" placeholder="Цена" class="inp_tovars" value="{{ old('price') }}">
                            <select name="category_id" id="">
                                @foreach($categories as $category)
                                {{--                            <option @selected((int)old('category_id') === $category->id) class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>--}}
                                        <option @selected(old('category_id') == $category->id) class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <input type="file" class="input w-full" name="path">
                            <button type="submit" class="but_wr wrr">Добавить</button>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="container py-24">
                        <div class="flex flex-col gap-14">
                            <h1 class="text-5xl border-b border-white border-opacity-25 pb-7">Добавление категории</h1>
                            <form action="{{ route('category.store') }}" method="post" class="flex flex-col items-start gap-7">
                                @csrf
                                <input type="text" class="input w-full" name="name" placeholder="Название категории">
                                @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
                                <button type="submit" class="button">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
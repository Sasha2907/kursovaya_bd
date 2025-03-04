<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/About_Company.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header class="site-header">
    <div class="logo">
        <a href="{{url('/main')}}"><img src="/Images/logo1.png" alt="Logo"></a>
    </div>
    <nav class="navigation">
        <ul class="nav-list">
            @can('view',auth()->user())
            <li><a href="{{route('admin.index')}}">Admin</a></li>
            @endcan
            <li><a href="#">Конструктор</a></li>
            <li><a href="{{route('favorites.index')}}">Избранное</a></li>
            <li><a href="{{url('/about_us')}}">О компании</a></li>
            <li><a href="{{route('catalog.index')}}">Каталог</a></li>
            <li><a href="{{route('review.index')}}">Отзывы</a></li>
        </ul>
        @if(Auth::check())
            <!-- Если пользователь авторизован -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Выйти</button>
            </form>
        @else
            <!-- Если пользователь НЕ авторизован -->
            <a href="{{ route('login') }}" class="btn btn-primary">Войти</a>
        @endif
    </nav>
    <button class="menu-toggle" aria-label="Toggle Menu">&#9776;</button>
</header>
@yield('content')
<div class="footer">
    <div class="footer-container">
        <!-- Первый столбец -->
        <div class="footer-column">
            <img src="/Images/logo1.png" alt="Логотип" class="footer-logo">
            <p class="footer-description">Компания "Шторы Гродно" была основана с целью предоставить жителям Гродно и
                окрестностей качественные и стильные текстильные решения для их домов и офисов. Мы уверены, что шторы —
                это не просто функциональный элемент, но и важная часть интерьера, способная подчеркнуть
                индивидуальность вашего пространства.</p>
        </div>

        <!-- Второй столбец: Навигация -->

        <div class="footer-column">
            <h3 class="footer-title">Навигация</h3>
            <ul class="footer-links">
                <li><a href="#">Конструктор</a></li>
                <li><a href="{{route('favorites.index')}}">Избранное</a></li>
                <li><a href="{{url('/about_us')}}">О компании</a></li>
                <li><a href="{{route('catalog.index')}}">Каталог</a></li>
                <li><a href="{{route('review.index')}}">Отзывы</a></li>
            </ul>
        </div>

        <!-- Третий столбец: Каталог -->
        <div class="footer-column">
            <h3 class="footer-title">Каталог</h3>
            <ul class="footer-links">
                <li><a href="{{route('shtory.index')}}">Шторы</a></li>
                <li><a href="{{route('tyl.index')}}">Тюль</a></li>
                <li><a href="{{route('rimskieShtory.index')}}">Римские шторы</a></li>
                <li><a href="{{route('pocrivala.index')}}">Покрывала</a></li>
{{--                <li><a href="#sets">Способы пошива штор</a></li>--}}
                <li><a href="{{route('decorPodushki.index')}}">Декоративные подушки</a></li>
            </ul>
        </div>

        <!-- Четвертый столбец: Контакты -->
        <div class="footer-column">
            <h3 class="footer-title-cont">Контакты</h3>
            <ul class="footer-contacts">
                <li>Телефон: +375 29 2879009</li>
                <li>Телефон: +375 25 7973108</li>
                <br>
                <li>Адрес: г. Гродно, пр-т Я.Купалы 88а</li>
                <li>Email: <a href="mailto:opetuk@mail.ru">opetuk@mail.ru</a></li>
                <br>
                <li><h3 class="vr_rab">Время работы:</h3></li>
                <li>Пн-Пт: 10:00 - 18:00</li>
                <li>Сб: 10:00 - 15:00</li>
                <li>Вс: выходной</li>
            </ul>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>

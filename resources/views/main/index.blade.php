@extends('layouts.review.main')
@section('content')
    <div class="carousel-fon">
        <div class="carousel">
            <div class="carousel-track">
                <!-- Слайд 1 -->
                <div class="carousel-slide">
                    <div class="carousel-text">
                        <h1>Добро пожаловать в наш магазин штор в Гродно!</h1>
                        <p>Мы рады предложить вам широкий ассортимент стильных и качественных штор, которые помогут
                            создать уникальную атмосферу в вашем доме или офисе. Наша команда профессионалов готова
                            помочь вам выбрать идеальные текстильные решения, соответствующие вашему интерьеру и личным
                            предпочтениям.</p>
                    </div>
                    <img src="/Images/img1.png" alt="Image 1" class="carousel-image">
                </div>
                <!-- Слайд 2 -->
                <div class="carousel-slide">
                    <div class="carousel-text">
                        <h1>Почему стоит выбрать нас?</h1>
                        <p>• Индивидуальный подход: Мы понимаем, что каждый клиент уникален, поэтому предлагаем
                            индивидуальные консультации и помощь в выборе тканей, дизайна и стиля штор. <br>
                            <br>
                            • Широкий ассортимент: У нас вы найдете разнообразные ткани, от легких органз и тюлей до
                            плотных жаккардов и бархатов. Мы следим за последними трендами и регулярно обновляем наш
                            ассортимент<br>
                            <br>
                            • Качество и надежность: Все наши изделия изготавливаются из высококачественных материалов,
                            что гарантирует долговечность и эстетичный вид штор.<br>
                            <br>
                            • Профессиональный монтаж: Мы предлагаем услуги по установке штор, чтобы вы могли
                            наслаждаться красивым интерьером без лишних хлопот.<br>
                        </p>
                    </div>
                    <img src="/Images/img1.png" alt="Image 2" class="carousel-image">
                </div>
                <!-- Слайд 3 -->
                <div class="carousel-slide">
                    <div class="carousel-text">
                        <h1>Как заказать?</h1>
                        <p>1. Консультация: Позвоните нам или посетите наш магазин для консультации с нашим
                            специалистом.<br>
                            <br>
                            2. Выбор ткани и дизайна: Выберите из нашего ассортимента ткани и дизайн, который подходит
                            именно вам.<br>
                            <br>
                            3. Измерения: Мы поможем вам с точными измерениями, чтобы ваши шторы идеально подошли к
                            вашим окнам.<br>
                            <br>
                            4. Изготовление и установка: После подтверждения заказа мы изготовим ваши шторы и установим
                            их в удобное для вас время.</p>
                    </div>
                    <img src="/Images/img1.png" alt="Image 3" class="carousel-image">
                </div>
            </div>
            <button class="carousel-button prev" aria-label="Previous Slide">&larr;</button>
            <button class="carousel-button next" aria-label="Next Slide">&rarr;</button>
        </div>
    </div>
    <div class="info-block">
        <!-- Левая панель с текстом -->
        <div class="info-panel">
            <div class="logo-header">
                <img src="/Images/logoCircle.png" alt="Logo" class="logo">
                <h2>О компании</h2>
            </div>
            <p class="description">
                Компания "Шторы в каждый дом" была основана с целью предоставить жителям Гродно и окрестностей
                качественные и стильные текстильные решения для их домов и офисов. Мы уверены, что шторы — это не просто
                функциональный элемент, но и важная часть интерьера, способная подчеркнуть индивидуальность вашего
                пространства.
            </p>
            <button class="more-button" onclick="location.href='About_Company.html'">Подробнее</button>
        </div>

        <!-- Правая часть с изображением -->
        <div class="image-container">
            <img src="/Images/aboutCompany_img.png" alt="Store Image" class="background-image">
        </div>
    </div>
    <div class="catalog-block">
        <!-- Заголовок -->
        <div class="catalog-header">
            <img src="/Images/logoCircle.png" alt="Логотип" class="catalog-logo">
            <h2 class="catalog-title">Каталог</h2>
        </div>

        <!-- Сетка блоков -->
        <div class="catalog-grid">
            <!-- Блоки каталога -->
            <a href="{{route('shtory.index')}}">
                <div class="catalog-item">
                    <img src="/Images/Шторы.jpg" alt="Блок 1" class="catalog-image">
                    <h3 class="catalog-item-title">Шторы</h3>
                </div>
            </a>
            <a href="{{route('tyl.index')}}">
                <div class="catalog-item">
                    <img src="/Images/Тюль.jpeg" alt="Блок 2" class="catalog-image">
                    <h3 class="catalog-item-title">Тюль</h3>
                </div>
            </a>
            <a href="{{route('rimskieShtory.index')}}">
                <div class="catalog-item">
                    <img src="/Images/Римские_шторы.jpg" alt="Блок 3" class="catalog-image">
                    <h3 class="catalog-item-title">Римские шторы</h3>
                </div>
            </a>
            <a href="{{route('pocrivala.index')}}">
                <div class="catalog-item">
                    <img src="/Images/Покрывала.jpg" alt="Блок 4" class="catalog-image">
                    <h3 class="catalog-item-title">Покрывала</h3>
                </div>
            </a>
{{--            <div class="catalog-item">--}}
{{--                <img src="/Images/Способы_пошива_штор.jpg" alt="Блок 5" class="catalog-image">--}}
{{--                <h3 class="catalog-item-title">Способы пошива штор</h3>--}}
{{--            </div>--}}
            <a href="{{route('decorPodushki.index')}}">
                <div class="catalog-item">
                    <img src="/Images/Декоративные_подушки.jpg" alt="Блок 6" class="catalog-image">
                    <h3 class="catalog-item-title">Декоративные подушки</h3>
                </div>
            </a>
        </div>
    </div>
@endsection

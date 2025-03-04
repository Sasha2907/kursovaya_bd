@extends('layouts.Review.main')
@section('content')
    <main class="about">
        <section class="about-header">
            <div class="container">
                <div class="about-logo">
                    <img src="/Images/logoCircle.png" alt="О компании">
                </div>
                <div class="about-text">
                    <h1>О нашей компании</h1>
                    <p>Компания "Шторы в каждый дом" занимается производством и продажей качественных текстильных изделий. Мы предоставляем широкий выбор штор, тюлей и аксессуаров, которые подойдут для любого интерьера.</p>
                </div>
            </div>
        </section>

        <!-- Блок преимуществ -->
        <section class="advantages">
            <div class="container">
                <h2>Наши преимущества</h2>
                <div class="advantages-grid">
                    <div class="advantage">
                        <img src="/Images/Высокое_качество.jpg" alt="Качество">
                        <h3>Высокое качество</h3>
                        <p>Мы используем только лучшие материалы для изготовления наших изделий.</p>
                    </div>
                    <div class="advantage">
                        <img src="/Images/Современный_Дизайн.jpg" alt="Дизайн">
                        <h3>Современный дизайн</h3>
                        <p>Наши шторы гармонично дополнят интерьер любого помещения.</p>
                    </div>
                    <div class="advantage">
                        <img src="/Images/Индивидуальный_подход.jpg" alt="Сервис">
                        <h3>Индивидуальный подход</h3>
                        <p>Мы учитываем все пожелания клиентов при подборе штор.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Контактная информация -->
        <section class="contact-section">
            <div class="contact-info">
                <h2>Свяжитесь с нами</h2>
                <p><strong>Телефон:</strong> +375 29 2879009</p>
                <p><strong>Телефон:</strong> +375 25 7973108</p>
                <p><strong>Email:</strong> <a href="mailto:opetuk@mail.ru">opetuk@mail.ru</a></p>
                <p><strong>Адрес:</strong> г. Гродно, пр-т Я.Купалы 88а</p>
                <p><strong>Режим работы:</strong> Пн-Пт 10:00-18:00, Сб 10:00-15:00, Вс - выходной</p>
            </div>
            <div class="map-container">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d175.69277321274848!2d23.85186154080614!3d53.65345974780981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dfd7afe79ef269%3A0xfa359f9229ca24ed!2z0KjRgtC-0YDRiyDQsiDQutCw0LbQtNGL0Lkg0LTQvtC8INCY0J8g0J_QtdGC0Y7Qug!5e1!3m2!1sru!2sde!4v1732891505893!5m2!1sru!2sde"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </main>
@endsection

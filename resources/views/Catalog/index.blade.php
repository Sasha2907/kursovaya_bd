@extends('layouts.review.main')
@section('content')
    <div class="catalog-block">
        <!-- Заголовок -->
        <div class="catalog-header">
            <img src="/Images/logoCircle.png" alt="Логотип" class="catalog-logo">
            <h2 class="catalog-title">Каталог</h2>
        </div>

        <!-- Сетка блоков -->
        <div class="catalog-grid">
            <!-- Блоки каталога -->
            <div class="catalog-item">
                <a href="{{route('shtory.index')}}"><img src="/Images/Шторы.jpg" alt="Блок 1" class="catalog-image">
                    <h3 class="catalog-item-title">Шторы</h3></a>
            </div>
            <div class="catalog-item">
                <a href="{{route('tyl.index')}}"><img src="/Images/Тюль.jpeg" alt="Блок 2" class="catalog-image">
                    <h3 class="catalog-item-title">Тюль</h3></a>
            </div>
            <div class="catalog-item">
                <a href="{{route('rimskieShtory.index')}}"><img src="/Images/Римские_шторы.jpg" alt="Блок 3" class="catalog-image">
                <h3 class="catalog-item-title">Римские шторы</h3></a>
            </div>
            <div class="catalog-item">
                <a href="{{route('pocrivala.index')}}"><img src="/Images/Покрывала.jpg" alt="Блок 4" class="catalog-image">
                <h3 class="catalog-item-title">Покрывала</h3></a>
            </div>
{{--            <div class="catalog-item">--}}
{{--                <img src="/Images/Способы_пошива_штор.jpg" alt="Блок 5" class="catalog-image">--}}
{{--                <h3 class="catalog-item-title">Способы пошива штор</h3>--}}
{{--            </div>--}}
            <div class="catalog-item">
                <a href="{{route('decorPodushki.index')}}"><img src="/Images/Декоративные_подушки.jpg" alt="Блок 6" class="catalog-image">
                <h3 class="catalog-item-title">Декоративные подушки</h3></a>
            </div>
        </div>
    </div>
@endsection

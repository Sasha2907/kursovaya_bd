@extends('layouts.Review.main')

@section('content')
    <div class="container">
        <h1>Избранные товары</h1>
        <form method="GET" action="{{ route('favorites.index') }}" class="mb-3">
            <div class="row g-2">
                <!-- Поле поиска -->
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Поиск по названию" value="{{ request('search') }}">
                </div>

                <!-- Фильтр по категории -->
                <div class="col-md-3">
                    <select name="category" class="form-select">
                        <option value="all">Все категории</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Фильтр по стране поставщика -->
                <div class="col-md-3">
                    <select name="country" class="form-select">
                        <option value="all">Все страны</option>
                        @foreach($countries as $country)
                            <option value="{{ $country->country }}" {{ request('country') == $country->country ? 'selected' : '' }}>
                                {{ $country->country }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Фильтровать</button>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach($favorites as $favorite)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $favorite->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $favorite->name }}</h5>
                            <p class="card-text">{{ $favorite->material }}</p>
                            <a href="{{ route('shtory.show', $favorite->id) }}" class="btn btn-primary">Подробнее</a>
                            <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">❌ Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

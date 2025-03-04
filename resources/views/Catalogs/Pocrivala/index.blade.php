@extends('layouts.Review.main')
@section('content')
    <div class="container">
        <div class="mb-4 mt-4 catalog-header">
            <img src="/Images/logoCircle.png" alt="Логотип" class="catalog-logo">
            <p class="catalog-title">Покрывала</p>
        </div>
        <div class="mb-4 mt-4 catalog-header">
            <p class="lead text-muted" style="font-size: 1.2rem; font-style: italic; line-height: 1.5;">
                Откройте для себя наш ассортимент стильных и качественных покрывал, которые подчеркнут вашу
                индивидуальность.
            </p>
        </div>
        <form action="{{ route('pocrivala.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Поиск по названию" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Искать</button>
            </div>
        </form>
        <div class="d-flex flex-row flex-wrap mb-3">
            @foreach($products as $product)

                <div class="card m-3 w-20" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <a href="{{route('pocrivala.show',$product->id)}}" class="btn btn-primary mb-1">Подробнее</a>
                        <form action="{{ route('favorites.toggle', $product->id) }}" method="POST">
                            @csrf
                            @if(auth()->user() && auth()->user()->favorites()->where('product_id', $product->id)->exists())
                                <button type="submit" class="btn btn-success">✅ В избранном</button>
                            @else
                                <button type="submit" class="btn btn-outline-primary">💖 Добавить в избранное</button>
                            @endif
                        </form>
                    </div>

                </div>

            @endforeach
        </div>
    </div>
@endsection

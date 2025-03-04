@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="mb-4 mt-4 catalog-header">
            <img src="/Images/logoCircle.png" alt="Логотип" class="catalog-logo">
            <p class="catalog-title">Отзывы</p>
        </div>
        @foreach($reviews as $review)
            @foreach($users as $user)

                <form action="{{route('admin.review.destroy',$review->id)}}" method="post">
                    @if($review->user_id == $user->id)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{$user->name}}
                            </div>
                            <div class="card-body ps-3">
                                <p class="card-text">{{$review->content}}</p>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
                            </div>
                        </div>
                    @endif
                </form>
            @endforeach

        @endforeach
    </div>

@endsection

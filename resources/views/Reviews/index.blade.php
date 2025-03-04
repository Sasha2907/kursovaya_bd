@extends('layouts.review.main')
@section('content')
    <div class="container mb-3">
        @if(auth()->user())
            <a href="{{route('review.create')}}" class="btn btn-dark mt-3 mb-3">Добавить отзыв</a>
        @endif
        @foreach($reviews as $review)
            @foreach($users as $user)
                <form action="{{route('review.destroy',$review->id)}}" method="post">
                    @if($review->user_id == $user->id)
                        <div class="card mb-3 mt-3">
                            <div class="card-header">
                                Имя пользователя: {{$user->name}}
                            </div>
                            <div class="card-body ps-3">
                                <p class="card-text"> Отзыв: {{$review->content}}</p>
                                @auth
                                    @if(auth()->user()->id == $review->user_id || auth()->user()->role == 'admin')
                                        <form action="{{ route('review.destroy', $review->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm mb-3">Удалить</button>
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>

                    @endif
                </form>
            @endforeach

        @endforeach

    </div>

@endsection

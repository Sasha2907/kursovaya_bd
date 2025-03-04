@extends('layouts.review.main')
    @section('content')
        <div class="container">
            <form action="{{route('review.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Напишите ваш отзыв</label>
                    <textarea type="text" class="form-control" id="content" name="content"
                              placeholder="Напишите ваш отзыв" required></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit">Sumbit</button>
                </div>
            </form>
        </div>


    @endsection

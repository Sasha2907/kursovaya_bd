@extends('layouts.admin')
@section('content')
    <div class="container">
        <form action="{{route('admin.suppliers.update',$supplier->id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Введите имя нового поставщика</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$supplier->name}}">

                </input>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Введите страну нового поставщика</label>
                <input type="text" class="form-control" id="country" name="country" value="{{$supplier->country}}"
                ></input>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Подтвердить</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            // Обновление sidebar
            $('body').layout('fix');
        });
    </script>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="container">
        <form action="{{route('admin.suppliers.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Введите имя нового поставщика</label>
                <input type="text" class="form-control" id="name" name="name"
                          placeholder="Введите имя поставщика" required></input>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Введите страну нового поставщика</label>
                <input type="text" class="form-control" id="country" name="country"
                       placeholder="Введите страну поставщика" required></input>
            </div>
            <div class="mb-3">
                <button type="submit">Добавить</button>
            </div>
        </form>
    </div>

@endsection

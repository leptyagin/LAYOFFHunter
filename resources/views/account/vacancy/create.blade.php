@extends('layouts.app')

@section('content')

    <form action="{{ route('account.vacancy.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-4">
            <label>title</label>
            <input type="text" class="form-control" name="title"
                   value="{{ old('title') }}">

            @error('title')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>
        <div class="form-group col-4">
            <label>company</label>
            <input type="text" class="form-control" name="company"
                   value="{{ old('company') }}">
            @error('company')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>
        <div class="form-group">
            <label>description</label>
            <textarea name="description">
                {{ old('description') }}
            </textarea>
            @error('description')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>location</label>
            <input type="text" class="form-control" name="location"
                   value="{{ old('location') }}">
            @error('location')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>email</label>
            <input type="text" class="form-control" name="email" placeholder="email"
                   value="{{ old('email') }}">
            @error('email')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>min_pay</label>
            <input type="text" class="form-control" name="min_pay"
                   value="{{ old('min_pay') }}">
            @error('min_pay')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>max pay</label>
            <input type="text" class="form-control" name="max_pay"
                   value="{{ old('max_pay') }}">
            @error('max_pay')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Добавить главное изображение</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>
            @error('image')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>

    <h1>
        здесь создается новая вакансия
    </h1>
@endsection

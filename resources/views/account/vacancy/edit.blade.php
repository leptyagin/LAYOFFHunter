@extends('layouts.app')

@section('content')

    <form action="{{ route('account.vacancy.update', $vacancy->id) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <div class="form-group col-4">
            <label>title</label>
            <input type="text" class="form-control" name="title" value="{{ $vacancy->title }}">

            @error('title')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>
        <div class="form-group col-4">
            <label>company</label>
            <input type="text" class="form-control" name="company"
                   value="{{ $vacancy->company }}">
            @error('company')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>
        <div class="form-group">
            <label>description</label>
            <textarea name="description">
                {{ $vacancy->desciption }}
            </textarea>
            @error('description')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>location</label>
            <input type="text" class="form-control" name="location"
                   value="{{ $vacancy->location }}">
            @error('location')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>email</label>
            <input type="text" class="form-control" name="email" placeholder="email"
                   value="{{ $vacancy->email }}">
            @error('email')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>min_pay</label>
            <input type="text" class="form-control" name="min_pay"
                   value="{{ $vacancy->min_pay }}">
            @error('min_pay')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group col-4">
            <label>max pay</label>
            <input type="text" class="form-control" name="max_pay"
                   value="{{ $vacancy->max_pay }}">
            @error('max_pay')
            <div class="text-danger">Это поле необходимо заполнить</div>
            @enderror()
        </div>

        <div class="form-group">
            {{--            <label for="exampleInputFile">Добавить главное изображение</label>--}}
            {{--            <div class="input-group">--}}
            {{--                <div class="custom-file">--}}
            {{--                    <input type="file" class="custom-file-input" name="main_img">--}}
            {{--                    <label class="custom-file-label">Choose file</label>--}}
            {{--                </div>--}}
            {{--                <div class="input-group-append">--}}
            {{--                    <span class="input-group-text">Upload</span>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            @error('main_img')--}}
            {{--            <div class="text-danger">Это поле необходимо заполнить</div>--}}
            {{--            @enderror()--}}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="update">
        </div>
    </form>

    <h1>
        здесь создается новая вакансия
    </h1>
@endsection

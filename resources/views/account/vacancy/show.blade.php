@extends('layouts.app')

@section('content')
    <div class="row">
        <a class="btn btn-primary" href="{{ route('account.vacancy.index') }}">
            all vacancies
        </a>
        <a href="{{ route('account.vacancy.edit', $vacancy->id) }}">
            edit
        </a>
        <form action="{{ route('account.vacancy.delete', $vacancy->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit" class="border-0 bg-transparent">
                delete
            </button>
        </form>
        <div class="col-6 mt-4">
            <div class="card">

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                        <tr>
                            <td>title:</td>
                            <td>{{ $vacancy->title }}</td>
                        </tr>
                        <tr>
                            <td>company:</td>
                            <td>{{ $vacancy->company }}</td>
                        </tr>

                        @if (str_contains($vacancy->image, 'https://'))
                            <tr>
                                <td>image:</td>
                                <td>
                                    <img src="{{ $vacancy->image }}" alt="{{ $vacancy->title }}" style="width: 300px; height: 300px;">
                                </td>
                            </tr>
                        @elseif (!$vacancy->image)
                            <tr>
                                <td>no image:</td>
                                <td>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png" alt="no image" style="width: 300px; height: 300px;">
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td>image:</td>
                                <td>
                                    <img src="{{ asset('storage/' . $vacancy->image) }}" alt="{{ $vacancy->title }}" style="width: 300px; height: 300px;">
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection

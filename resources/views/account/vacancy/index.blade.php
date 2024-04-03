@extends('layouts.app')

@section('content')
    <a href="{{ route('account.vacancy.create') }}" class="btn btn-primary">create new vacancy</a>

    <div class="row">

        @if($vacancies)
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th colspan="3">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($vacancies as $vacancy)
                                <tr>
                                    <td>{{ $vacancy->id }}</td>
                                    <td>{{ $vacancy->title }}</td>
                                    <td>
                                        <a href="{{ route('account.vacancy.show', $vacancy->id) }}">
                                            show
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('account.vacancy.edit', $vacancy->id) }}">
                                            edit
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('account.vacancy.delete', $vacancy->id) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        @endif
    </div>
@endsection

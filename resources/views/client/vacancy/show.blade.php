@extends('layouts.app')

@section('content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">

                    @if (str_contains($vacancy->image, 'https://'))
                        <img src="{{ $vacancy->image }}" alt="{{ $vacancy->title }}" class="card-img img-fluid" >
                    @elseif (!$vacancy->image)
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                            alt="no image" class="card-img img-fluid">
                    @else
                        <img src="{{ asset('storage/' . $vacancy->image) }}" alt="{{ $vacancy->title }}" class="card-img img-fluid">
                    @endif

                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{ $vacancy->title }}</h1>
                        <p class="py-2">
                            {{ $vacancy->company }}
                        </p>

                        <h6>Description:</h6>
                        <p>
                            {{ $vacancy->description }}
                        </p>

                        <h6>Email:</h6>
                        <p>
                            {{ $vacancy->email }}
                        </p>

                        <h6>Salary:</h6>
                        <p>
                            {{ $vacancy->min_pay }} - {{ $vacancy->max_pay }} $
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

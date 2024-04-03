@extends('layouts.app')

@section('content')
    <style>
        .vacancies-page {
            width: 100%;
        }

        .page__title {
            color: #1ed593;
        }

        .vacancies__wrapper {
            margin-top: 30px;
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .item {
            box-shadow: -1px 3px 28px 6px rgba(0, 0, 0, 0.5);
            border-radius: 25px;
            padding: 20px;

            display: flex;
            align-items: flex-start;
            gap: 25px;
        }

        .info {
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .item img {
            border-radius: 10px;
            width: 150px !important;
            height: 100px !important;
            object-fit: cover;
        }

        .company {
            padding: 0;
            font-size: 18px !important;
            margin: 0;
            color: #ddd;
        }

        .title-a {
            text-decoration: none;
        }

        .title,
        .salary {
            font-size: 30px;
            color: #fff;
        }

        .info_right {
            display: flex;
            flex-direction: column;
            align-items: flex-end
        }

        .lint-to-vacancy {
            color: #fff;
        }
    </style>

    <div class="vacancies-page">
        <h1 class="text-h2 page__title">
            Vacancies
        </h1>
        <div class="vacancies__wrapper">
            @foreach($vacancies as $vacancy)
                <div class="item">
                    <a href="{{ route('client.vacancy.show', $vacancy->id) }}">
                        @if (str_contains($vacancy->image, 'https://'))
                            <img src="{{ $vacancy->image }}" alt="{{ $vacancy->title }}"
                                 style="width: 300px; height: 300px;">
                        @elseif (!$vacancy->image)
                            <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                alt="no image" style="width: 300px; height: 300px;">
                        @else
                            <img src="{{ asset('storage/' . $vacancy->image) }}" alt="{{ $vacancy->title }}"
                                 style="width: 300px; height: 300px;">
                        @endif
                    </a>

                    <div class="info">
                        <div class="info_left">
                            <p class="company">
                                {{ $vacancy->company }}
                            </p>
                            <a href="{{ route('client.vacancy.show', $vacancy->id) }}" class="title-a">
                                <h3 class="title">
                                    {{ $vacancy->title }}
                                </h3>
                            </a>
                        </div>
                        <div class="info_right">
                            <div class="location">
                                {{ $vacancy->location }}
                            </div>
                            <div class="salary">
                                {{ $vacancy->min_pay }} - {{ $vacancy->max_pay }} $
                            </div>
                            <a href="{{ route('client.vacancy.show', $vacancy->id) }}" class="lint-to-vacancy">
                                More
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.3153 16.6681C15.9247 17.0587 15.9247 17.6918 16.3153 18.0824C16.7058 18.4729 17.339 18.4729 17.7295 18.0824L22.3951 13.4168C23.1761 12.6357 23.1761 11.3694 22.3951 10.5883L17.7266 5.9199C17.3361 5.52938 16.703 5.52938 16.3124 5.91991C15.9219 6.31043 15.9219 6.9436 16.3124 7.33412L19.9785 11.0002L2 11.0002C1.44772 11.0002 1 11.4479 1 12.0002C1 12.5524 1.44772 13.0002 2 13.0002L19.9832 13.0002L16.3153 16.6681Z"
                                        fill="#fff"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

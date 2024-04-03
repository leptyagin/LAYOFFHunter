<?php

namespace App\Http\Controllers\Client\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        $vacancies = Vacancy::all();
        return view('client.vacancy.index', compact('vacancies'));
    }
}

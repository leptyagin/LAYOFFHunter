<?php

namespace App\Http\Controllers\Account\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        $vacancies = Vacancy::all();

        return view('account.vacancy.index', compact('vacancies'));
    }
}

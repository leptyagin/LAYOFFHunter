<?php

namespace App\Http\Controllers\Account\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        return view('account.vacancy.edit', compact('vacancy'));
    }
}

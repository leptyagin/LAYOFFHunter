<?php

namespace App\Http\Controllers\Account\Vacancy;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()->route('account.vacancy.index');
    }
}

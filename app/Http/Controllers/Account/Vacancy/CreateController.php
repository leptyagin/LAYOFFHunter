<?php

namespace App\Http\Controllers\Account\Vacancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('account.vacancy.create');
    }
}

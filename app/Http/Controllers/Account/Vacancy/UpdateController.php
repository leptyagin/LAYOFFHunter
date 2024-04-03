<?php

namespace App\Http\Controllers\Account\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancy\UpdateRequest;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Vacancy $vacancy)
    {
        $data = $request->validated();

        $vacancy->update($data);

        return view('account.vacancy.show', compact('vacancy'));
    }
}

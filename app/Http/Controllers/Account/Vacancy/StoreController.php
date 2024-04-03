<?php

namespace App\Http\Controllers\Account\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancy\StoreRequest;
use App\Models\Vacancy;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->id();
//        dd($request->file('image'));

        if($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        Vacancy::firstOrCreate($data);

        return redirect()->route('account.vacancy.index');
    }
}

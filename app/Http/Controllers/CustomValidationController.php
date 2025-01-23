<?php

namespace App\Http\Controllers;

use App\Rules\BirthYearRule;
use Illuminate\Http\Request;

class CustomValidationController extends Controller
{
    public function create()
    {
        return view('forms');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'birthday' => ['required', new BirthYearRule()],
        ]);

        return back()->with('success', 'Form is successfully submitted!');
    }
}

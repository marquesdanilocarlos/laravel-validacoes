<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'course' => ['required', 'max:100'],
            'workload' => ['required', 'integer']
        ]);

        //$data = $request->except('_token');

        /*Validator::make(
            $data,
        [
            'course' => ['required', 'max:100'],
            'workload' => ['required', 'integer']
        ])->validate();*/

        dd('Validou!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $validation = Validator::make(
            $data,
        [
            'course' => ['required', 'max:100'],
            'workload' => ['required', 'integer']
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        dd('Validou!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store()
    {
        $validation = Validator::make([
            'course' => '',
            'workload' => 10
        ],
        [
            'course' => ['required', 'max:100'],
            'workload' => ['required', 'integer']
        ]);

        if ($validation->fails()) {
            dd($validation);
        }

        dd('Validou!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store(CourseRequest $request)
    {
        //$data = $request->except('_token');

        /*Validator::make(
            $data,
        [
            'course' => ['required', 'max:100'],
            'workload' => ['required', 'integer']
        ])->validate();*/

        dump('Validou!');
        dump($request->all());
    }
}

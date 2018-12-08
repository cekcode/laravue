<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class KategorilayananRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(Request $request)
    {
        return [
            'status' => 'required|max:2',
            'nama'=> 'required|nama|unique:kategorilayanans,nama,'.$request->id
        ];
    }
}

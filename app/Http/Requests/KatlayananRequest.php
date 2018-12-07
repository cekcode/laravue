<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class KatlayananRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules(Request $request)
    {
        return [
            'nama' => 'required',
            'status' => 'required|max:2'
            
            // 'nama'=> 'required|nama|unique:kategori_layanan,nama,'.$request->nama
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Code;
use App\Http\Requests\CodeRequest;

class DiscountCodeControlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function codeControl(CodeRequest $request)
    {

        $code =new Campaign();
        $code->used_code = $request->used_code;
        if (Code::where('discount_code', $code->used_code)->exists())
        {
            $d_c_id = Code::where('discount_code', $code->used_code)->first();
            $id = $d_c_id->id;
            $code->discount_code_id = $id;

            $code->save();

            return view('codecontrol');
        }
        else
        {
            echo "Girmiş olduğunuz kod geçerli değildir.";
        }
    }
}

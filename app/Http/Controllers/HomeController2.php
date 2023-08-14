<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TagList;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Validator;

class HomeController2 extends Controller
{
    public function addMore()
    {
        return view("addMore");
    }


    public function addMorePost(Request $request)
    {
        $rules = [];


        foreach($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';
        }


        $validator = validator::make($request->all(), $rules);


        if ($validator->passes()) {


            foreach($request->input('name') as $key => $value) {
                TagList::create(['name'=>$value]);
            }


            return response()->json(['success'=>'done']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }
}

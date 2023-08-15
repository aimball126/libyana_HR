<?php

namespace App\Http\Controllers;

use App\Requestt;
use Illuminate\Http\Request;
use App\Notifications\NewRequestNotification;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $msg = 'Data sent successfully';

        $image_path = 'images/';

        // إنشاء اسم فريد للصورة باستخدام الوقت الحالي واسم الملف


        $image_name = time() . '_' . $request->file('cv')->getClientOriginalName();

        // حفظ الصورة في النظام الملفي
        $request->file('cv')->move(public_path($image_path), $image_name);

        // حفظ بيانات المنتج في قاعدة البيانات مع اسم الصورة الجديد
        $product = new Requestt();
        $product->name = $request->input('name');
        $product->phone = $request->input('phone');
        $product->email = $request->input('email');
        $product->nationality = $request->input('nationality');
        $product->birth = $request->input('birth');
        $product->city = $request->input('city');
        $product->martial_status = $request->input('martial_status');
        $product->address = $request->input('address');
        $product->about = $request->input('about');
        $product->cv = $image_path . $image_name;
        $product->save();

        return redirect()->back()->with('done', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

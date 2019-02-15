<?php

namespace App\Http\Controllers;
use App\Product;
use App\Jobs\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;   

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create=new Product();
        $create->name_prod=Input::get('name');
        $create->price=Input::get('price');
        $create->save();
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function showAll(){
        $show=Product::all();
        return view('show',compact('show'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new_name=Input::get('name');
        $new_price=Input::get('price');
        $edit=Product::find($id);
        $edit->name_prod=$new_name;
        $edit->price=$new_price;
        $edit->save();
        return Redirect::back();


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
        $delete=Product::find($id)->delete();
        return Redirect::back();
    }

    public function sendMessage(){
       SendMessage::dispatch("Message");
    }
}

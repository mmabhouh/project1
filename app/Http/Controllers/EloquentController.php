<?php

namespace App\Http\Controllers;

use App\Models\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class EloquentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data= Eloquent::all();
        // $data= Eloquent::withTrashed()->get();
        $data= Eloquent::withoutTrashed()->get();
        // $data= Eloquent::onlyTrashed()->get();

        //   $data= Eloquent::select('id','name')->get();
         foreach($data as $item){
            echo "User Id: ".$item->id."User Name: ".$item->name;
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=new Eloquent();
        $data->name ='moh';
        $data->email = 'moh@a.com';
        $data->password = Hash::make('123456');

       $isSaved = $data->save();

       echo $isSaved ?"True":"False";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show
        // $item= Eloquent::where('id', $id)->first();
        // $item= Eloquent::findOrFail($id);
        //    echo "User Id: ".$item->id."User Name: ".$item->name;
        //   هنا سوف نستخدم delet تجاوزا
        // $delet= Eloquent::findOrFail($id);
        // $isDeleted = $delet->delete();

        // $isDeleted= Eloquent::destroy($id);
        // echo $isDeleted ?"True":"False";


    }
      // استرجاع القيم
    public function restore($id){
        // $restore= Eloquent::findOrFail($id)->restore();
        $restore= Eloquent::withTrashed()->findOrFail($id)->restore();
             echo $restore ? "True" : "False";
    }

    // حدف نهائي
    public function forseDelete($id){
        // $restore= Eloquent::findOrFail($id)->restore();
        $forseDelete= Eloquent::findOrFail($id)->forseDelete();
             echo $forseDelete ? "True" : "False";
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $update= Eloquent::findOrFail($id);
        $update->name ='khaled';
        $update->email = 'khaled@k.com';
        $isUpdate = $update->save();

        echo $isUpdate ?"True":"False";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eloquent $eloquent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eloquent  $eloquent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eloquent $eloquent)
    {
        //
    }
}

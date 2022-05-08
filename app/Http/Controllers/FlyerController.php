<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flyer;
use Illuminate\Support\Facades\Storage;

class FlyerController extends Controller
{
    //
    public function index()
    {
        return $flyer = Flyer::all();
    }
    public function store(Request $request)
    {
        //validar el campo logo
        $request->validate([
            'flyer' => 'required|file',
        ]);
        $upload = new Flyer(); //creamos una nueva foto
        if ($request->hasFile('flyer')) {

            $file = $request->file('flyer');
            $path = 'img/PromotionFlyer/';
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $move = $request->file('flyer')->move($path, $filename);

            $upload->flyer_path = $path . $filename; //le damos el valor a la variable
        }
        $upload->save();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flyers = Flyer::find($id);
        unlink($flyers->flyer_path);
        return $flyer = Flyer::destroy($id);
    }
}

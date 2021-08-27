<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::whereUserId(Auth::id())->latest()->get();
        return view('index', compact('files'));
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
        $max_size = (int)ini_get('upload_max_filesize') * 10240;

        $files = $request->file('files');
        $user_id = Auth::id();

        if($request->hasFile('files')){
            foreach($files as $file){
                $fileName = Str::slug($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
                //$fileName = encrypt($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
                if(Storage::putFileAs('/public/' . $user_id . '/' , $file, $fileName)){
                    File::create([
                        'name' => $file->getClientOriginalName(),
                        'code_name' => $fileName,
                        'user_id' => $user_id
                    ]);
                }
            }
            Alert::success('¡Éxito!', 'Se ha subido el archivo');
            return back();
        }else{
            Alert::error('¡Error!', 'Debes subir uno o más archivos');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::whereCodeName($id)->firstOrFail();
        $user_id = Auth::id();
        if($file->user_id == $user_id){
            //return redirect(storage_path().'/app/public/'.$user_id.'/'.$file->code_name);
            return response()->file(storage_path().'/app/public/'.$user_id.'/'.$file->code_name);
        } else {
            Alert::error('¡Error!', 'No tiene permisos para ver este archivo');
            return back();

            // También se puede colocar
            // abort(403);
        }
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
    public function destroy(Request $request, $id)
    {
        $file = File::whereCodeName($id)->firstOrFail();
        
        // Borra el archivo del storage o almacenamiento
        $archivo = storage_path().'/app/public/'.Auth::id().'/'.$file->code_name;
        unlink($archivo);

        // Borra el registro de la bd
        $file->delete();

        Alert::info('Atención!', 'Se ha eliminado el archivo');
        return back();
    }
}

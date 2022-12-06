<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function all(Request $request){

        $token = substr($request->header('Authorization', 'Token <token>'), 6);

        $songs = Song::all()->toArray();
        
        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => $songs,
                'token' => $token
            ]
        );
    }

    public function store(Request $request)
    {

        Song::create($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => 'Registro borrado exitosamente'
            ]
        );
    }

    public function edit($id){
        $song = Song::find($id)->toArray();

        return response()->json([
            'code' => 200,
            'status' => 'true',
            'data' => $song
        ]);
    }

    public function update(Request $request, $id)
    {

        Song::find($id)->update($request->all());

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => 'Registro actualizado correctamente'
            ]
        );
    }

    public function destroy($id)
    {
        // dd($id);
        // Song::destroy($id);

        $newSongList = Song::all()->toArray();

        return response()->json(
            [
                'code' => 200,
                'status' => 'true',
                'data' => [
                    'msg' => 'Registro eliminado correctamente',
                    'newList' => $newSongList
                ]
            ]
        );
    }
}

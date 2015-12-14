<?php

namespace App\Http\Controllers;

use Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Bahan;

class BahanController extends Controller
{
    public function index()
    {
        $data['items'] = Bahan::all();
        return view('index',$data);
    }

    public function create(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('create');
        }
        elseif($request->isMethod('post'))
        {
            $item = array(
                    'nama' => Input::get('nama'),
                    'kode' => Input::get('kode')
                );
            Bahan::create($item);
            return redirect('bahan');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('get'))
        {
            $data['item'] = Bahan::find($id);
            return view('update',$data);
        }
        elseif($request->isMethod('post'))
        {
            $item = Bahan::find($id);
            
            $item->nama = Input::get('nama');
            $item->kode = Input::get('kode');
            $item->save();
            
            return redirect('bahan');
        }
    }

    public function delete($id)
    {
        $item = Bahan::find($id);
        $item->delete();
        return redirect('bahan');
    }
}

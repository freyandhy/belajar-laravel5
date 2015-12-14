<?php

namespace App\Http\Controllers;

use Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Resep;
use App\Models\Koki;

class ResepController extends Controller
{
    public function index()
    {
        $data['items'] = Resep::all();
        return view('resep.index',$data);
    }

    public function create(Request $request)
    {
        if($request->isMethod('get'))
        {
            $data['kokis'] = Koki::all();
            return view('resep.create',$data);
        }
        elseif($request->isMethod('post'))
        {
            $item = array(
                    'nama'    => Input::get('nama'),
                    'kode'    => Input::get('kode'),
                    'koki_id' => Input::get('koki_id')
                );
            Resep::create($item);
            return redirect('resep');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('get'))
        {
            $data['item'] = Resep::find($id);
            $data['kokis'] = Koki::all();
            return view('resep.update',$data);
        }
        elseif($request->isMethod('post'))
        {
            $item = Resep::find($id);
            
            $item->nama    = Input::get('nama');
            $item->kode    = Input::get('kode');
            $item->koki_id = Input::get('koki_id');
            $item->save();
            
            return redirect('resep');
        }
    }

    public function delete($id)
    {
        $item = Resep::find($id);
        $item->delete();
        return redirect('resep');
    }
}

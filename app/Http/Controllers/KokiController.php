<?php

namespace App\Http\Controllers;

use Input;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Koki;

class KokiController extends Controller
{
    public function index()
    {
        $data['items'] = Koki::all();
        return view('koki.index',$data);
    }

    public function create(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('koki.create');
        }
        elseif($request->isMethod('post'))
        {
            $item = array(
                    'nama' => Input::get('nama'),
                    'kode' => Input::get('kode')
                );
            Koki::create($item);
            return redirect('koki');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->isMethod('get'))
        {
            $data['item'] = Koki::find($id);
            return view('koki.update',$data);
        }
        elseif($request->isMethod('post'))
        {
            $item = Koki::find($id);
            
            $item->nama = Input::get('nama');
            $item->kode = Input::get('kode');
            $item->save();
            
            return redirect('koki');
        }
    }

    public function delete($id)
    {
        $item = Koki::find($id);
        $item->delete();
        return redirect('koki');
    }
}

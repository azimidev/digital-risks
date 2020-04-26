<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function create()
    {
        return view('encrypt');
    }

    public function store(Request $request)
    {
        $attribute = $request->validate([
            'id' => 'required',
            'key' => 'required',
            'value' => 'required',
        ]);

        Data::updateOrCreate(
            ['id' => $attribute['id']],
            [
                'key' => $attribute['key'],
                'value' => encrypt_with_key(
                    $attribute['key'],
                    $attribute['value']
                ),
            ]
        );

        session()->flash('flash', 'Thanks you');

        return back();
    }

    public function index()
    {
        return view('decrypt');
    }

    public function show(Request $request)
    {
        $attribute = $request->validate([
            'id' => 'required',
            'key' => 'required',
        ]);

        $records = Data::where('id', 'like', "%{$attribute['id']}%");

        if (!$records->exists()) {
            session()->flash('flash', 'Could not find the ID.');

            return back();
        }

        $result = decrypt_with_key($request['key'], $records->pluck('value'));

        return $result;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\OopService;
use App\Http\Controllers\ScoolController;

class KarzinaController extends ScoolController
{
    public function index3(Request $request, OopService $model)
    {
        return $model->index3($request);
    }

    public function create3(Request $request, OopService $model)
    {
        $request->validate([
            'kompaniya_id'=>'nullable',
            'tavar_id'=>'required',
            'data'=>'required',
            'hajm'=>'required|numeric',
            'summa'=>'required',
            'kozoq'=>'nullable',
            'uzb'=>'nullable',
            'rostomoshka'=>'nullable',
            'oylikharajat'=>'nullable',
        ]);
        return $model->create3($request);
    }

    public function store3(Request $request, OopService $model)
    {
        $request->validate([
            'name'=>'required',
            'fam'=>'required',
            'ochestvo'=>'required',
        ]);
        return $model->store3($request);
    }

    public function show3(OopService $model)
    {
        return $model->show3();
    }

    public function edit3($id, OopService $model)
    {
        return $model->edit3($id);
    }

    public function update3(Request $request, $id, OopService $model)
    {
        $request->validate([
            'data'=>'required',
            'hafta'=>'nullable'
        ]);    
        return $model->update3($request, $id);
    }

    public function delete3(Request $request, $id, OopService $model)
    {
        return $model->delete3($request, $id);
    }   
}

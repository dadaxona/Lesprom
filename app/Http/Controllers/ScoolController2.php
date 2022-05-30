<?php

namespace App\Http\Controllers;

use App\Providers\OopService;
use Illuminate\Http\Request;


class ScoolController2 extends Controller
{
    public function malumotlar(Request $request, OopService $model)
    {
        return $model->malumotlar($request);
    }
    
    public function tolov(Request $request, OopService $model)
    {
        return $model->tolov($request);
    }

    public function index5(Request $request, OopService $model)
    {
        return $model->index5($request);
    }

    public function createm5(Request $request, OopService $model)
    {
        $request->validate([
            'kampaniya'=>'required',
            'raxbar'=>'required',
            'inn'=>'required',
            'tel'=>'required|min:9|max:9',
        ]);
        return $model->createm5($request);
    }

    public function create5(Request $request, OopService $model)
    {
        $request->validate([
            'tavar_id'=>'required',
            'data'=>'required',
            'kub'=>'required',
            'summa'=>'nullable',
            'naqt'=>'nullable',
            'kartq'=>'nullable',
            'bank'=>'nullable',
            'karzsumma'=>'nullable',
            'sroc'=>'nullable',
        ]);
        return $model->create55u($request);
    }
    
    public function edit5($id, OopService $model)
    {
        return $model->edit5($id);
    }

    public function update5(Request $request, $id, OopService $model)
    {
        $request->validate([
            'tavar_id'=>'required',
            'data'=>'required',
            'hajm'=>'required|numeric',
            'summa'=>'required',
        ]);
        return $model->update5($request, $id);
    }

    public function delete5(Request $request, $id, OopService $model)
    {
        return $model->delete5($request, $id);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\OopService;
use App\Http\Controllers\KarzinaController;

class StatistikController extends KarzinaController
{
    public function index2($id, OopService $model)
    {
        return $model->index2($id);
    }

    public function create2(Request $request, OopService $model)
    {
        $request->validate([
            'oy'=>'required'
        ]);
        return $model->create2($request);
    }

    public function store2(Request $request, OopService $model)
    {
        $request->validate([
            'data'=>'required',
            'hafta'=>'nullable'
        ]);
        return $model->store2($request);
    }

    public function show2($id, OopService $model)
    {
        return $model->show2($id);
    }

    public function edit2($id, OopService $model)
    {
        return $model->edit2($id);
    }

    public function update2(Request $request, $id, OopService $model)
    {
        $request->validate([
            'oy'=>'required'
        ]);
        return $model->update2($request, $id);
    }

    public function delete2($id, OopService $model)
    {
        return $model->delete2($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Providers\OopService;
use Illuminate\Http\Request;
use App\Http\Controllers\ScoolController2;

class ScoolController extends ScoolController2
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index4(Request $request, OopService $model)
    {
        return $model->index4($request);
    }

    public function create4(Request $request, OopService $model)
    {
        $request->validate([
            'data'=>'required',
            'summa'=>'required',
        ]);
        return $model->create4($request);
    }

    public function store4(Request $request, $id, OopService $model)
    {
        $request->validate([
            'tavarturi_id'=>'required',
            'data'=>'required',
            'hajm'=>'required|numeric',
            'summa'=>'required',
        ]);
        return $model->store4($request, $id);
    }

    public function show4($id, OopService $model)
    {
        return $model->show4($id);
    }

    public function edit4($id, OopService $model)
    {
        return $model->edit4($id);
    }

    public function update4(Request $request, $id, OopService $model)
    {

        return $model->update4($request, $id);
    }

    public function delete4(Request $request, $id, OopService $model)
    {
        return $model->delete4($request, $id);
    }
}

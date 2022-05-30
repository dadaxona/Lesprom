<?php

namespace App\Http\Controllers;

use App\Providers\OopServicePro;
use Illuminate\Http\Request;
use App\Http\Controllers\ScoolController5;

class ScoolController4 extends ScoolController5
{
    public function index7(Request $request, OopServicePro $model)
    {
        return $model->index7($request);
    }

    public function create7(Request $request, OopServicePro $model)
    {
        return $model->create7($request);
    }

    public function store7(Request $request, OopServicePro $model)
    {
        $request->validate([
            'ishchi_id'=>'required',
            'tavarturi_id'=>'required',
            'data'=>'required',
            'hajm'=>'required',
            'summa'=>'required'           
        ]);
        return $model->store7($request);
    }

    public function show7(Request $request, OopServicePro $model)
    {
        return $model->show7($request);
    }

    public function yuridikedit($id, OopServicePro $model)
    {
        return $model->yuridikedit($id);
    }

    public function edit7($id, OopServicePro $model)
    {
        return $model->edit7($id);
    }

    public function update7(Request $request, $id, OopServicePro $model)
    {
        $request->validate([
            'kampaniya'=>'required',
            'raxbar'=>'required',
            'inn'=>'required',
            'tel'=>'required|min:9|max:9',
        ]);
        return $model->update7($request, $id);
    }

    public function delete7(Request $request, $id, OopServicePro $model)
    {
        return $model->delete7($request, $id);
    }

    public function yuridikdelet($id, OopServicePro $model)
    {
        return $model->yuridikdelet($id);
    }
}

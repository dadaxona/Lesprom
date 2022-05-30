<?php

namespace App\Http\Controllers;

use App\Providers\OopServicePro;
use Illuminate\Http\Request;
use App\Http\Controllers\ScoolController4;


class ScoolController3 extends ScoolController4
{
    public function malumotlar2(Request $request, OopServicePro $model)
    {
        return $model->malumotlar2($request);
    }

    public function tolov2(Request $request, OopServicePro $model)
    {
        return $model->tolov2($request);
    }
    
    public function index6(Request $request, OopServicePro $model)
    {
        return $model->index6($request);
    }

    public function create6(Request $request, OopServicePro $model)
    {
        $request->validate([
            'jismoniyclenci_id'=>'required',
            'tavar_id'=>'required',
            'data'=>'required',
            'kub'=>'required',
            'summa'=>'nullable',
            'naqt'=>'nullable',
            'summa2'=>'nullable',
            'kartq'=>'nullable',
            'summa3'=>'nullable',
            'bank'=>'nullable',
            'karzsumma'=>'nullable',
            'sroc'=>'nullable',
        ]);
        return $model->create570($request);
    }
    public function createdm6(Request $request, OopServicePro $model)
    {
        $request->validate([     
            'mijoz'=>'required',
            'tel'=>'required|min:9|max:9',
        ]);
        return $model->createdm6($request);
    }
    public function show6(Request $request, OopServicePro $model)
    {
        return $model->show6($request);
    }

    public function jismoniyedit($id, OopServicePro $model)
    {
        return $model->jismoniyedit($id);
    }

    public function jismoniyedit2(Request $request, $id, OopServicePro $model)
    {
        return $model->jismoniyedit2($request, $id);
    }

    public function edit6($id, OopServicePro $model)
    {
        return $model->edit6($id);
    }

    public function update6(Request $request, $id, OopServicePro $model)
    {
        $request->validate([
            'tavar_id'=>'required',
            'data'=>'required',
            'hajm'=>'required|numeric',
            'summa'=>'required',
        ]);
        return $model->update6($request, $id);
    }
    public function jismoniydalet($id, OopServicePro $model)
    {
        return $model->jismoniydalet($id);
    }

    public function delete6(Request $request, $id, OopServicePro $model)
    {
        return $model->delete6($request, $id);
    }

    public function delete66($id, OopServicePro $model)
    {
        return $model->delete66($id);
    }

    public function delete666($id, OopServicePro $model)
    {
        return $model->delete666($id);
    }

}

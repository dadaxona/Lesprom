<?php

namespace App\Http\Controllers;

use App\Providers\OopServicePro;
use Illuminate\Http\Request;

class ScoolController5 extends Controller
{
    public function tiklash(OopServicePro $model)
    {
        return $model->tiklash();
    }
    public function tiklash2(Request $request, $id, OopServicePro $model)
    {
        return $model->tiklash2($request, $id);
    }

    public function tozalasha(Request $request, OopServicePro $model)
    {
        return $model->tozalasha($request);
    }

    public function index8(Request $request, OopServicePro $model)
    {
        return $model->index8($request);
    }

    public function dele8($id, OopServicePro $model)
    {
        return $model->dele8($id);
    }

    public function store8(Request $request, OopServicePro $model)
    {
        $request->validate([
            'data'=>'required',
            'holat'=>'required',                    
            'summa'=>'required|numeric',
            'sabab'=>'required'
        ]);
        return $model->store8($request);
    }

    public function show8($id, OopServicePro $model)
    {
        return $model->show8($id);
    }

    public function edit8($id, OopServicePro $model)
    {
        return $model->edit8($id);
    }

    public function delete8(Request $request, $id, OopServicePro $model)
    {
        return $model->delete8($request, $id);
    }
}

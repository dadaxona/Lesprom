<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\OopService;
use App\Http\Controllers\StatistikController;

class UniversalController extends StatistikController
{
    public function index(OopService $model)
    {
        return $model->index();
    }
    public function create(Request $request, OopService $model)
    {
        $request->validate([
            'yil'=>'required'
        ]);
        return $model->create($request);
    }

    public function store(Request $request, OopService $model)
    {
        $request->validate([
            'tavar'=>'required'
        ]);
        return $model->store($request);
    }

    public function showoydrektor($id, OopService $model)
    {
        return $model->showoydrektor($id);
    }
    
    public function show($id, OopService $model)
    {
        return $model->show($id);
    }

    public function edit($id, OopService $model)
    {
        return $model->edit($id);
    }

    public function update(Request $request, $id, OopService $model)
    {
        $request->validate([
            'yil'=>'required'
        ]);
        return $model->update($request,$id);
    }

    public function delete(Request $request, $id, OopService $model)
    {
        return $model->delete($request, $id);
    }
    
}

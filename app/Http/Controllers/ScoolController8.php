<?php

namespace App\Http\Controllers;

use App\Providers\OopServicePro;
use Illuminate\Http\Request;

class ScoolController8 extends Controller
{
    public function index26drektor(Request $request, OopServicePro $model)
    {
        return $model->index26drektor($request);
    }

    public function index26(Request $request, OopServicePro $model)
    {
        return $model->index26($request);
    }

    public function index27(Request $request, OopServicePro $model)
    {
        return $model->index27($request);
    }

    public function index27drektor(Request $request, OopServicePro $model)
    {
        return $model->index27drektor($request);
    }
    
    public function index28drektor(Request $request, OopServicePro $model)
    {
        return $model->index28drektor($request);
    }

    public function index28(Request $request, OopServicePro $model)
    {
        return $model->index28($request);
    }

    public function index29(Request $request, OopServicePro $model)
    {
        return $model->index29($request);
    }

    public function index29drektor(Request $request, OopServicePro $model)
    {
        return $model->index29drektor($request);
    }

    public function index30(Request $request, OopServicePro $model)
    {
        return $model->index30($request);
    }

    public function index30drektor(Request $request, OopServicePro $model)
    {
        return $model->index30drektor($request);
    }
    public function index31drektor(Request $request, OopServicePro $model)
    {
        return $model->index31drektor($request);
    }

    public function index31(Request $request, OopServicePro $model)
    {
        return $model->index31($request);
    }
    
    public function index32(OopServicePro $model)
    {
        return $model->index32();
    }

    public function index33(Request $request, OopServicePro $model)
    {
        return $model->index33($request);
    }

    public function index34(Request $request, OopServicePro $model)
    {
        return $model->index34($request);
    }

    public function yuridik222(Request $request, $id ,OopServicePro $model)
    {
        return $model->yuridik222($request, $id);   
    }

    public function yuridik(Request $request, $id ,OopServicePro $model)
    {
        return $model->yuridik($request, $id);   
    }
    
    public function jismoniy222(Request $request, $id ,OopServicePro $model)
    {
        return $model->jismoniy222($request, $id);   
    }
    
    public function jismoniy(Request $request, $id ,OopServicePro $model)
    {
        return $model->jismoniy($request, $id);   
    }
    
    public function search(Request $request, OopServicePro $model)
    {
        return $model->search($request);
    }
 
    public function search2(Request $request, OopServicePro $model)
    {
        return $model->search2($request);
    }
}
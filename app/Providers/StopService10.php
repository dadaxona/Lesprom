<?php

namespace App\Providers;

use App\Models\Oylikxarajat;
use App\Providers\StopService11;
use Carbon\Carbon;

class StopService10 extends StopService11
{
    protected $drektor;
    protected $brend;
    protected $yil;
    protected $oy;
    protected $kun;
    protected $tavar;
    protected $tavarturi;    
    protected $xisob;
    protected $chiqim;
    protected $yuridikchiqim;
    protected $ishlabchiqarilgan;
    protected $ishchi;
    protected $ishchimehnat; 
    protected $kirimtavar;
    protected $sarftavar;
    protected $yuk;
    protected $jamiyuk;
    protected $jamisarf;
    protected $jismoniyjami;
    protected $jamichiqishtavar;
    protected $umumiykirimtavar;
    protected $umumiychiqimtavar;
    protected $yilumumiychiqimtavar;
    protected $opshiumumiychiqimtavar;
    protected $jismoniyopshiqarz;
    protected $jismoniyoyqarz;
    protected $jismoniyyilqarz;
    protected $opshisarftavar;
    protected $yilliksariftavar;
    protected $oysarftavar;
    protected $jamik;
    protected $yuridikyilqarz;
    protected $yuridikoyqarz;
    protected $yuridikopshiqarz;
    protected $opshiumumiykitimtavar;
    protected $yilumumiykirimtavar;
    protected $oyishchiyuk;
    protected $jamiyuridik;
    protected $oylikmasala;
    protected $umumiyoylikmasala;
    
    public function index18drektor($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->oy->find($request->oy_id);
        return view('drektor.oylikstatistikalar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function index18($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->oy->find($request->oy_id);
        return view('bugalter.oylikstatistikalar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function index19($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->first();
        if($dat){
            $data = $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->paginate();
            return view('bugalter.oyliksta',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }   
    }
    public function index19drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->first();
        if($dat){
            $data = $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->paginate();
            return view('drektor.oyliksta',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }   
    }

    public function index20drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->umumiychiqimtavar->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->first();
        if($dat){
            $data = $this->umumiychiqimtavar->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->paginate();
            return view('drektor.oylikishlab',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index22drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->first();
        if($dat){
        $data = $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->paginate();
            return view('drektor.oyjismoniyjami',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index23drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = Oylikxarajat::where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                            
                            ->first();
        if($dat){
            $data = Oylikxarajat::where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                            
                            ->paginate();
            return view('drektor.oysarftavar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
        
    }

    public function index24drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->first();
        if($dat){
        $data = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->paginate();
            return view('drektor.oyjamiyuk',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    
    public function index25drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->first();
        if($dat){
        $data = $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                          
                            ->paginate();
            return view('drektor.oyoylikmasala',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    
    }
    public function index21drektor($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)                                
                                    ->first();                                    
        if($dat){
        $data = $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                    ->where('oy_id', $request->oy_id)                
                    ->paginate();
            return view('drektor.oyyuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index20($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->umumiychiqimtavar->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->first();
        if($dat){
            $data = $this->umumiychiqimtavar->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->paginate();
            return view('bugalter.oylikishlab',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }
    public function index21($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)                                
                                    ->first();                                    
        if($dat){
        $data = $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                    ->where('oy_id', $request->oy_id)                
                    ->paginate();
            return view('bugalter.oyyuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index22($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->first();
        if($dat){
        $data = $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->paginate();
            return view('bugalter.oyjismoniyjami',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index23($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = Oylikxarajat::where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->first();
        if($dat){
        $data = Oylikxarajat::where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                            
                                ->paginate();
            return view('bugalter.oysarftavar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
        
    }

    public function index24($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->first();
        if($dat){
        $data = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                        
                            ->paginate();
            return view('bugalter.oyjamiyuk',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index25($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->first();
        if($dat){
        $data = $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                          
                            ->paginate();
            return view('bugalter.oyoylikmasala',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }   
}
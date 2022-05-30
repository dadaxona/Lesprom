<?php

namespace App\Providers;

use App\Models\Brend;
use App\Models\Kunlikch;
use App\Providers\StopService10;
use Carbon\Carbon;

class StopService9 extends StopService10
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
    
    public function index9($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->kun->find($request->kun_id);
        return view('bugalter.kunlikstatistika',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function index11($request)
    {
         
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jamik->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->id)
                            ->first();
        if($dat){
            $data = $this->jamik->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->paginate(50);
            return view('bugalter.kunliksta',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy,'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
   
    }

    public function index12($request)
    {
       
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jamichiqishtavar->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->id)
                            ->first();                            
        if($dat){
            $data = $this->jamichiqishtavar->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->paginate(50);
            return view('bugalter.kunlikishlab',[ 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
    }
    public function index13($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jamiyuridik->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->id)
                                    ->first();                                    
        if($dat){
        $data = $this->jamiyuridik->where('yil_id', $request->yil_id)
                    ->where('oy_id', $request->oy_id)
                    ->where('kun_id', $request->id)
                    ->paginate(50);
            return view('bugalter.jamiyuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
    }

    public function index14($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jismoniyjami->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->first();
        if($dat){
        $data = $this->jismoniyjami->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->paginate(50);
            return view('bugalter.jismoniyjami',[ 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy,'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
    }

    public function index15($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = Kunlikch::where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->first();
        if($dat){
        $data = Kunlikch::where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->paginate(50);
            return view('bugalter.sarftavar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
        
    }

    public function index16($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jamiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->id)
                            ->first();
        if($dat){
        $data = $this->jamiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->id)
                            ->paginate(50);
            return view('bugalter.jamiyuk',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
    }

    public function index17($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->oylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->first();
        if($dat){
        $data = $this->oylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                          
                            ->paginate(50);
            return view('bugalter.oylikmasala',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot topilmadi');
        }
    }   

    public function loginbugalter()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        return view('bugalter.loginoyna', ['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }
 
    
}
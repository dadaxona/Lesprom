<?php

namespace App\Providers;

use App\Models\Bank;
use App\Models\Rosxod;
use App\Providers\StopService9;
use Carbon\Carbon;

class StopService8 extends StopService9
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
    protected $karzinayuk;
    protected $oylikmasala;
    protected $umumiyoylikmasala;

    public function tiklash()
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->karzinayuk->paginate(50);
        return view('bugalter.karzina',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'data'=>$data]);
    }

    public function index8($request)
    {        
       
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = Bank::orderBy('id','DESC')->paginate();
        $bank = Rosxod::where('id', 1)->first();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        return view('bugalter.bank',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'bank'=>$bank, 'data'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun]);
    }

    public function dele8($id)
    {
         return $data = Rosxod::where('id', 1)->first();
        // if($request->holat == "Kirim"){
        //     Rosxod::where('id', 1)->update([
        //         'bank'=>$data->bank - $request->summa,
        //         'jami'=>$data->jami - $request->summa
        //     ]);
        //     Bank::find($id)->delete();
        //         return back()->with('success', 'Muvofaqiyatli o`chirildi');
        // }elseif ($request->holat == "Chiqim") {
        //     Rosxod::where('id', 1)->update([
        //         'bank'=>$data->bank + $request->summa,
        //         'jami'=>$data->jami + $request->summa
        //     ]);
        //     Bank::find($id)->delete();
        //         return back()->with('success', 'Muvofaqiyatli o`chirildi');
        // }  
    }

    public function store8($request)
    {
        $data = Rosxod::where('id', 1)->first();
        if($request->holat == "Kirim"){
            Rosxod::where('id', 1)->update([
                'bank'=>$data->bank + $request->summa,
                'jami'=>$data->jami + $request->summa
            ]);
            Bank::create($request->all());
            return back()->with('success', 'Muvofaqiyatli bajarildi');
        }elseif ($request->holat == "Chiqim") {
            Rosxod::where('id', 1)->update([
                'bank'=>$data->bank - $request->summa,
                'jami'=>$data->jami - $request->summa
            ]);
            Bank::create($request->all());
            return back()->with('success', 'Muvofaqiyatli bajarildi');
        }else{
            return back()->with('danger', 'Malumotni to`liq jon`ating');
        }

    }

    public function show8($id)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = $this->ishchimehnat->find($id);      
        $ishchi = $this->ishchi->all();
        $tavar = $this->opshiumumiychiqimtavar->all();
        return view('bugalter.ishchimedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$items, 'ishchi'=>$ishchi, 'tavarturi'=>$tavar]);
    }

    public function edit8($id)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $data = $this->yuk->find($id);
       $ishchi = $this->ishchi->all();
       $tavar = $this->opshiumumiychiqimtavar->all();
       return view('bugalter.yukedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data, 'ishchi'=>$ishchi, 'tavar'=>$tavar]);

    }

    public function delete8($request, $id)
    {
        $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->kun_id)
                            ->first();                            
        $this->jamiyuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'jamisumma' => $a->jamisumma - $request->jamisumma
                        ]);
        $oyish = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)                         
                                    ->where('ishchi_id', $request->ishchi_id)
                                    ->where('tavarturi_id', $request->tavarturi_id)
                                    ->first(); 
        $javo = $oyish->hajm - $request->hajm;
        $javob2 = $javo * $oyish->summa;
        $this->oyishchiyuk->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                     
                            ->where('ishchi_id', $request->ishchi_id)
                            ->where('tavarturi_id', $request->tavarturi_id)
                            ->update([           
                                'hajm'=>$javo,
                                'jamisumma'=>$javob2
                            ]);
        $umumiyyuk = $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                         
                            ->where('ishchi_id', $request->ishchi_id)                           
                            ->first(); 
        $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                    ->where('oy_id', $request->oy_id)                     
                    ->where('ishchi_id', $request->ishchi_id)              
                    ->update([           
                        'yuk'=>$umumiyyuk->yuk - $request->jamisumma,
                        'jamisumma'=>$umumiyyuk->jamisumma - $request->jamisumma
                    ]);
        return $this->creat($request, $id);
    }

    public function creat($request, $id)
    {
        $this->karzinayuk->create($request->all());
        $this->yuk->find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }

    public function tiklash2($request, $id)
    {
        $this->yuk->create($request->all());
        $this->oyishchiyuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)                     
                        ->where('ishchi_id', $request->ishchi_id)
                        ->where('tavarturi_id', $request->tavarturi_id)
                        ->update([           
                            'data'=>$request->data,
                            'hajm'=>$request->hajm,
                            'summa'=>$request->summa,
                            'jamisumma'=>$request->jamisumma,
                        ]);
        $this->karzinayuk->find($id)->delete($id);
        return back()->with('success', 'Malumotlar muvofaqiyatli tiklandi');
    }

    public function tozalasha($request)
    {
        if($request){
            $this->karzinayuk->where('id', '>', 0)->delete();
            return back()->with('success', 'Tozalash Muofaqiyatli Amalga Oshirildi');
        }
    }
}
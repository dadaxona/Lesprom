<?php

namespace App\Providers;

use App\Models\Clensci;
use App\Models\Kunlik;
use App\Models\Kunlikch;
use App\Models\Oylikxarajat;
use App\Models\Rosxod;
use App\Models\Yillikxarajat;
use App\Providers\StopService8;
use Carbon\Carbon;

class StopService7 extends StopService8
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
    protected $oylikmasala;
    protected $umumiyoylikmasala;

    public function index7($request)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = $this->sarftavar->orderBy('id','DESC')->paginate();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        $kunlik = Kunlikch::paginate();
        return view('bugalter.sariftavar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'kunlik'=>$kunlik]);
    }

    public function create7($request)
    {
        $javob = $request->elektor+$request->gaz+$request->suv+$request->pitaniya+$request->avto+$request->bux+$request->korinmi+$request->tutilmagan;
        $a = Kunlik::where('yil_id', $request->yil_id)->where('oy_id', $request->oy_id)->where('kun_id', $request->kun_id)->first();
        if($a){
            Kunlik::where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->where('kun_id', $request->kun_id)
                ->update([                   
                    'elektor'=>$a->elektor + $request->elektor,
                    'gaz'=>$a->gaz + $request->gaz,
                    'suv'=>$a->suv + $request->suv,
                    'pitaniya'=>$a->pitaniya + $request->pitaniya,
                    'avto'=>$a->avto + $request->avto,
                    'bux'=>$a->bux + $request->bux,
                    'korinmi'=>$a->korinmi + $request->korinmi,
                    'tutilmagan'=>$a->tutilmagan + $request->tutilmagan,
                    'data'=>$request->data,
                    'jamisumma'=>$a->jamisumma + $javob,
                ]);
        }else{
            Kunlik::create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'kun_id'=>$request->kun_id,
                'elektor'=>$request->elektor,
                'gaz'=>$request->gaz,
                'suv'=>$request->suv,
                'pitaniya'=>$request->pitaniya,
                'avto'=>$request->avto,
                'bux'=>$request->bux,
                'korinmi'=>$request->korinmi,
                'tutilmagan'=>$request->tutilmagan,
                'data'=>$request->data,
                'jamisumma'=>$javob,
            ]);
        }
        return $this->createb8($request, $javob);        
    }

    public function createb8($request, $javob)
    {
        $a = Oylikxarajat::where('yil_id', $request->yil_id)->where('oy_id', $request->oy_id)->first();
        if($a){
            Oylikxarajat::where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->update([                   
                    'elektor'=>$a->elektor + $request->elektor,
                    'gaz'=>$a->gaz + $request->gaz,
                    'suv'=>$a->suv + $request->suv,
                    'pitaniya'=>$a->pitaniya + $request->pitaniya,
                    'avto'=>$a->avto + $request->avto,
                    'bux'=>$a->bux + $request->bux,
                    'korinmi'=>$a->korinmi + $request->korinmi,
                    'tutilmagan'=>$a->tutilmagan + $request->tutilmagan,
                    'data'=>$request->data,
                    'jamisumma'=>$a->jamisumma + $javob,
                ]);
        }else{
            Oylikxarajat::create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'elektor'=>$request->elektor,
                'gaz'=>$request->gaz,
                'suv'=>$request->suv,
                'pitaniya'=>$request->pitaniya,
                'avto'=>$request->avto,
                'bux'=>$request->bux,
                'korinmi'=>$request->korinmi,
                'tutilmagan'=>$request->tutilmagan,
                'data'=>$request->data,
                'jamisumma'=>$javob,
            ]);
        }
        return $this->createb9($request, $javob);        
    }

    public function createb9($request, $javob)
    {
        $a = Yillikxarajat::where('yil_id', $request->yil_id)->first();
        if($a){
            Yillikxarajat::where('yil_id', $request->yil_id)
                ->update([                   
                    'elektor'=>$a->elektor + $request->elektor,
                    'gaz'=>$a->gaz + $request->gaz,
                    'suv'=>$a->suv + $request->suv,
                    'pitaniya'=>$a->pitaniya + $request->pitaniya,
                    'avto'=>$a->avto + $request->avto,
                    'bux'=>$a->bux + $request->bux,
                    'korinmi'=>$a->korinmi + $request->korinmi,
                    'tutilmagan'=>$a->tutilmagan + $request->tutilmagan,
                    'data'=>$request->data,
                    'jamisumma'=>$a->jamisumma + $javob,
                ]);
              
        }else{
            Yillikxarajat::create([
                'yil_id'=>$request->yil_id,
                'elektor'=>$request->elektor,
                'gaz'=>$request->gaz,
                'suv'=>$request->suv,
                'pitaniya'=>$request->pitaniya,
                'avto'=>$request->avto,
                'bux'=>$request->bux,
                'korinmi'=>$request->korinmi,
                'tutilmagan'=>$request->tutilmagan,
                'data'=>$request->data,
                'jamisumma'=>$javob,
            ]);
            
        }
        return $this->createb10($request, $javob);
    }
    public function createb10($request, $javob)
    {
        $a = Kunlikch::where('yil_id', $request->yil_id)->where('oy_id', $request->oy_id)->where('kun_id', $request->kun_id)->first();
        if($a){
            $qwerty = $a->jamisumma + $javob;    
            Kunlikch::create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'kun_id'=>$request->kun_id,
                'elektor'=>$request->elektor,
                'gaz'=>$request->gaz,
                'suv'=>$request->suv,
                'pitaniya'=>$request->pitaniya,
                'avto'=>$request->avto,
                'bux'=>$request->bux,
                'korinmi'=>$request->korinmi,
                'tutilmagan'=>$request->tutilmagan,
                'sabab'=>$request->sabab,
                'data'=>$request->data,
                'jamisumma'=>$qwerty,
            ]);
            Kunlikch::where('yil_id', $request->yil_id)
            ->where('oy_id', $request->oy_id)
            ->where('kun_id', $request->kun_id)
            ->update([
                'jamisumma'=>$qwerty,
            ]);
        }else{
            Kunlikch::create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'kun_id'=>$request->kun_id,
                'elektor'=>$request->elektor,
                'gaz'=>$request->gaz,
                'suv'=>$request->suv,
                'pitaniya'=>$request->pitaniya,
                'avto'=>$request->avto,
                'bux'=>$request->bux,
                'korinmi'=>$request->korinmi,
                'tutilmagan'=>$request->tutilmagan,
                'sabab'=>$request->sabab,
                'data'=>$request->data,
                'jamisumma'=>$javob,
            ]);
        }
        return $this->createb11($request);
    }
    public function createb11($request)
    {
        $ras = Rosxod::where('id', 1)->first();
        $sssss = $request->elektor + $request->gaz;
        $aaaa = $request->suv + $request->avto;
        $bbb = $sssss + $aaaa;
        $aaa = $ras->bank - $bbb;


        $dddd = $request->pitaniya + $request->korinmi;
        $cccc = $request->tutilmagan + $request->bux;
        $ssss2 = $dddd + $cccc;
        $aaa1 = $ras->naqt - $ssss2;

  
        Rosxod::where('id', 1)->update([
            'naqt'=>$aaa1,
            'bank'=>$aaa,
        ]);
        $ras2 = Rosxod::where('id', 1)->first();
        $aza = $ras2->naqt + $ras2->bank;
        Rosxod::where('id', 1)->update([
            'jami'=>$aza
        ]);
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }
    
    public function store7($request)
    {
        $jamisumma = $request->hajm * $request->summa;
        $d = $this->oylikmasala->where('yil_id', $request->yil_id)
                                    ->where( 'oy_id', $request->oy_id)                              
                                    ->where('ishchi_id', $request->ishchi_id)
                                    ->where('tavarturi_id', $request->tavarturi_id)
                                    ->first();
        if($d){
            $this->oylikmasala->where('yil_id', $request->yil_id)
                            ->where( 'oy_id', $request->oy_id)        
                            ->where('ishchi_id', $request->ishchi_id)
                            ->where('tavarturi_id', $request->tavarturi_id)
                            ->update([                     
                                'yuk'=>$d->yuk + $jamisumma,
                                'jamisumma'=>$d->jamisumma + $jamisumma
                                ]);
            return $this->storer7($request);
        }else{
            $this->oylikmasala->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,                    
                'ishchi_id'=>$request->ishchi_id,
                'tavarturi_id'=>$request->tavarturi_id,   
                'yuk'=>$jamisumma,
                'jamisumma'=>$jamisumma
            ]);
            return $this->storer7($request);
        }        
    }

    public function storer7($request)
    {
        $jamisumma = $request->hajm * $request->summa;
        $oyishhak = $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                         
                                ->where('ishchi_id', $request->ishchi_id)                               
                                ->first();
        if($oyishhak){
            $this->umumiyoylikmasala->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                     
                            ->where('ishchi_id', $request->ishchi_id)                           
                            ->update([
                                'yuk'=>$oyishhak->yuk + $jamisumma,
                                'jamisumma'=>$oyishhak->jamisumma + $jamisumma   
                            ]); 
            $oyish = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)                         
                                    ->where('ishchi_id', $request->ishchi_id)
                                    ->where('tavarturi_id', $request->tavarturi_id)
                                    ->first();
            if($oyish){
                $javo = $oyish->hajm + $request->hajm;
                $javob2 = $javo * $request->summa;
                $this->oyishchiyuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                     
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->update([
                                    'data'=>$request->data,
                                    'hajm'=>$javo,
                                    'summa'=>$request->summa,
                                    'jamisumma'=>$javob2
                                ]);  
                $yuk = $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->first();  
                if($yuk){
                $javo = $yuk->hajm + $request->hajm;
                $javob2 = $javo * $request->summa;
                $this->yuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->where('ishchi_id', $request->ishchi_id)
                        ->where('tavarturi_id', $request->tavarturi_id)
                        ->update([
                            'data'=>$request->data,
                            'hajm'=>$javo,
                            'summa'=>$request->summa,
                            'jamisumma'=>$javob2
                        ]);  
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->first();                           
                if($a){
                $j = $a->jamisumma + $jamisumma;
                $this->jamiyuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->update([
                                    'jamisumma'=>$j
                                ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                $this->jamiyuk->create([
                                'yil_id'=>$request->yil_id,
                                'oy_id'=>$request->oy_id,
                                'kun_id'=>$request->kun_id,
                                'jamisumma'=>$jamisumma,
                            ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }

                }else{

                $this->yuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'ishchi_id'=>$request->ishchi_id,
                    'tavarturi_id'=>$request->tavarturi_id,
                    'data'=>$request->data,
                    'hajm'=>$request->hajm,
                    'summa'=>$request->summa,
                    'jamisumma'=>$jamisumma
                ]);
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->first();                           
                if($a){
                $j = $a->jamisumma + $jamisumma;
                $this->jamiyuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'jamisumma'=>$j
                        ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                $this->jamiyuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$jamisumma,
                ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }
                }
                }else{
                $this->oyishchiyuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'ishchi_id'=>$request->ishchi_id,
                    'tavarturi_id'=>$request->tavarturi_id,
                    'data'=>$request->data,
                    'hajm'=>$request->hajm,
                    'summa'=>$request->summa,
                    'jamisumma'=>$jamisumma
                ]);
                $yuk = $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->first();  
                if($yuk){
                $javo = $yuk->hajm + $request->hajm;
                $javob2 = $javo * $request->summa;
                $this->yuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->where('ishchi_id', $request->ishchi_id)
                        ->where('tavarturi_id', $request->tavarturi_id)
                        ->update([
                            'data'=>$request->data,
                            'hajm'=>$javo,
                            'summa'=>$request->summa,
                            'jamisumma'=>$javob2
                        ]);  
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->first();                           
                if($a){
                $j = $a->jamisumma + $jamisumma;
                $this->jamiyuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'jamisumma'=>$j
                        ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                $this->jamiyuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$jamisumma,
                ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }

                }else{

                $this->yuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'ishchi_id'=>$request->ishchi_id,
                    'tavarturi_id'=>$request->tavarturi_id,
                    'data'=>$request->data,
                    'hajm'=>$request->hajm,
                    'summa'=>$request->summa,
                    'jamisumma'=>$jamisumma
                ]);
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->first();                           
                if($a){
                $j = $a->jamisumma + $jamisumma;
                $this->jamiyuk->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'jamisumma'=>$j
                        ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                $this->jamiyuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$jamisumma,
                ]);
                return back()->with('success', 'Muvofaqiyatli yaratildi');
                }
             }
          }
                
        }else{
            $this->umumiyoylikmasala->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'ishchi_id'=>$request->ishchi_id,
                'yuk'=>$jamisumma,
                'jamisumma'=>$jamisumma
            ]);
            $oyish = $this->oyishchiyuk->where('yil_id', $request->yil_id)
                                        ->where('oy_id', $request->oy_id)                         
                                        ->where('ishchi_id', $request->ishchi_id)
                                        ->where('tavarturi_id', $request->tavarturi_id)
                                        ->first();
            if($oyish){
            $javo = $oyish->hajm + $request->hajm;
            $javob2 = $javo * $request->summa;
            $this->oyishchiyuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)                     
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->update([
                                    'data'=>$request->data,
                                    'hajm'=>$javo,
                                    'summa'=>$request->summa,
                                    'jamisumma'=>$javob2
                                ]);  
            $yuk = $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->first();  
            if($yuk){
                $javo = $yuk->hajm + $request->hajm;
                $javob2 = $javo * $request->summa;
                $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->update([
                                    'data'=>$request->data,
                                    'hajm'=>$javo,
                                    'summa'=>$request->summa,
                                    'jamisumma'=>$javob2
                                ]);  
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->first();                           
                if($a){
                    $j = $a->jamisumma + $jamisumma;
                    $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->update([
                                        'jamisumma'=>$j
                                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                    $this->jamiyuk->create([
                        'yil_id'=>$request->yil_id,
                        'oy_id'=>$request->oy_id,
                        'kun_id'=>$request->kun_id,
                        'jamisumma'=>$jamisumma,
                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }
      
            }else{
      
                $this->yuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'ishchi_id'=>$request->ishchi_id,
                    'tavarturi_id'=>$request->tavarturi_id,
                    'data'=>$request->data,
                    'hajm'=>$request->hajm,
                    'summa'=>$request->summa,
                    'jamisumma'=>$jamisumma
                ]);
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->first();                           
                if($a){
                    $j = $a->jamisumma + $jamisumma;
                    $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->update([
                                        'jamisumma'=>$j
                                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                    $this->jamiyuk->create([
                        'yil_id'=>$request->yil_id,
                        'oy_id'=>$request->oy_id,
                        'kun_id'=>$request->kun_id,
                        'jamisumma'=>$jamisumma,
                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }
            }
        }else{
            $this->oyishchiyuk->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'ishchi_id'=>$request->ishchi_id,
                'tavarturi_id'=>$request->tavarturi_id,
                'data'=>$request->data,
                'hajm'=>$request->hajm,
                'summa'=>$request->summa,
                'jamisumma'=>$jamisumma
            ]);
            $yuk = $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->first();  
            if($yuk){
                $javo = $yuk->hajm + $request->hajm;
                $javob2 = $javo * $request->summa;
                $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('ishchi_id', $request->ishchi_id)
                                ->where('tavarturi_id', $request->tavarturi_id)
                                ->update([
                                    'data'=>$request->data,
                                    'hajm'=>$javo,
                                    'summa'=>$request->summa,
                                    'jamisumma'=>$javob2
                                ]);  
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->first();                           
                if($a){
                    $j = $a->jamisumma + $jamisumma;
                    $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->update([
                                        'jamisumma'=>$j
                                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                    $this->jamiyuk->create([
                        'yil_id'=>$request->yil_id,
                        'oy_id'=>$request->oy_id,
                        'kun_id'=>$request->kun_id,
                        'jamisumma'=>$jamisumma,
                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }
      
            }else{
      
                $this->yuk->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'ishchi_id'=>$request->ishchi_id,
                    'tavarturi_id'=>$request->tavarturi_id,
                    'data'=>$request->data,
                    'hajm'=>$request->hajm,
                    'summa'=>$request->summa,
                    'jamisumma'=>$jamisumma
                ]);
                $a = $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->first();                           
                if($a){
                    $j = $a->jamisumma + $jamisumma;
                    $this->jamiyuk->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->update([
                                        'jamisumma'=>$j
                                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }else{
                    $this->jamiyuk->create([
                        'yil_id'=>$request->yil_id,
                        'oy_id'=>$request->oy_id,
                        'kun_id'=>$request->kun_id,
                        'jamisumma'=>$jamisumma,
                    ]);
                    return back()->with('success', 'Muvofaqiyatli yaratildi');
                }
             }
          }
       }
    }

    public function show7($request)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = $this->yuk->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->id)
                                ->paginate(10);
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        $ishchi = $this->ishchi->all();
        $tavar = $this->opshiumumiychiqimtavar->all();
        return view('bugalter.yuk',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'ishchi'=>$ishchi, 'tavar'=>$tavar]);
    }

    public function yuridikedit($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = Clensci::find($id);
        return view('bugalter.yuridikedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function update7($request, $id)
    {
        Clensci::find($id)->update($request->all());
        return redirect()->route('index5', [$request])->with('success', 'Muvofaqiyatli yangilandi');   
    }

    public function edit7($id)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->sarftavar->find($id);
        $tavar = $this->opshiumumiykitimtavar->all();
        return view('bugalter.sarftavaredit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data, 'tavar'=>$tavar]);
    }

    public function yuridikdelet($id)
    {
        Clensci::find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }

    public function delete7($request, $id)
    {
        $a = Kunlik::where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->first();

        Kunlik::where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'elektor'=>$a->elektor - $request->elektor,
                            'gaz'=>$a->gaz - $request->gaz,
                            'suv'=>$a->suv - $request->suv,
                            'pitaniya'=>$a->pitaniya - $request->pitaniya,
                            'avto'=>$a->avto - $request->avto,
                            'bux'=>$a->bux - $request->bux,
                            'korinmi'=>$a->korinmi - $request->korinmi,
                            'tutilmagan'=>$a->tutilmagan - $request->tutilmagan,
                            'jamisumma' => $a->jamisumma - $request->jamisumma
                        ]);

        $qwe2 = Oylikxarajat::where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->first();
        Oylikxarajat::where('yil_id', $request->yil_id)
                    ->where('oy_id', $request->oy_id)
                    ->update([
                        'elektor'=>$qwe2->elektor - $request->elektor,
                        'gaz'=>$qwe2->gaz - $request->gaz,
                        'suv'=>$qwe2->suv - $request->suv,
                        'pitaniya'=>$qwe2->pitaniya - $request->pitaniya,
                        'avto'=>$qwe2->avto - $request->avto,
                        'bux'=>$qwe2->bux - $request->bux,
                        'korinmi'=>$qwe2->korinmi - $request->korinmi,
                        'tutilmagan'=>$qwe2->tutilmagan - $request->tutilmagan,
                        'jamisumma' => $qwe2->jamisumma - $request->jamisumma
                    ]);

        $qwe3 = Yillikxarajat::where('yil_id', $request->yil_id)->first();
        Yillikxarajat::where('yil_id', $request->yil_id)
                ->update([
                    'elektor'=>$qwe3->elektor - $request->elektor,
                    'gaz'=>$qwe3->gaz - $request->gaz,
                    'suv'=>$qwe3->suv - $request->suv,
                    'pitaniya'=>$qwe3->pitaniya - $request->pitaniya,
                    'avto'=>$qwe3->avto - $request->avto,
                    'bux'=>$qwe3->bux - $request->bux,
                    'korinmi'=>$qwe3->korinmi - $request->korinmi,
                    'tutilmagan'=>$qwe3->tutilmagan - $request->tutilmagan,
                    'jamisumma' => $qwe3->jamisumma - $request->jamisumma
                ]);
        $ras = Rosxod::where('id', 1)->first();
        $sssss = $request->elektor + $request->gaz;
        $aaaa = $request->suv + $request->avto;
        $bbb = $sssss + $aaaa;
        $aaa = $ras->bank + $bbb;


        $dddd = $request->pitaniya + $request->korinmi;
        $cccc = $request->tutilmagan + $request->bux;
        $ssss2 = $dddd + $cccc;
        $aaa1 = $ras->naqt + $ssss2;

    
        Rosxod::where('id', 1)->update([
            'naqt'=>$aaa1,
            'bank'=>$aaa,
        ]);
        $ras2 = Rosxod::where('id', 1)->first();
        $aza = $ras2->naqt + $ras2->bank;
        Rosxod::where('id', 1)->update([
            'jami'=>$aza
        ]);
        Kunlikch::find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }
}
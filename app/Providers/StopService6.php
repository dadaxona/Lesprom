<?php

namespace App\Providers;

use App\Models\Jismoniyclenci;
use App\Models\Kompaniya;
use App\Models\Rosxod;
use App\Providers\StopService7;
use Carbon\Carbon;

class StopService6 extends StopService7
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
    protected $umumiyoylikmasala;
    protected $sotilishyil;
    protected $sotilishopshi;
    protected $sotilishoy;
    protected $sotilishkun;
 
    public function malumotlar2($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
       $data1 = $dt->toDateString();
       $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $items = $this->chiqim->where('jismoniyclenci_id', $request->id)->orderBy('id','DESC')->paginate();
       $yil = $this->yil->where('id', $request->yil_id)->first();
       $oy = $this->oy->where('id', $request->oy_id)->first();
       $kun = $this->kun->where('id', $request->kun_id)->first();
       $jismoniyclenci = Jismoniyclenci::where('id', $request->id)->first();
       $tavar = $this->opshiumumiykitimtavar->all();
       return view('bugalter.jismoniy',['tavarturi'=>$tavar, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items, 'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'jismoniyclenci'=>$jismoniyclenci]);
    }

    public function tolov2($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
       $data1 = $dt->toDateString();
       $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $items = $this->chiqim->where('jismoniyclenci_id', $request->id)->first();
       $yil = $this->yil->where('id', $request->yil_id)->first();
       $oy = $this->oy->where('id', $request->oy_id)->first();
       $kun = $this->kun->where('id', $request->kun_id)->first();
       $jismoniyclenci = Jismoniyclenci::where('id', $request->id)->first();
       return view('bugalter.tolovjis',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items, 'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'jismoniyclenci'=>$jismoniyclenci]);
    }

    public function index6($request)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = Jismoniyclenci::orderBy('id','DESC')->paginate();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        return view('bugalter.jismoniy2',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun]);
    }
    
    public function createdm6($request)
    {
        Jismoniyclenci::create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function jismoniyedit($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = Jismoniyclenci::find($id);
        return view('bugalter.jismoniyedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function jismoniyedit2($request, $id)
    {
        Jismoniyclenci::find($id)->update($request->all());
        return redirect()->route('index6', [$request])->with('success', 'Muvofaqiyatli yangilandi');   
    }

    public function create570($request)
    {
        $tav = $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)->first();
        if($tav->hajm < $request->kub){
            return back()->with('danger', 'Ombordagi tavar hajmi buyurtma hajmidan kam. Buyurtma amalga oshirilmadi');
        }else{
            $javi = $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)->first();
            $foo1 = $javi->hajm - $request->kub;
            $ewq1 = $javi->summa / $javi->hajm;
            $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)
                                        ->update([
                                            'hajm' => $foo1,
                                            'summa'=> $foo1 * $ewq1
                                        ]);
            return $this->create56f($request);
        }            
    }

    public function create56f($request)
    {
        $requ = $request->summa + $request->summa2 + $request->summa3;
        $sotuv = $this->sotilishkun->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
        if($sotuv){
        $this->sotilishkun->where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->where('kun_id', $request->kun_id)
                ->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm + $request->kub,
                    'summa'=>$sotuv->summa + $request->summa + $request->summa2 + $request->summa3
                ]);
                return $this->create57d($request, $requ);
        }else{
            $this->sotilishkun->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'kun_id'=>$request->kun_id,
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ
            ]);
            return $this->create57d($request, $requ);
        }
    }

    
    public function create57d($request, $requ)
    {
        $sotuv = $this->sotilishoy->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)            
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
        if($sotuv){
        $this->sotilishoy->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('tavar_id', $request->tavarturi_id)
                        ->update([
                        'hajm'=>$sotuv->hajm + $request->kub,
                        'summa'=>$sotuv->summa + $request->summa + $request->summa2 + $request->summa3
                        ]);
                return $this->create58s($request, $requ);
        }else{
            $this->sotilishoy->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,             
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ             
            ]);
            return $this->create58s($request, $requ);
        }
    }

    public function create58s($request, $requ)
    {
        $sotuv = $this->sotilishyil->where('yil_id', $request->yil_id)            
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
        if($sotuv){
        $this->sotilishyil->where('yil_id', $request->yil_id)
                        ->where('tavar_id', $request->tavar_id)
                        ->update([
                            'hajm'=>$sotuv->hajm + $request->kub,
                            'summa'=>$sotuv->summa + $request->summa + $request->summa2 + $request->summa3
                        ]);
                return $this->create59a($request, $requ);
        }else{
            $this->sotilishyil->create([
                'yil_id'=>$request->yil_id,
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ
            ]);
            return $this->create59a($request, $requ);
        }
    }

    public function create59a($request, $requ)
    {
        $sotuv = $this->sotilishopshi->where('tavar_id', $request->tavar_id)->first();
        if($sotuv){
        $this->sotilishopshi->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm + $request->kub,
                    'summa'=>$sotuv->summa + $request->summa + $request->summa2 + $request->summa3
                ]);
                return $this->createa1($request, $requ);
        }else{
            $this->sotilishopshi->create([
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ
            ]);
            return $this->createa1($request, $requ);
        }
    }

    public function createa1($request, $requ)
    {
        $sum = $request->summa + $request->summa2 + $request->summa3 + $request->karzsumma;
        $a = $this->jismoniyjami->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->kun_id)
                            ->first(); 
        if($a){
        $j = $a->jamisumma + $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma + $request->karzsumma;
        $j3 = $j + $j2;        
        $this->jismoniyjami->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'jamisumma'=>$j,
                            'karzsumma'=>$j2,
                            'umumiy'=>$j3,
                        ]);
        }else{
            if($request->karzsumma){
                $this->jismoniyjami->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$requ,
                    'karzsumma'=>$request->karzsumma,
                    'umumiy'=>$sum
                ]);
            }else{
                $this->jismoniyjami->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$requ,
                    'karzsumma'=> 0,
                    'umumiy'=>$sum
                ]);
            }
        }
        return $this->createa2($request, $sum, $requ);
    }
      
    public function createa2($request, $sum, $requ)
    {
        $sum = $request->summa + $request->karzsumma;
        $a = $this->jismoniyjami->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->kun_id)
                            ->first(); 
        if($a){
        $j = $a->jamisumma + $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma + $request->karzsumma;
        $j3 = $j + $j2;        
        $this->jismoniyjami->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                            'jamisumma'=>$j,
                            'karzsumma'=>$j2,
                            'umumiy'=>$j3,
                        ]);
        }else{
            if($request->karzsumma){
                $this->jismoniyjami->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$requ,
                    'karzsumma'=> $request->karzsumma,
                    'umumiy'=>$sum
                ]);
            }else{
                $this->jismoniyjami->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,
                    'kun_id'=>$request->kun_id,
                    'jamisumma'=>$requ,
                    'karzsumma'=> 0,
                    'umumiy'=>$sum
                ]);
            }
        }
        return $this->createa3($request, $sum, $requ);        
    }

    public function createa3($request, $sum, $requ)
    {
        $a = $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->first(); 
        if($a){
        $j = $a->jamisumma + $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma + $request->karzsumma;
        $j3 = $j + $j2;        
        $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->update([
                            'jamisumma'=>$j,
                            'karzsumma'=>$j2,
                            'umumiy'=>$j3,
                        ]);
        }else{
            if($request->karzsumma){
                $this->jismoniyoyqarz->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,          
                    'jamisumma'=>$requ,
                    'karzsumma'=>$request->karzsumma,
                    'umumiy'=>$sum
                ]);
            }else{
                $this->jismoniyoyqarz->create([
                    'yil_id'=>$request->yil_id,
                    'oy_id'=>$request->oy_id,          
                    'jamisumma'=>$requ,
                    'karzsumma'=> 0,
                    'umumiy'=>$sum
                ]);
            }
        }
        return $this->createa4($request, $sum, $requ);        
    }
    
    public function createa4($request, $sum, $requ)
    {
        $a = $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->first(); 
        if($a){
        $j = $a->jamisumma + $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma + $request->karzsumma;
        $j3 = $j + $j2;        
        $this->jismoniyyilqarz->where('yil_id', $request->yil_id)
                        ->update([
                            'jamisumma'=>$j,
                            'karzsumma'=>$j2,
                            'umumiy'=>$j3,
                        ]);
        }else{
            if($request->karzsumma){
                $this->jismoniyyilqarz->create([
                    'yil_id'=>$request->yil_id,
                    'jamisumma'=>$requ,
                    'karzsumma'=>$request->karzsumma,
                    'umumiy'=>$sum
                ]);
            }else{
                $this->jismoniyyilqarz->create([
                    'yil_id'=>$request->yil_id,
                    'jamisumma'=>$requ,
                    'karzsumma'=> 0,
                    'umumiy'=>$sum
                ]);
            } 
        }
        return $this->createa5($request, $sum, $requ);
    }

    public function createa5($request, $sum, $requ)
    {
        $a = $this->jismoniyopshiqarz->where('id', 1)->first(); 
        if($a){
        $j = $a->jamisumma + $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma + $request->karzsumma;
        $j3 = $j + $j2;        
        $this->jismoniyopshiqarz->where('id', 1)->update([
                            'jamisumma'=>$j,
                            'karzsumma'=>$j2,
                            'umumiy'=>$j3,
                        ]);        
        }else{
            if($request->karzsumma){
                $this->jismoniyopshiqarz->create([
                    'jamisumma'=>$requ,
                    'karzsumma'=>$request->karzsumma,
                    'umumiy'=>$sum
                ]);

            }else{
                $this->jismoniyopshiqarz->create([
                    'jamisumma'=>$requ,
                    'karzsumma'=> 0,
                    'umumiy'=>$sum
                ]);
            }  
        }        
        return $this->createa6($request);
    }

    public function createa6($request)
    {
        $this->chiqim->create($request->all());
        $jismoniyclenci = Rosxod::where('id', 1)->first();
        $javob = $jismoniyclenci->naqt + $request->summa;
        $qazx = $request->summa2 + $request->summa3;
        $javob2 = $jismoniyclenci->bank + $qazx;
        $qazx2 = $qazx + $request->summa;
        $ban2 = $jismoniyclenci->jami + $qazx2;
        Rosxod::where('id', 1)->update([
            'naqt'=>$javob,
            'bank'=>$javob2,
            'jami'=>$ban2
        ]);
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }    

    public function show6($request)
    {
        Kompaniya::create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function edit6($id)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->chiqim->find($id);
        $tavar = $this->jamichiqishtavar->all();
        return view('bugalter.jismoniyedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data, 'tavar'=>$tavar]);
    }

    public function update6($request, $id){}

    public function jismoniydalet($id)
    {
        Jismoniyclenci::find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }

    public function delete6($request, $id)
    {
        $tav = $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)->first();
        $javvvv = $tav->hajm + $request->kub;
        $javvvv2 = $tav->summa / $tav->hajm;
        $fooo = $javvvv2 * $javvvv;
        $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)
                                    ->update([
                                        'hajm'=>$javvvv,
                                        'summa'=>$fooo
                                    ]);
        return $this->delete11($request, $id);        
    }

    public function delete11($request, $id)
    {
        $sotuv = $this->sotilishkun->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
        $this->sotilishkun->where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->where('kun_id', $request->kun_id)
                ->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm - $request->kub,
                    'summa'=>$sotuv->summa - $request->summa
                ]);
        return $this->delete12($request, $id);
    }
    
    public function delete12($request, $id)
    {
        $sotuv = $this->sotilishoy->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)            
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
        
        $this->sotilishoy->where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm - $request->kub,
                    'summa'=>$sotuv->summa - $request->summa
                ]);   
   
            return $this->delete13($request,$id);
        
    }

    public function delete13($request, $id)
    {
        $sotuv = $this->sotilishyil->where('yil_id', $request->yil_id)            
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
   
        $this->sotilishyil->where('yil_id', $request->yil_id)
                ->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm - $request->kub,
                    'summa'=>$sotuv->summa - $request->summa
                ]);
            return $this->delete14($request, $id);    
    }

    public function delete14($request, $id)
    {
        $sotuv = $this->sotilishopshi->where('tavar_id', $request->tavar_id)->first();
        $this->sotilishopshi->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm - $request->kub,
                    'summa'=>$sotuv->summa - $request->summa
                ]);
            return $this->delete16($request, $id);
        
    }
    public function delete16($request, $id)
    {
        $a = $this->jismoniyjami->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->first(); 

        $j = $a->jamisumma - $request->summa;
        $j2 = $a->karzsumma - $request->karzsumma;
        $j3 = $j + $j2;
        $this->jismoniyjami->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->kun_id)
                            ->update([
                                'jamisumma'=>$j,
                                'karzsumma'=>$j2,
                                'umumiy'=>$j3,
                            ]);

        $b = $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
            ->where('oy_id', $request->oy_id)            
            ->first(); 
        $jj = $b->jamisumma - $request->summa;
        $jj2 = $b->karzsumma - $request->karzsumma;
        $jj3 = $jj + $jj2;
        $this->jismoniyoyqarz->where('yil_id', $request->yil_id)
            ->where('oy_id', $request->oy_id)                
            ->update([
                'jamisumma'=>$jj,
                'karzsumma'=>$jj2,
                'umumiy'=>$jj3,
            ]);
        $c = $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->first(); 
        $aa = $c->jamisumma - $request->summa;
        $aa2 = $c->karzsumma - $request->karzsumma;
        $aa3 = $aa + $aa2;
        $this->jismoniyyilqarz->where('yil_id', $request->yil_id)             
            ->update([
                'jamisumma'=>$aa,
                'karzsumma'=>$aa2,
                'umumiy'=>$aa3,
            ]);
            $d = $this->jismoniyopshiqarz->where('id', 1)->first(); 
            $bb = $d->jamisumma - $request->summa;
            $bb2 = $d->karzsumma - $request->karzsumma;
            $bb3 = $bb + $bb2;
            $this->jismoniyopshiqarz->where('id', 1)             
                ->update([
                    'jamisumma'=>$bb,
                    'karzsumma'=>$bb2,
                    'umumiy'=>$bb3,
                ]);
        $jismoniyclenci = Rosxod::where('id', 1)->first();    
        $javob = $jismoniyclenci->naqt - $request->summa;
        $qazx = $request->summa2 + $request->summa3;
        $javob2 = $jismoniyclenci->bank - $qazx;
        $qazx2 = $qazx + $request->summa;
        $ban2 = $jismoniyclenci->jami - $qazx2;
        Rosxod::where('id', 1)->update([
            'naqt'=>$javob,
            'bank'=>$javob2,
            'jami'=>$ban2
        ]);
        $this->chiqim->find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }

    public function delete66($id)
    {
        $this->tavar->find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }

    public function delete666($id)
    {
        Kompaniya::find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }
}
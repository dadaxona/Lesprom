<?php

namespace App\Providers;

use App\Models\Clensci;
use App\Models\Rosxod;
use Carbon\Carbon;
use Closure;

class StopService5
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
    protected $umumiyoylikmasala;
    protected $jamiyuridik; 
    protected $sotilishyil;
    protected $sotilishopshi;
    protected $sotilishoy;
    protected $sotilishkun;
    
    public function malumotlar($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
       $data1 = $dt->toDateString();
       $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $items = $this->yuridikchiqim->where('clensci_id', $request->id)->orderBy('id','DESC')->paginate();
       $yil = $this->yil->where('id', $request->yil_id)->first();
       $oy = $this->oy->where('id', $request->oy_id)->first();
       $kun = $this->kun->where('id', $request->kun_id)->first();
       $clensci = Clensci::where('id', $request->id)->first();
       $tavar = $this->opshiumumiykitimtavar->all();
       return view('bugalter.yuridik2',['tavar'=>$tavar, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items, 'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'clensci'=>$clensci]);
    }

    public function tolov($request)
    {
       $dt= Carbon::now('Asia/Tashkent');
       $data1 = $dt->toDateString();
       $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
       $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '>=', $data1)->first();
       $items = $this->yuridikchiqim->where('id', $request->id)->first();
       $yil = $this->yil->where('id', $request->yil_id)->first();
       $oy = $this->oy->where('id', $request->oy_id)->first();
       $kun = $this->kun->where('id', $request->kun_id)->first();
       $clensci = Clensci::where('id', $request->clensci_id)->first();
       return view('bugalter.tolovyu',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items, 'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'clensci'=>$clensci]);
    }

    public function index5($request)
    {        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = Clensci::orderBy('id','DESC')->paginate();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        return view('bugalter.yuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun]);
     }
    
    public function createm5($request)
    {
       Clensci::create($request->all());
       return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function create55u($request)
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
            return $this->create562($request);
        }
    }

    public function create562($request)
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
                return $this->create57($request, $requ);
        }else{
            $this->sotilishkun->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,
                'kun_id'=>$request->kun_id,
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ
            ]);
            return $this->create57($request, $requ);
        }
    }

    
    public function create57($request, $requ)
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
                return $this->create58($request, $requ);
        }else{
            $this->sotilishoy->create([
                'yil_id'=>$request->yil_id,
                'oy_id'=>$request->oy_id,             
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ             
            ]);
            return $this->create58($request, $requ);
        }
    }

    public function create58($request, $requ)
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
                return $this->create59($request, $requ);
        }else{
            $this->sotilishyil->create([
                'yil_id'=>$request->yil_id,
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ
            ]);
            return $this->create59($request, $requ);
        }
    }

    public function create59($request, $requ)
    {
        $sotuv = $this->sotilishopshi->where('tavar_id', $request->tavar_id)->first();
        if($sotuv){
        $this->sotilishopshi->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm + $request->kub,
                    'summa'=>$sotuv->summa + $request->summa + $request->summa2 + $request->summa3
                ]);
                return $this->create5($request, $requ);
        }else{
            $this->sotilishopshi->create([
                'tavar_id'=>$request->tavar_id,
                'hajm'=>$request->kub,
                'summa'=>$requ
            ]);
            return $this->create5($request, $requ);
        }
    }


    public function create5($request, $requ)
    {
        $sum = $request->summa + $request->summa2 + $request->summa3 + $request->karzsumma;
        $d = $this->yuridikopshiqarz->where('id', 1)->first();
        if($d){
            $j = $d->jamisumma + $request->summa + $request->summa2 + $request->summa3;
            $j2 = $d->karzsumma + $request->karzsumma;
            $j3 = $j + $j2;        
            $this->yuridikopshiqarz->where('id', 1)
                    ->update([
                        'jamisumma'=>$j,
                        'karzsumma'=>$j2,
                        'umumiy'=>$j3,
                    ]);
        }else{
            if($request->karzsumma){
                $this->yuridikopshiqarz->create([            
                    'jamisumma'=>$requ,
                    'karzsumma'=>$request->karzsumma,
                    'umumiy'=>$sum
                ]);  
            }else{
                $this->yuridikopshiqarz->create([            
                    'jamisumma'=>$requ,
                    'karzsumma'=> 0,
                    'umumiy'=>$sum
                ]);   

            }
        }
        return $this->create50($request, $sum, $requ);
    }

    public function create50($request, $sum, $requ)
    {
        $c = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->first();
        if($c){
            $j = $c->jamisumma + $request->summa + $request->summa2 + $request->summa3;
            $j2 = $c->karzsumma + $request->karzsumma;
            $j3 = $j + $j2;        
            $this->yuridikyilqarz->where('yil_id', $request->yil_id)                              
                    ->update([
                        'jamisumma'=>$j,
                        'karzsumma'=>$j2,
                        'umumiy'=>$j3,
                    ]);
                }else{
                    if($request->karzsumma){
                        $this->yuridikyilqarz->create([
                            'yil_id'=>$request->yil_id,               
                            'jamisumma'=>$requ,
                            'karzsumma'=>$request->karzsumma,
                            'umumiy'=>$sum
                        ]);
                    }else{
                        $this->yuridikyilqarz->create([
                            'yil_id'=>$request->yil_id,               
                            'jamisumma'=>$requ,
                            'karzsumma'=> 0,
                            'umumiy'=>$sum
                        ]);
                    }
                }
        return $this->create51($request, $sum, $requ);
    }
    
    public function create51($request, $sum, $requ)
    {
        $b = $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->first();
            if($b){
            $j = $b->jamisumma + $request->summa + $request->summa2 + $request->summa3;
            $j2 = $b->karzsumma + $request->karzsumma;
            $j3 = $j + $j2;
            $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                    ->where('oy_id', $request->oy_id)                                  
                    ->update([
                        'jamisumma'=>$j,
                        'karzsumma'=>$j2,
                        'umumiy'=>$j3,
                    ]);
                }else{

                    if ($request->karzsumma) {
                        $this->yuridikoyqarz->create([
                            'yil_id'=>$request->yil_id,
                            'oy_id'=>$request->oy_id,
                            'jamisumma'=>$requ,
                            'karzsumma'=>$request->karzsumma,
                            'umumiy'=>$sum
                        ]);
                    }else{

                        $this->yuridikoyqarz->create([
                            'yil_id'=>$request->yil_id,
                            'oy_id'=>$request->oy_id,
                            'jamisumma'=>$requ,
                            'karzsumma'=> 0,
                            'umumiy'=>$sum
                        ]);
                    }
                }

            return $this->create52($request, $sum, $requ);
    }

    public function create52($request, $sum, $requ)
    {
        $a = $this->jamiyuridik->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->first(); 
        if($a){
        $j = $a->jamisumma + $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma + $request->karzsumma;
        $j3 = $j + $j2;        
        $this->jamiyuridik->where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->where('kun_id', $request->kun_id)
                ->update([
                    'jamisumma'=>$j,
                    'karzsumma'=>$j2,
                    'umumiy'=>$j3,
                ]);
            }else{
                if($request->karzsumma){
                    $this->jamiyuridik->create([
                        'yil_id'=>$request->yil_id,
                        'oy_id'=>$request->oy_id,
                        'kun_id'=>$request->kun_id,
                        'jamisumma'=>$requ,
                        'karzsumma'=>$request->karzsumma,
                        'umumiy'=>$sum
                    ]);
                }else{
                    $this->jamiyuridik->create([
                        'yil_id'=>$request->yil_id,
                        'oy_id'=>$request->oy_id,
                        'kun_id'=>$request->kun_id,
                        'jamisumma'=>$requ,
                        'karzsumma'=> 0,
                        'umumiy'=>$sum
                    ]);
                }
            }
        return $this->create53($request, $sum, $requ);
    }
    
    public function create53($request)
    {
        $this->yuridikchiqim->create($request->all());
        $yuridikrasxod = Rosxod::where('id', 1)->first(); 
        $javob = $yuridikrasxod->naqt + $request->summa;
        $qazx = $request->summa2 + $request->summa3;
        $javob2 = $yuridikrasxod->bank + $qazx;
        $qazx2 = $qazx + $request->summa;
        $ban2 = $yuridikrasxod->jami + $qazx2;
        Rosxod::where('id', 1)->update([
            'naqt'=>$javob,
            'bank'=>$javob2,
            'jami'=>$ban2
        ]);
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }
    public function edit5($id)
    {        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->kirimtavar->find($id);
        $tavar = $this->tavar->all();
        return view('bugalter.kelgantavaredit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data, 'tavar'=>$tavar]);

    }

    public function update5($request, $id)
    {
        $this->kirimtavar->find($id)->update($request->all());
        return redirect()->route('index3',$request)->with('success', 'Malumotlar muvofaqiyatli yungilandi');
    }

    public function delete5($request, $id)
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
        return $this->delete56($request, $id);        
    }

    public function delete56($request, $id)
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
                    'summa'=>$sotuv->summa - $request->summa + $request->summa2 + $request->summa3
                ]);
        return $this->delete57($request, $id);
    }
    
    public function delete57($request, $id)
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
                    'summa'=>$sotuv->summa - $request->summa + $request->summa2 + $request->summa3
                ]);   
   
            return $this->delete58($request,$id);
        
    }

    public function delete58($request, $id)
    {
        $sotuv = $this->sotilishyil->where('yil_id', $request->yil_id)            
                                ->where('tavar_id', $request->tavar_id)
                                ->first();
   
        $this->sotilishyil->where('yil_id', $request->yil_id)
                ->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm - $request->kub,
                    'summa'=>$sotuv->summa - $request->summa + $request->summa2 + $request->summa3
                ]);
            return $this->delete59($request, $id);    
    }

    public function delete59($request, $id)
    {
        $sotuv = $this->sotilishopshi->where('tavar_id', $request->tavar_id)->first();
        $this->sotilishopshi->where('tavar_id', $request->tavar_id)
                ->update([
                    'hajm'=>$sotuv->hajm - $request->kub,
                    'summa'=>$sotuv->summa - $request->summa + $request->summa2 + $request->summa3
                ]);
            return $this->delete10($request, $id);
        
    }

    public function delete10($request, $id)
    {
        $a = $this->jamiyuridik->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)
                            ->where('kun_id', $request->kun_id)
                            ->first(); 
        $j = $a->jamisumma - $request->summa + $request->summa2 + $request->summa3;
        $j2 = $a->karzsumma - $request->karzsumma;
        $j3 = $j + $j2;
        $this->jamiyuridik->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('kun_id', $request->kun_id)
                        ->update([
                        'jamisumma'=>$j,
                        'karzsumma'=>$j2,
                        'umumiy'=>$j3,
                        ]);
        $b = $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)            
                            ->first(); 
        $jj = $b->jamisumma - $request->summa + $request->summa2 + $request->summa3;
        $jj2 = $b->karzsumma - $request->karzsumma;
        $jj3 = $jj + $jj2;
        $this->yuridikoyqarz->where('yil_id', $request->yil_id)
                            ->where('oy_id', $request->oy_id)                
                            ->update([
                            'jamisumma'=>$jj,
                            'karzsumma'=>$jj2,
                            'umumiy'=>$jj3,
                            ]);
        $c = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->first(); 
        $aa = $c->jamisumma - $request->summa + $request->summa2 + $request->summa3;
        $aa2 = $c->karzsumma - $request->karzsumma;
        $aa3 = $aa + $aa2;
        $this->yuridikyilqarz->where('yil_id', $request->yil_id)             
                            ->update([
                            'jamisumma'=>$aa,
                            'karzsumma'=>$aa2,
                            'umumiy'=>$aa3,
                            ]);
        $d = $this->yuridikopshiqarz->where('id', 1)->first(); 
        $bb = $d->jamisumma - $request->summa + $request->summa2 + $request->summa3;
        $bb2 = $d->karzsumma - $request->karzsumma;
        $bb3 = $bb + $bb2;
        $this->yuridikopshiqarz->where('id', 1)             
                                ->update([
                                'jamisumma'=>$bb,
                                'karzsumma'=>$bb2,
                                'umumiy'=>$bb3,
                                ]);
        $yuridikrasxod = Rosxod::where('id', 1)->first();    
        $javob = $yuridikrasxod->naqt - $request->summa;
        $qazx = $request->summa2 + $request->summa3;
        $javob2 = $yuridikrasxod->bank - $qazx;
        $qazx2 = $qazx + $request->summa;
        $ban2 = $yuridikrasxod->jami - $qazx2;
        Rosxod::where('id', 1)->update([
            'naqt'=>$javob,
            'bank'=>$javob2,
            'jami'=>$ban2
        ]);
        $this->yuridikchiqim->find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }
}
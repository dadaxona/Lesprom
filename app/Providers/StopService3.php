<?php

namespace App\Providers;
use App\Providers\StopService4;
use Carbon\Carbon;
use App\Models\Kompaniya;
use App\Models\Rosxod;

class StopService3 extends StopService4
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
  protected $jamik;
  protected $umumiykirimtavar;
  protected $umumiychiqimtavar;
  protected $yilumumiychiqimtavar;
  protected $opshiumumiychiqimtavar;
  protected $opshiumumiykitimtavar;
  protected $yilumumiykirimtavar;

    public function index3($request)
    {
       $dt= Carbon::now('Asia/Tashkent');
      $data1 = $dt->toDateString();
      $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
      $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
      $items = $this->kirimtavar->orderBy('id','DESC')->paginate();
      $yil = $this->yil->where('id', $request->yil_id)->first();
      $oy = $this->oy->where('id', $request->oy_id)->first();
      $kun = $this->kun->where('id', $request->id)->first();
      $kompaniya = Kompaniya::all();
      $tavar = $this->tavar->all();
      return view('bugalter.kelgantavar',['kompaniya'=>$kompaniya ,'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun, 'tavar'=>$tavar]);
    }

    public function create3($request)
    {
      $jamis = $request->summa + $request->kozoq + $request->uzb + $request->rostomoshka + $request->oylikharajat;
      $this->kirimtavar->create([
        'yil_id'=>$request->yil_id,
        'oy_id'=>$request->oy_id,
        'kun_id'=>$request->kun_id,
        'kompaniya_id'=>$request->kompaniya_id,
        'tavar_id'=>$request->tavar_id,
        'data'=>$request->data,
        'hajm'=>$request->hajm,
        'summa'=>$request->summa,
        'kozoq'=>$request->kozoq,
        'uzb'=>$request->uzb,
        'rostomoshka'=>$request->rostomoshka,
        'oylikharajat'=>$request->oylikharajat,
        'jami'=>$jamis,
      ]);

      $opshi = $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)
                                            ->first();
        if($opshi){
          $javob = $opshi->hajm + $request->hajm;
          $javob2 = $opshi->summa + $jamis;
          $opshi = $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)
          ->update([
            'hajm'=>$javob,
            'summa'=>$javob2                                
          ]);
          return $this->created3($request, $jamis);
        }else{
          $this->opshiumumiykitimtavar->create([
            'tavar_id'=>$request->tavar_id,
            'hajm'=>$request->hajm,
            'summa'=>$jamis
            ]);
            return $this->created3($request, $jamis);
        }

    }

    public function created3($request, $jamis)
    {
         $yil = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)
                                    ->where('tavar_id', $request->tavar_id)
                                    ->first();
          if($yil){
            $javob = $yil->hajm + $request->hajm;
            $javob2 = $yil->summa + $jamis;
            $yil = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)
                                    ->where('tavar_id', $request->tavar_id)
                                    ->update([
                                      'hajm'=>$javob,
                                      'summa'=>$javob2                                
                                    ]);
                return $this->created4($request, $jamis);
              }else{
                $this->yilumumiykirimtavar->create([
                  'yil_id'=>$request->yil_id,            
                  'tavar_id'=>$request->tavar_id,
                  'hajm'=>$request->hajm,
                  'summa'=>$jamis             
                ]);
                return $this->created4($request, $jamis);
              }
    }

    public function created4($request, $jamis)
    {
      $data = $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                          ->where('oy_id', $request->oy_id)
                          ->where('tavar_id', $request->tavar_id)
                          ->first();
      if($data){
      $javob = $data->hajm + $request->hajm;
      $javob2 = $data->summa + $jamis;
      $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                ->where('oy_id', $request->oy_id)
                ->where('tavar_id', $request->tavar_id)
                ->where('tavar_id', $request->tavar_id)
                ->update([
                  'hajm'=>$javob,
                  'summa'=>$javob2  
                ]);
                return $this->created5($request, $jamis);
        }else{
          $this->umumiykirimtavar->create([
            'yil_id'=>$request->yil_id,
            'oy_id'=>$request->oy_id,
            'tavar_id'=>$request->tavar_id,
            'hajm'=>$request->hajm,
            'summa'=>$jamis  
          ]);
          return $this->created5($request, $jamis);

        }
    }
    public function created5($request, $jamis)
    {
      $rasxod = Rosxod::where('id', 1)->first();
      if($rasxod){
        Rosxod::where('id', 1)->update([
          'bank'=>$rasxod->bank - $jamis,
          'jami'=>$rasxod->jami - $jamis
        ]);
        return $this->created6($request, $jamis);
      }else{
        Rosxod::create([
          'naqt'=> 0,
          'bank'=> 0,
          'jami'=> 0
        ]);
        $rasx = Rosxod::where('id', 1)->first();
        Rosxod::where('id', 1)->update([
          'bank'=>$rasx->bank - $jamis,
          'jami'=>$rasx->jami - $jamis
        ]);
        return $this->created6($request, $jamis);
      }
    }
    public function created6($request, $jamis)
    {
      $a = $this->jamik->where('yil_id', $request->yil_id)
      ->where('oy_id', $request->oy_id)
      ->where('kun_id', $request->kun_id)
      ->where('tavar_id', $request->tavar_id)
      ->first(); 
      if($a){
      $j = $a->hajm + $request->hajm;   
      $j2 = $a->summa + $jamis;   
      $this->jamik->where('yil_id', $request->yil_id)
              ->where('oy_id', $request->oy_id)
              ->where('kun_id', $request->kun_id)
              ->where('tavar_id', $request->tavar_id)
              ->update([
              'hajm'=>$j,
              'summa'=>$j2,
            ]); 
            return back()->with('success', 'Muvofaqiyatli yaratildi');
          }else{
            $this->jamik->create([
              'yil_id'=>$request->yil_id,
              'oy_id'=>$request->oy_id,
              'kun_id'=>$request->kun_id,
              'tavar_id'=>$request->tavar_id,
              'hajm'=>$request->hajm,
              'summa'=>$jamis            
              ]);
              return back()->with('success', 'Muvofaqiyatli yaratildi');
          }
    }

    public function store3($request)
    {
      $this->ishchi->create($request->all());
      return back()->with('success', 'Malumotlar muvofaqiyatli yaratildi');
      
    }

    public function show3()
    {
       $dt= Carbon::now('Asia/Tashkent');
      $data1 = $dt->toDateString();
      $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
      $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
      $data = $this->ishchi->paginate(20);
      return view('bugalter.ishchi',[ 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'data'=>$data]);
    }

    public function edit3($id)
    {
       $dt= Carbon::now('Asia/Tashkent');
      $data1 = $dt->toDateString();
      $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
      $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
      $data = $this->kun->find($id);
      return view('bugalter.kunedit',['date'=>$data, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }

    public function update3($request, $id)
    {
      $this->kun->find($id)->update($request->all());
      return redirect()->route('show2',[$request->oy_id])->with('success','Malumot muvofaqiyatli yangilandi');
    }

    public function delete3($request, $id)
    {
        $a = $this->jamik->where('yil_id', $request->yil_id)
                                    ->where('oy_id', $request->oy_id)
                                    ->where('kun_id', $request->kun_id)
                                    ->where('tavar_id', $request->tavar_id)
                                    ->first(); 
        $j = $a->hajm - $request->hajm; 
        $j2 = $a->summa - $request->summa; 
        $this->jamik->where('yil_id', $request->yil_id)
                                ->where('oy_id', $request->oy_id)
                                ->where('kun_id', $request->kun_id)
                                ->where('tavar_id', $request->tavar_id)
                                ->update([
                                    'hajm'=>$j,
                                    'summa'=>$j2
                                ]);  
      $data = $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                              ->where('oy_id', $request->oy_id)
                              ->where('tavar_id', $request->tavar_id)
                              ->first();
      $this->umumiykirimtavar->where('yil_id', $request->yil_id)
                        ->where('oy_id', $request->oy_id)
                        ->where('tavar_id', $request->tavar_id)
                        ->update([
                          'hajm'=>$data->hajm - $request->hajm,
                          'summa'=>$data->summa - $request->summa
                        ]);    

      $data = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)
                                    ->where('tavar_id', $request->tavar_id)
                                    ->first();
      $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)
                              ->where('tavar_id', $request->tavar_id)
                              ->update([
                                'hajm'=>$data->hajm - $request->hajm,
                                'summa'=>$data->summa - $request->summa
                              ]);

      $data = $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)->first();
      $this->opshiumumiykitimtavar->where('tavar_id', $request->tavar_id)
                              ->update([
                                'hajm'=>$data->hajm - $request->hajm,
                                'summa'=>$data->summa - $request->summa
                              ]);  
      $rasxod = Rosxod::where('id', 1)->first();
      Rosxod::where('id', 1)->update([
        'bank'=>$rasxod->bank + $request->summa,
        'jami'=>$rasxod->jami + $request->summa
      ]);
      $this->kirimtavar->find($id)->delete($id);
      return back()->with('success', 'Malumot muvofaqiyatli o`chirildi');
    }
}

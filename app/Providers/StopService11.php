<?php

namespace App\Providers;

use App\Models\Clensci;
use App\Models\Jismoniyclenci;
use App\Models\Rosxod;
use App\Models\Yillikxarajat;
use Carbon\Carbon;

class StopService11
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
    
    public function index26drektor($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->yil->find($request->yil_id);
        return view('drektor.yillikstatistikalar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }
    
    public function index26($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->yil->find($request->yil_id);
        return view('bugalter.yillikstatistikalar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function index27($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->first();
        if($dat){            
            $data = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->paginate(50);
            return view('bugalter.yilliksta',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }   
    }

    
    public function index27drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->first();
        if($dat){            
            $data = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->paginate(50);
            return view('drektor.yilliksta',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }   
    }

    public function index29drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->first();                                    
        if($dat){
        $data = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->paginate(50);
            return view('drektor.yilyuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index30drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->first();
        if($dat){
        $data = $this->jismoniyyilqarz->where('yil_id', $request->yil_id) ->paginate(50);
            return view('drektor.yiljismoniyjami',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }
    
    public function index31drektor($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dataa = $this->opshiumumiykitimtavar->all();
        $dat = Yillikxarajat::where('yil_id', $request->yil_id)->first();
        if($dat){
        $data = Yillikxarajat::where('yil_id', $request->yil_id) ->paginate(50);
            return view('drektor.yilsarftavar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat, 'dat'=>$dataa]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }        
    }  

    public function index28drektor($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->first();
        if($dat){
            $dataa = $this->opshiumumiykitimtavar->all();
            $data = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->paginate(50);
            return view('drektor.yillikishlab',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat ,'dataa'=>$dataa]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }
    public function index28($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yilumumiykirimtavar->where('yil_id', $request->yil_id)->first();
        if($dat){
            $dataa = $this->opshiumumiykitimtavar->all();
            return view('bugalter.yillikishlab',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'data'=>$dat ,'dataa'=>$dataa]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }
    public function index29($request)
    {        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->first();                                    
        if($dat){
        $data = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->paginate(50);
            return view('bugalter.yilyuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index30($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dat = $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->first();
        if($dat){
        $data = $this->jismoniyyilqarz->where('yil_id', $request->yil_id) ->paginate(50);
            return view('bugalter.yiljismoniyjami',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }
    }

    public function index31($request)
    {
        
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $dataa = $this->opshiumumiykitimtavar->all();
        $dat = Yillikxarajat::where('yil_id', $request->yil_id)->first();
        if($dat){
        $data = Yillikxarajat::where('yil_id', $request->yil_id) ->paginate(50);
            return view('bugalter.yilsarftavar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'data'=>$dat, 'dat'=>$dataa]);
        }else{
            return back()->with('danger', 'Malumot to`pilmadi');
        }        
    }   

    public function index32()
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        if($yuridik){
            $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->get();
            $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->get();
            return view('bugalter.karzdorlar', ['yuridik'=>$yuridik ,'jismoniy'=>$jismoniy]);
        }elseif($jismoniy){
            $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->get();
            $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->get();
            return view('bugalter.karzdorlar', ['yuridik'=>$yuridik ,'jismoniy'=>$jismoniy]);
        }else{
            return redirect('/dashbord')->with('danger', 'Malumot to`pilmadi');
        }   
    }

    public function index33($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
       return view('bugalter.karzdoredit', ['date'=>$request ,'yuridik'=>$yuridik ,'jismoniy'=>$jismoniy]);
    }

    public function index34($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
       return view('bugalter.jismoniykarz', ['date'=>$request ,'yuridik'=>$yuridik ,'jismoniy'=>$jismoniy]);
    }

    public function yuridik222($request, $id)
    {
        $wert = $this->yuridikchiqim->find($id);
        $ras = Rosxod::where('id', 1)->first();
        if($request->naqt){
            Rosxod::where('id', 1)->update([
                'naqt'=>$ras->naqt + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            $this->yuridikchiqim->find($id)->update([
                'summa'=>$wert->summa + $request->karzsumma,
                'karzsumma'=>$wert->karzsumma - $request->karzsumma,
            ]);
            return $this->yuridikrasxod22($request, $id, $wert);
        }elseif($request->kartq){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            $this->yuridikchiqim->find($id)->update([
                'summa2'=>$wert->summa2 + $request->karzsumma,
                'karzsumma'=>$wert->karzsumma - $request->karzsumma,
            ]);
            return $this->yuridikrasxod22($request, $id, $wert);
        }elseif($request->bank){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            $this->yuridikchiqim->find($id)->update([
                'summa3'=>$wert->summa3 + $request->karzsumma,
                'karzsumma'=>$wert->karzsumma - $request->karzsumma,
            ]);
            return $this->yuridikrasxod22($request, $id, $wert);
        }else{
            return back()->with('danger', 'To`lov turini belgilang');
        }
    }

    public function yuridikrasxod22($request, $id, $wert)
    {
        if($wert->karzsumma < $request->karzsumma){
            return back()->with('danger', 'Karz summa ko`p kiritildi');
        }
        $wert1 = $this->yuridikoyqarz->where('oy_id', $request->oy_id)->first();
        $this->yuridikoyqarz->where('oy_id', $request->oy_id)->update([
            'jamisumma'=>$wert1->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert1->karzsumma - $request->karzsumma,
        ]);
        $wert2 = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->first();
        $this->yuridikyilqarz->where('yil_id', $request->yil_id)->update([
            'jamisumma'=>$wert2->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert2->karzsumma - $request->karzsumma,
        ]);
        $wert3 = $this->yuridikopshiqarz->where('id', 1)->first();
        $this->yuridikopshiqarz->where('id', 1)->update([
            'jamisumma'=>$wert3->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert3->karzsumma - $request->karzsumma,
        ]);
        return redirect()->route('malumotlar',[$request])->with('success', 'Karz muvofaqiyatli to`landi');
    }

    public function yuridik($request, $id)
    {
        $ras = Rosxod::where('id', 1)->first();
        if($request->naqt){
            Rosxod::where('id', 1)->update([
                'naqt'=>$ras->naqt + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            return $this->yuridikrasxod($request, $id);
        }elseif($request->kartq){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            return $this->yuridikrasxod($request, $id);
        }elseif($request->bank){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            return $this->yuridikrasxod($request, $id);
        }else{
            return back()->with('danger', 'To`lov turini belgilang');
        }
    }

    public function yuridikrasxod($request, $id)
    {
        $wert = $this->yuridikchiqim->find($id);
        if($wert->karzsumma < $request->karzsumma){
            return back()->with('danger', 'Karz summa ko`p kiritildi');
        }
        $this->yuridikchiqim->find($id)->update([
            'summa'=>$wert->summa + $request->karzsumma,
            'karzsumma'=>$wert->karzsumma - $request->karzsumma,
        ]);
        $wert1 = $this->yuridikoyqarz->where('oy_id', $request->oy_id)->first();
        $this->yuridikoyqarz->where('oy_id', $request->oy_id)->update([
            'jamisumma'=>$wert1->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert1->karzsumma - $request->karzsumma,
        ]);
        $wert2 = $this->yuridikyilqarz->where('yil_id', $request->yil_id)->first();
        $this->yuridikyilqarz->where('yil_id', $request->yil_id)->update([
            'jamisumma'=>$wert2->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert2->karzsumma - $request->karzsumma,
        ]);
        $wert3 = $this->yuridikopshiqarz->where('id', 1)->first();
        $this->yuridikopshiqarz->where('id', 1)->update([
            'jamisumma'=>$wert3->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert3->karzsumma - $request->karzsumma,
        ]);
        return redirect()->route('index32')->with('success', 'Karz muvofaqiyatli to`landi');
    }

    public function jismoniy222($request, $id)
    {  
        $wert = $this->chiqim->find($id);
        $ras = Rosxod::where('id', 1)->first();
        if($request->naqt){
            Rosxod::where('id', 1)->update([
                'naqt'=>$ras->naqt + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            $this->chiqim->find($id)->update([
                'summa'=>$wert->summa + $request->karzsumma,
                'karzsumma'=>$wert->karzsumma - $request->karzsumma,
            ]);
            return $this->jismoniyrasxod22($request, $id, $wert);
        }elseif($request->kartq){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            $this->chiqim->find($id)->update([
                'summa2'=>$wert->summa2 + $request->karzsumma,
                'karzsumma'=>$wert->karzsumma - $request->karzsumma,
            ]);
            return $this->jismoniyrasxod22($request, $id, $wert);
        }elseif($request->bank){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            $this->chiqim->find($id)->update([
                'summa3'=>$wert->summa3 + $request->karzsumma,
                'karzsumma'=>$wert->karzsumma - $request->karzsumma,
            ]);
            return $this->jismoniyrasxod22($request, $id, $wert);
        }else{
            return back()->with('danger', 'To`lov turini belgilang');
        }
    }

    public function jismoniyrasxod22($request, $id, $wert)
    {
        if($wert->karzsumma < $request->karzsumma){
            return back()->with('danger', 'Karz summa ko`p kiritildi');
        }
        $wert1 = $this->jismoniyoyqarz->where('oy_id', $request->oy_id)->first();
        $this->jismoniyoyqarz->where('oy_id', $request->oy_id)->update([
            'jamisumma'=>$wert1->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert1->karzsumma - $request->karzsumma,
        ]);
        $wert2 = $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->first();
        $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->update([
            'jamisumma'=>$wert2->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert2->karzsumma - $request->karzsumma,
        ]);
        $wert3 = $this->jismoniyopshiqarz->where('id', 1)->first();
        $this->jismoniyopshiqarz->where('id', 1)->update([
            'jamisumma'=>$wert3->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert3->karzsumma - $request->karzsumma,
        ]);
        return redirect()->route('malumotlar2',[$request])->with('success', 'Karz muvofaqiyatli to`landi');
    }

    public function jismoniy($request, $id)
    {
        $ras = Rosxod::where('id', 1)->first();
        if($request->naqt){
            Rosxod::where('id', 1)->update([
                'naqt'=>$ras->naqt + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            return $this->jismoniyrasxod($request, $id);
        }elseif($request->kartq){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            return $this->jismoniyrasxod($request, $id);
        }elseif($request->bank){
            Rosxod::where('id', 1)->update([
                'bank'=>$ras->bank + $request->karzsumma,
                'jami'=>$ras->jami + $request->karzsumma,
            ]);
            return $this->jismoniyrasxod($request, $id);
        }else{
            return back()->with('danger', 'To`lov turini belgilang');
        }
    }

    public function jismoniyrasxod($request, $id)
    {
        $wert = $this->chiqim->find($id);
        if($wert->karzsumma < $request->karzsumma){
            return back()->with('danger', 'Karz summa ko`p kiritildi');
        }
        $this->chiqim->find($id)->update([
            'summa'=>$wert->summa + $request->karzsumma,
            'karzsumma'=>$wert->karzsumma - $request->karzsumma,
        ]);
        $wert1 = $this->jismoniyoyqarz->where('oy_id', $request->oy_id)->first();
        $this->jismoniyoyqarz->where('oy_id', $request->oy_id)->update([
            'jamisumma'=>$wert1->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert1->karzsumma - $request->karzsumma,
        ]);
        $wert2 = $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->first();
        $this->jismoniyyilqarz->where('yil_id', $request->yil_id)->update([
            'jamisumma'=>$wert2->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert2->karzsumma - $request->karzsumma,
        ]);
        $wert3 = $this->jismoniyopshiqarz->where('id', 1)->first();
        $this->jismoniyopshiqarz->where('id', 1)->update([
            'jamisumma'=>$wert3->jamisumma + $request->karzsumma,
            'karzsumma'=>$wert3->karzsumma - $request->karzsumma,
        ]);
        return redirect()->route('index32')->with('success', 'Karz muvofaqiyatli to`landi');
    }

    
    public function search($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = Clensci::orderBy('id','DESC')->paginate();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        $a = Clensci::where('raxbar',"LIKE" ,'%'.$request->raxbar2.'%')->where('tel',"LIKE" ,'%'.$request->tel2.'%')->first();
        if($a){
            return view('bugalter.yuridik',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items, 'a'=>$a,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun]);       
        }else{
            return back()->with('danger', 'Mijoz topilmadi');
        } 
    }
    public function search2($request)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = Jismoniyclenci::orderBy('id','DESC')->paginate();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        $a = Jismoniyclenci::where('mijoz', $request->mijoz)->where('tel', $request->tel)->first();
        if($a){
            return view('bugalter.jismoniy2',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items, 'a'=>$a, 'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun]);
        }else{
            return back()->with('danger', 'Mijoz topilmadi');
        }    
    }
}
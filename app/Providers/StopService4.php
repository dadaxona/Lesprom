<?php

namespace App\Providers;

use App\Models\Rosxod;
use App\Providers\StopService5;
use Carbon\Carbon;
class StopService4 extends StopService5
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
    
    public function index4($request)
    {     
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $items = $this->ishlabchiqarilgan->orderBy('id','DESC')->paginate();
        $yil = $this->yil->where('id', $request->yil_id)->first();
        $oy = $this->oy->where('id', $request->oy_id)->first();
        $kun = $this->kun->where('id', $request->id)->first();
        return view('bugalter.ishlabchiqar',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'items'=>$items,'yil'=>$yil, 'oy'=>$oy, 'kun'=>$kun]);
    }

    public function create4($request)
    {
        $qassa = Rosxod::where('id', 1)->first();      
        $qassa2 = $qassa->naqt - $request->summa;
        $qassa3 = $qassa->bank + $request->summa;
        Rosxod::where('id', 1)->update([
            'naqt'=>$qassa2,
            'bank'=>$qassa3,
        ]);
        
        $this->ishlabchiqarilgan->create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function store4($request, $id){}

    public function show4($id)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->ishlabchiqarilgan->find($id);
        $tavar = $this->tavarturi->all();
        return view('bugalter.isbalchiqedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data,'tavar'=>$tavar]);        
    }

    public function edit4($id)
    {
        
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->ishchi->find($id);
        return view('bugalter.ishchiedit',['yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'date'=>$data]);
    }

    public function update4($request, $id)
    {
        $this->ishchi->find($id)->update($request->all());
        return redirect()->route('show3')->with('success', 'Malumotlar muvofaqiyatli yungilandi');
    }

    public function delete4($request, $id)
    {
        $qassa = Rosxod::where('id', 1)->first();      
        $qassa2 = $qassa->naqt + $request->summa;
        $qassa3 = $qassa->bank - $request->summa;
        Rosxod::where('id', 1)->update([
            'naqt'=>$qassa2,
            'bank'=>$qassa3,
        ]);
        $this->ishlabchiqarilgan->find($id)->delete($id);
        return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }
}

<?php

namespace App\Providers;
use App\Providers\StopService3;
use Carbon\Carbon;
class StopService2 extends StopService3
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
    
    public function index2($id)
    {
        $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->kun->find($id);
        return view('bugalter.kumlikxisob',['date'=>$data, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }

    public function create2($request)
    {
        $this->oy->create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function store2($request)
    {
        $this->kun->create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function show2($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->oy->find($id);
        $item = $this->kun->where('oy_id',$id)->orderBy('id','DESC')->paginate();
        return view('bugalter.kunmalumot',['date'=>$data, 'items'=>$item, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'data1'=>$data1]);
    }

    public function edit2($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data = $this->oy->find($id);
        return view('bugalter.oyedit',['date'=>$data, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }

    public function update2($request, $id)
    {
        $this->oy->where('id',$id)->update([
            'oy'=>$request->oy
        ]);
        return redirect()->route('show',[$request->yil_id])->with('success', 'Malumot muvofaqiyatli yangilandi');
    }

    public function delete2($id)
    {
      $this->ishchi->find($id)->delete($id);
      return back()->with('success', 'Muvofaqiyatli o`chirildi');
    }
}

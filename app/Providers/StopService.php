<?php

namespace App\Providers;

use App\Models\Kompaniya;
use App\Models\Yil;
use App\Providers\StopService2;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class StopService extends StopService2
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
    
    public function dashbord()
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $brends = array();
        if(Session::has('IDIE')){
        $brends = $this->drektor->where('id','=',Session::get('IDIE'))->first();
        $data = $this->yil->paginate(100);
        return view('drektor.yil',['brends'=>$brends, 'data'=>$data, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);                  
        }
    }

    public function dashbord3()
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data)->first();
        $brends = array();
        if(Session::has('loginID')){
        $brends = $this->brend->where('id','=',Session::get('loginID'))->first();
        $data = $this->yil->orderBy('id','DESC')->paginate();
        return view('bugalter.yil',['brends'=>$brends, 'data'=>$data, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'year'=>$dt->year]);                  
        }      
    }

    public function index()
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data=$this->tavar->all();
        $kompan = Kompaniya::all();
        return view('bugalter.tavarjoylash',['data'=>$data,'kompan'=>$kompan, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }

    public function create($request)
    {
        $this->yil->create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }
    
    public function store($request)
    {
        $this->tavar->create($request->all());
        return back()->with('success', 'Muvofaqiyatli yaratildi');
    }

    public function show($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data=$this->yil->find($id);
        $item=$this->oy->orderBy('id','DESC')->paginate();
        return view('bugalter.oybolimi',['date'=>$data, 'items'=>$item, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy, 'month'=>$dt->month]);
    }

    public function showoydrektor($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data=$this->yil->find($id);
        $item=$this->oy->paginate(31);
        return view('drektor.oybolimi',['date'=>$data, 'items'=>$item, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }

    public function edit($id)
    {
         $dt= Carbon::now('Asia/Tashkent');
        $data1 = $dt->toDateString();
        $yuridik = $this->yuridikchiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $jismoniy = $this->chiqim->where('karzsumma', '>', 0)->where('sroc', '<=', $data1)->first();
        $data=$this->yil->find($id);
        return view('bugalter.yiledit',['date'=>$data, 'yuridik'=>$yuridik, 'jismoniy'=>$jismoniy]);
    }

    public function update($request, $id)
    {
        $this->yil->where('id',$id)->update([
            'yil'=>$request->yil
        ]);
        return redirect('dashbord')->with('success', 'Malumot muvofaqiyatli yangilandi');
    }

    public function delete($request, $id)
    {
        $this->yil->where('id',$request->yil_id)->delete($id);        
        return back()->with('success', 'Malumot muvofaqiyatli o`chirildi');
    }
}

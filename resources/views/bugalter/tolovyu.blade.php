@extends('bugalter.dashbord')
@section('title','Yuridik mijozlar ro`yxati')
@section('control')
    
<div class="container">
    <h1 style="text-align: center">{{ $clensci->raxbar }}</h1>
    <div class="row m-2">
    <form action="{{ route('malumotlar') }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
         <input type="hidden" name="id" id="" value="{{ $clensci->id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    
      <form action="{{ route('yuridik222',$items->id) }}" method="POST">
        <div class="row m-2">
            @csrf
              <div class="col-8 mt-3">
                   <label for="exampleFormControlInput1" class="form-label">Qarz summa</label>
                    <input type="text" class="form-control" value="{{ $items->karzsumma }}" disabled>
                </div>
            <input type="hidden" name="yil_id" id="" value="{{ $yil->id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $oy->id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $kun->id }}">
            <input type="hidden" name="id" id="" value="{{ $clensci->id }}">

            <div class="col-8 mt-3">
            <label for="exampleFormControlInput1" class="form-label">To`lov summani kiriting</label>
                <input type="number" name="karzsumma" class="form-control" placeholder="" value="{{ old('karzsumma') }}">
                <span class="text-danger">@error('karzsumma') {{$message}}@enderror</span>  
            </div>
            <div class="col-8 mt-3">          
                Naqt: <input type="checkbox" name="naqt" class="form-check-input" id="" value="Naqt pulda">           
                Karte: <input type="checkbox" name="kartq" class="form-check-input" id="" value="Karta orqali">           
                Bank: <input type="checkbox" name="bank" class="form-check-input" id="" value="Bank orqali">
            </div>
                <div class="col-8 mt-3">                    
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
        </div>       
        </form>
</div>

@endsection

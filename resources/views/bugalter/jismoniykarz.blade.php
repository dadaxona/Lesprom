@extends('bugalter.dashbord')
@section('title','Yuridik shaxslarning karzlarini to`lash bo`limi')
@section('control')
    
    <h1 style="text-align: center">Jismoniy shaxslarning karzlarini to`lash bo`limi</h1>

    <form action="{{ route('jismoniy',$date->id) }}" method="POST">
            @csrf
                <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
                <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
                <input type="hidden" name="kun_id" id="" value="{{ $date->kun_id }}">
                <input type="hidden" name="id" id="" value="{{ $date->id }}">
                <div class="col-6 mt-3">
                    <input type="number" class="form-control" value="{{ $date->karzsumma }}" disabled>                    
                </div>
                <div class="col-6 mt-3">
                    <input type="number" name="karzsumma" class="form-control" placeholder="Summani kiriting">
                    <span class="text-danger">@error('karzsumma') {{$message}}@enderror</span>  
                </div>
                <div class="col-6 mt-3">
                    Naqt: <input type="checkbox" name="naqt" class="form-check-input" id="" value="Naqt pulda"  id="flexCheckDefault">
                    Karte: <input type="checkbox" name="kartq" class="form-check-input" id="" value="Karta orqali">
                    Bank: <input type="checkbox" name="bank" class="form-check-input" id="" value="Bank orqali">
                </div>
                   <div style="text-align: center;" class="col-6 mt-2">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>   
                    
        </form>
@endsection
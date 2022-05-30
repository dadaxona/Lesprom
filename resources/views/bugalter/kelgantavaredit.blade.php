@extends('bugalter.dashbord')
@section('title','Kirgan tavarlarni to`yhatini yangilash bo`limi')
@section('control')
    
    <h1 style="text-align: center">Kelgan tovarlarni ro`yhatini yangilash bo`limi</h1>
    <form action="{{ route('update5',$date->id) }}" method="POST">
        <div class="row m-2">
            @csrf
            <input type="text" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="text" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="text" name="kun_id" id="" value="{{ $date->kun_id }}">
            <input type="text" name="id" id="" value="{{ $date->kun_id }}">
            <div class="col-6 mt-3">
                <select name="tavar_id" id="" class="form-control">
                    <option value="">Tavarni belgilang</option>
                    @foreach ($tavar as $item)
                    <option value="{{ $item->id }}">{{ $item->tavar }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('tavar_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="date" name="data" class="form-control" value="{{ $date->data }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="text" name="hajm" class="form-control" placeholder="Tovar hajmi" value="{{ $date->hajm }}">
                <span class="text-danger">@error('hajm') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="number" name="summa" class="form-control" placeholder="Olingan narx" value="{{ $date->summa }}">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="text" name="taminotchi" class="form-control" placeholder="Taminotchi nomi" value="{{ $date->taminotchi }}">
                <span class="text-danger">@error('taminotchi') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <input type="number" name="tel" class="form-control" placeholder="Taminotchi telefon raqami" value="{{ $date->tel }}">
                <span class="text-danger">@error('tel') {{$message}}@enderror</span>  
            </div >
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button type="submit" class="btn btn-success">Yangilash</button>
            </div>
        </div>       
        </form>
     
    
@endsection

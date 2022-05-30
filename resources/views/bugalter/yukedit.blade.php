@extends('bugalter.dashbord')
@section('title','Yuklarni yangilash bo`limi')
@section('control')
    
    <h1 style="text-align: center">Yuklarni yangilash bo`limi</h1>

    <form action="{{ route('update7',$date->id) }}" method="POST">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $date->kun_id }}">
            <input type="hidden" name="id" id="" value="{{ $date->kun_id }}">
            <div class="col-6 mt-3">
                <select name="ishchi_id" id="" class="form-control">
                    <option value="">Ishchi</option>
                    @foreach ($ishchi as $item)
                    <option value="{{ $item->id }}">{{ $item->name }} {{ $item->fam }} {{ $item->ochestvo }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('ishchi_id') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <select name="tavarturi_id" id="" class="form-control">
                    <option value="">Tavarni belgilang</option>
                    @foreach ($tavar as $item)
                    @if ($item->hajm <= 0)
                        
                    @else                        
                        <option value="{{ $item->id }}">{{ $item->tavarturi->tavarturi }}</option>
                    @endif
                    @endforeach
                </select>
                <span class="text-danger">@error('tavarturi_id') {{$message}}@enderror</span>  
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
            <input type="hidden" name="jamisumma" id="" value="{{ $date->jamisumma }}">
            <div class="col-6 mt-3">
                <div class="row">
                    <button type="submit" class="btn btn-primary">Yangilash</button>
                </div>
            </div>
        </div>       
        </form>
@endsection

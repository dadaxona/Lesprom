@extends('bugalter.dashbord')
@section('title','Ishlab chiqarilgan tovarni yangilash')
@section('control')
    
    <h1 style="text-align: center">Ishlab chiqarilgan tovarni yangilash</h1>

    <form action="{{ route('store4',$date->id) }}" method="POST">
        @csrf
        <input type="hidden" name="yil_id" id="" value="{{ $date->yil->id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $date->oy->id }}">
        <input type="hidden" name="kun_id" id="" value="{{ $date->kun->id }}">
        <input type="hidden" name="id" id="" value="{{ $date->kun->id }}">
        <div class="row m-1">
            <div class="col-6 mt-3">
                <select name="tavarturi_id" id="" class="form-control">
                    <option value="">Tavarni belgilang</option>
                    @foreach ($tavar as $item)
                    <option value="{{ $item->id }}">{{ $item->tavarturi }}</option>
                    @endforeach
                </select>
                <span class="text-danger">@error('tavarturi_id') {{$message}}@enderror</span>  
            </div>
            
            <div class="col-6 mt-2">
                <input type="date" name="data" class="form-control" value="{{ $date->data }}">
                <span class="text-danger">@error('data') {{$message}}@enderror</span>  
            </div>
          
                <input type="hidden" name="hafta" class="form-control" value="{{ $date->hafta }}">

            <div class="col-6 mt-2">
                <input type="text" name="hajm" class="form-control" value="{{ $date->hajm }}">
                <span class="text-danger">@error('hajm') {{$message}}@enderror</span>  
            </div>            
            <div class="col-6 mt-2">
                <input type="number" name="summa" class="form-control" value="{{ $date->summa }}">
                <span class="text-danger">@error('summa') {{$message}}@enderror</span>  
            </div>
           <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
            <button type="submit" class="btn btn-primary">Kelgan tavarlar</button>
           </div>
        </div>
        </form>    
@endsection
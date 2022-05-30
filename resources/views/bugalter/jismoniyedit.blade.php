@extends('bugalter.dashbord')
@section('title','Jismoniy shaxislarni ro`yxati')
@section('control')    
    <h1 style="text-align: center">Mijoz malumotlarini yangilash</h1>
    <div class="row m-2">
        <form action="{{ route('index6') }}" method="GET">
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="hidden" name="id" id="" value="{{ $date->kun_id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
        </div>
    <form action="{{ route('jismoniyedit2', $date->id) }}" method="POST">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $date->kun_id }}">
            <input type="hidden" name="id" id="" value="{{ $date->kun_id }}">
       
            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Mijoz nomi</label>

                <input type="text" name="mijoz" class="form-control" placeholder="Mijoz nomi" value="{{ $date->mijoz }}">
                <span class="text-danger">@error('mijoz') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Telefon</label>

                <input type="number" name="tel" class="form-control" placeholder="Tel.. 99 123 45 67" value="{{ $date->tel }}">
                <span class="text-danger">@error('tel') {{$message}}@enderror</span>  
            </div >      
         
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">Yangilash</button>
                </div>
          
        </div>       
        </form>
@endsection

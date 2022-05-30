@extends('bugalter.dashbord')
@section('title','Yuridik mijozlar ro`yxati')
@section('control')
    
    <h1 style="text-align: center">Mijoz malumotlarini yangilash</h1>
    <div class="row m-2">
    <form action="{{ route('index5') }}" method="GET">
        <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
        <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
        <input type="hidden" name="id" id="" value="{{ $date->kun_id }}">
        <button type="submit" class="btn btn-info">Orqaga</button>
    </form>
    </div>
    <form action="{{ route('update7',$date->id) }}" method="POST">
        <div class="row m-2">
            @csrf
            <input type="hidden" name="yil_id" id="" value="{{ $date->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $date->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $date->kun_id }}">
            <input type="hidden" name="id" id="" value="{{ $date->kun_id }}">
            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Firma nomi</label>

                <input type="text" name="kampaniya" class="form-control" placeholder="Firma nomi" value="{{ $date->kampaniya }}">
                <span class="text-danger">@error('kampaniya') {{$message}}@enderror</span>  
            </div>
            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Firma raxbari</label>

                <input type="text" name="raxbar" class="form-control" placeholder="Firma raxbari" value="{{ $date->raxbar }}">
                <span class="text-danger">@error('raxbar') {{$message}}@enderror</span>  
            </div>
            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Firma INN</label>

                <input type="text" name="inn" class="form-control" placeholder="Firma INN" value="{{ $date->inn }}">
                <span class="text-danger">@error('inn') {{$message}}@enderror</span>  
            </div>

            <div class="col-6 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Telefon</label>

                <input type="number" name="tel" class="form-control" placeholder="Tel.. 99 123 45 67" value="{{ $date->tel }}">
                <span class="text-danger">@error('tel') {{$message}}@enderror</span>  
            </div>
       
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                    <button type="submit" class="btn btn-primary">Yangilash</button>
                </div>
        </div>       
        </form>
@endsection

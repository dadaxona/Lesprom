@extends('bugalter.dashbord')
@section('title','Kunni malumotini yangilash')
@section('control')
    <h1>Kun malumotlarini yangilash</h1>               
    <hr>               
    <form action="{{ route('update3',$date->id) }}" method="POST">
        @csrf    
            <input type="hidden" name="yil_id" value="{{ $date->yil->id }}">
            <input type="hidden" name="oy_id" value="{{ $date->oy->id }}">
            <input type="hidden" name="id" value="{{ $date->id }}">
   <div class="row m-1">
       <div class="col-6">
        <input type="date" name="data" class="form-control" value="{{ $date->data }}">
        <span class="text-danger">@error('data') {{$message}}@enderror</span>

       </div>
       <div class="col-6">
           <select name="hafta" class="form-control">
                <option value="">Haftani belgilang</option>
                <option value="Dushabna">Dushabna</option>
                <option value="Seshanba">Seshanba</option>
                <option value="Chorshanba">Chorshanba</option>
                <option value="Payshanba">Payshanba</option>
                <option value="Juma">Juma</option>
                <option value="Shanba">Shanba</option>
                <option value="Yakshanba">Yakshanba</option>                        
            </select>
            <span class="text-danger">@error('hafta') {{$message}}@enderror</span> 
        
       </div>
       
       <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
           <button type="submit" class="btn btn-success">Kititish</button>
        </div>
    </div>
    </form>           
@endsection
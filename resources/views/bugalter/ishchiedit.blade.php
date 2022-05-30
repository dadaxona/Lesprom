@extends('bugalter.dashbord')
@section('title','Ishchilar royhatga olish bo`limi')
@section('control')
    
    <h1 style="text-align: center">Ishchilar royhatga olish</h1>

    <form action="{{ route('update4',$date->id) }}" method="POST">
        @csrf
        <div class="row m-1">
            <div class="col-3">
                <input type="text" name="name" class="form-control" value="{{ $date->name }}">
                <span class="text-danger">@error('name') {{$message}}@enderror</span>  
            </div>
            <div class="col-3">
                <input type="text" name="fam" class="form-control" value="{{ $date->fam }}">
                <span class="text-danger">@error('fam') {{$message}}@enderror</span>  
            </div>
            <div class="col-3">
                <input type="text" name="ochestvo" class="form-control" value="{{ $date->ochestvo }}">
                <span class="text-danger">@error('ochestvo') {{$message}}@enderror</span>  
            </div>
           <div class="col-3">
            <button type="submit" class="btn btn-primary">Kelgan tavarlar</button>
           </div>
        </div>
        </form>
    
@endsection
@extends('bugalter.dashbord')
@section('title','Yil bo`limini yangilash')
@section('control')
    <h1>Yil malumotlarini yangilash</h1>               
    <hr>               
    <form action="{{ route('update',$date->id) }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $date->id }}">
            <input type="text" class="form-control" name="yil"  value="{{$date->yil}}">
           
            <span class="text-danger">@error('yil') {{$message}}@enderror</span>                 
            <div>
                <button type="submit" class="btn btn-success mt-4">Yangilash</button>
            </div>
        </form>           
@endsection
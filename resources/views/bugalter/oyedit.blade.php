@extends('bugalter.dashbord')
@section('title','Yil bo`limini yangilash')
@section('control')
    <h1>Oy malumotlarini yangilash</h1>               
    <hr>               
    <form action="{{ route('update2',$date->id) }}" method="POST">
        @csrf
        <input type="hidden" name="yil_id" value="{{ $date->yil->id }}">
        <input type="hidden" name="id" value="{{ $date->id }}">
        <div class="form-control">
            <select name="oy" class="form-control">
                <option value="">Oyni belgilang</option>
                <option value="01">Yanvar</option>
                <option value="02">Fevral</option>
                <option value="03">Mart</option>
                <option value="04">Aprel</option>
                <option value="05">May</option>
                <option value="06">Iyun</option>
                <option value="07">Iyul</option>
                <option value="08">Avgust</option>
                <option value="09">Sentiabr</option>
                <option value="10">Oktiabr</option>
                <option value="11">Noyabr</option>
                <option value="12">Dekabr</option>                         
            </select>
            <span class="text-danger">@error('oy') {{$message}}@enderror</span>  
        </div>               
            <div>
                <button type="submit" class="btn btn-success m-1">Yangilash</button>
            </div>
        </form>           
@endsection
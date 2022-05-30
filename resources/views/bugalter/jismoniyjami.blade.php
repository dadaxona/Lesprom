@extends('bugalter.dashbord')
@section('title','Jismoniy shaxslarning kunlik statistikasi')
@section('control')
<div class="row m-3">
    <h1>Jismoniy shaxslarning kunlik statistikasi</h1>
 
        <form action="{{ route('index9') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $data->kun_id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

    <table class="table table-dark table-hover">
        <thead>
            <th>N1</th>
            <th>Tushum summa</th>      
            <th>Qarz summa</th>
            <th>Umumiy summa</th>                
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td><h5>{{ (($date->currentpage()-1) * $date->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->jamisumma}}</h5></td>             
                <td><h5>{{ $item->karzsumma }}</h5></td>
                <td><h5>{{ $item->umumiy }}</h5></td>                                     
            </tbody>
        @endforeach           
    </table>
    {{ $date->links() }}
   </div>
@endsection
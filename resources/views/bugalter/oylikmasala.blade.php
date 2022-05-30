@extends('bugalter.dashbord')
@section('title','Ishchilarning maoshining kunlik statistika')
@section('control')
<div class="row m-3">
    <h1>Ishchilarning maoshining kunlik statistika</h1> 
        <form action="{{ route('index9') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">
            <input type="hidden" name="kun_id" id="" value="{{ $data->oy->kun->id }}">
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>
    <table class="table table-dark table-hover">
        <thead>
            <th>N1</th>
            <th>Ism</th>      
            <th>Familiya</th>
            <th>Otasining ismi</th>                
            <th>Ortilgan yuk summai</th>                
            <th>Oyligi</th>                
            <th>Umumiy oyligi</th>
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td><h5>{{ (($date->currentpage()-1) * $date->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->ishchi->name}}</h5></td>
                <td><h5>{{ $item->ishchi->fam}}</h5></td>
                <td><h5>{{ $item->ishchi->ochestvo}}</h5></td>
                <td><h5>{{ $item->yuk}}</h5></td>
                <td><h5>{{ $item->summa }}</h5></td>
                <td><h5>{{ $item->jamisumma }}</h5></td>                                     
            </tbody>
        @endforeach           
    </table>
    {{ $date->links() }}
   </div>
@endsection
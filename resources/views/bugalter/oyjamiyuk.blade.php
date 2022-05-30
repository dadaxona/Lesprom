@extends('bugalter.dashbord')
@section('title','Oylik yuk ortuvchilarning jami malumotlari')
@section('control')
<div class="row m-3">
    <h1>Oylik yuk ortuvchilarning jami malumotlari</h1>
 
        <form action="{{ route('index18') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">    
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

    <table class="table table-dark table-hover">
        <thead>
            <th>N1</th>
            <th>Ishchi nomi</th>
            <th>Ishchi familiyasi</th>
            <th>Ishchi O`chestvo</th>
            <th>Hajm</th>
            <th>Summa</th>
            <th>Umumiy summa</th>                
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td><h5>{{ (($date->currentpage()-1) * $date->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->ishchi->name}}</h5></td>
                <td><h5>{{ $item->ishchi->fam}}</h5></td>
                <td><h5>{{ $item->ishchi->ochestvo}}</h5></td>
                <td><h5>{{ $item->hajm}}</h5></td>
                <td><h5>{{ $item->summa}}</h5></td>
                <td><h5>{{ $item->jamisumma}}</h5></td>
            </tbody>
        @endforeach           
    </table>
    {{ $date->links() }}
   </div>
@endsection
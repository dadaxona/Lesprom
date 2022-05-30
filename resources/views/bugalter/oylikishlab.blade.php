@extends('bugalter.dashbord')
@section('title','Oylik ishlab chiqarilgan tavar')
@section('control')
<div class="row m-3">
    <h1>Oylik ishlab chiqarilgan tavarlar</h1>
 
        <form action="{{ route('index18') }}" method="GET" class="mb-3">
            <input type="hidden" name="yil_id" id="" value="{{ $data->yil_id }}">
            <input type="hidden" name="oy_id" id="" value="{{ $data->oy_id }}">           
            <button type="submit" class="btn btn-info">Orqaga</button>
        </form>

    <table class="table table-dark table-hover">
        <thead>
            <th>N1</th>
            <th>Tovar nomi</th>      
            <th>Tovar hajmi</th>
            <th>Summa</th>
            <th>Jami summa</th>
        </thead>
        @foreach ($date as $item)
            <tbody>
                <td><h5>{{ (($date->currentpage()-1) * $date->perpage() + ($loop->index+1)) }}</h5></td>
                <td><h5>{{ $item->tavarturi->tavarturi }}</h5></td>             
                <td><h5>{{ $item->hajm }}</h5></td>
                <td><h5>{{ $item->summa }}</h5></td>                                     
                <td><h5>{{ $item->umumiy }}</h5></td>                                     
            </tbody>
        @endforeach           
    </table>
    {{ $date->links() }}
   </div>
@endsection